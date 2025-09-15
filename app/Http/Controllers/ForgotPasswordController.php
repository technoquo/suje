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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function create()
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
        return view('auth.forgot-password',
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

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'L’adresse e-mail est obligatoire.',
                'email.email'    => 'Veuillez entrer une adresse e-mail valide.',
            ]
        );

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}
