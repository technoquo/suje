<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Counter;
use App\Models\feature;
use App\Models\Hero;
use App\Models\Post;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {

        $heroes = Hero::first();
        $features = feature::whereStatus(1)->get();
        $abouts = About::first();
        $teams = Team::whereActive(1)->get();
        $services = Service::whereStatus(1)->get();
        $testimonials = Testimonial::whereStatus(1)->get();
        $counters = Counter::whereStatus(1)->get();
        $clients = Client::whereStatus(1)->get();
        $posts = Post::whereStatus('published')->get();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();

        return view('auth.login',
            compact('heroes',
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

    public function store_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home'); // o tu ruta pública
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');
    }


    public function register()
    {
        $heroes = Hero::first();
        $features = feature::whereStatus(1)->get();
        $abouts = About::first();
        $teams = Team::whereActive(1)->get();
        $services = Service::whereStatus(1)->get();
        $testimonials = Testimonial::whereStatus(1)->get();
        $counters = Counter::whereStatus(1)->get();
        $clients = Client::whereStatus(1)->get();
        $posts = Post::whereStatus('published')->get();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();

        return view('auth.register',
            compact('heroes',
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

    public function store_register(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'fullname.required' => 'Le nom complet est obligatoire.',
            'fullname.string'   => 'Le nom complet doit être une chaîne de caractères.',
            'fullname.max'      => 'Le nom complet ne peut pas dépasser 255 caractères.',

            'email.required' => 'L’adresse e-mail est obligatoire.',
            'email.string'   => 'L’adresse e-mail doit être une chaîne de caractères.',
            'email.email'    => 'Veuillez entrer une adresse e-mail valide.',
            'email.max'      => 'L’adresse e-mail ne peut pas dépasser 255 caractères.',
            'email.unique'   => 'Cette adresse e-mail est déjà utilisée.',

            'password.required'  => 'Le mot de passe est obligatoire.',
            'password.string'    => 'Le mot de passe doit être une chaîne de caractères.',
            'password.min'       => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        $user = User::create([
            'name' => $validated['fullname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
