<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Order;
use App\Models\Post;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {

        $cart = json_decode($request->cart_items, true);

        // Crear orden
        $order = Order::create([
            'user_id'  => auth()->id(),
            'fullname' => $request->fullname,
            'email'    => $request->email,
            'address'  => $request->message,
            'total'    => collect($cart)->sum(fn($i) => $i['total_price']),
            'status'   => 'pending'
        ]);



        // Guardar items
        foreach ($cart as $item) {



            $order->items()->create([
                'product_id'  => $item['id'],
                'name'        => $item['name'],
                'image'       => $item['image'],
                'quantity'    => $item['quantity'],
                'price'       => $item['price'],
                'days'        => $item['days'],
                'date_debut'  => $item['date_debut'],
                'date_fin'    => $item['date_fin'],
                'total_price' => $item['total_price'],
                'penalty'     => 0,
            ]);
        }




        return redirect()->route('checkout.success', $order);


    }

    public function success(Order $order)
    {

        // Asegurarse de que el usuario autenticado es el propietario de la orden
        if (Auth::id() !== $order->user_id) {
            abort(403);
        }
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

        return view('checkout.success', compact(
            'order',
            'heroes',
            'socialnetworks',
            'features',
            'abouts',
            'teams',
            'services',
            'testimonials',
            'counters',
            'clients',
            'posts'
        ));
    }
}
