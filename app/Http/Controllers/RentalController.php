<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Post;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{

    public function checkAvailability(Request $request)
    {
 //       Por temporal
        if (!auth()->check()) {
            return response()->json([
                'available' => false,
                'message'   => 'Veuillez vous connecter pour vérifier la disponibilité.'
            ], 401);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'date_debut' => 'required|date',
            'date_fin'   => 'required|date|after_or_equal:date_debut',
        ]);

        $productId = $request->input('product_id');
        $start = $request->input('date_debut');
        $end   = $request->input('date_fin');

        $exists = \App\Models\Rental::where('product_id', $productId)
            ->whereIn('statut', ['actif','en_attente'])
            ->where(function ($q) use ($start, $end) {
                $q->whereBetween('date_debut', [$start, $end])
                    ->orWhereBetween('date_fin', [$start, $end])
                    ->orWhere(function ($q2) use ($start, $end) {
                        $q2->where('date_debut', '<=', $start)
                            ->where('date_fin', '>=', $end);
                    });
            })
            ->exists();
        return response()->json([
            'available' => !$exists,
            'message'   => $exists
                ? 'Le produit n’est pas disponible pour ces dates.'
                : 'Produit disponible.'
        ]);
    }


    public function store(Request $request)
    {


        $request->validate([
            'product_id' => 'required|exists:products,id',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        $product = \App\Models\Product::find($request->input('product_id'));

        if (!$product) {
            return redirect()->back()->withErrors(['product_id' => 'Produit non trouvé.'])->withInput();
        }


        $rental = Rental::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $request->input('quantity'),
            'prix_total' => $product->price_per_day * $request->input('quantity'),
            'date_debut' => $request->input('date_debut'),
            'date_fin' => $request->input('date_fin'),
            'statut' => 'en_attente',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Location créée avec succès',
            'rental' => $rental,
        ]);

    }

        public function show($id)
    {

        $heroes = Hero::first();
        $features = Feature::whereStatus(1)->get();
        $abouts = About::first();
        $teams = Team::whereActive(1)->get();
        $services = Service::whereStatus(1)->get();
        $testimonials = Testimonial::whereStatus(1)->get();
        $counters = Counter::whereStatus(1)->get();
        $clients = Client::whereStatus(1)->get();
        $posts = Post::whereStatus('published')->get();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $rental = Rental::with('product', 'user')->findOrFail($id);

        if ($rental->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('rentals.show', compact('rental',
            'heroes',
            'socialnetworks',
            'features',
            'abouts',
            'teams',
            'services',
            'testimonials',
            'counters',
            'clients',
            'posts'));
    }








}