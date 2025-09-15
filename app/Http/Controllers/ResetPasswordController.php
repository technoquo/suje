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
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function create($token)
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
        return view('auth.reset-password', ['token' => $token],
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
                'token'    => 'required',
                'email'    => 'required|email',
                'password' => 'required|min:8|confirmed',
            ],
            [
                'token.required'      => 'Le jeton de réinitialisation est requis.',

                'email.required'      => 'L’adresse e-mail est obligatoire.',
                'email.email'         => 'Veuillez entrer une adresse e-mail valide.',

                'password.required'   => 'Le mot de passe est obligatoire.',
                'password.min'        => 'Le mot de passe doit contenir au moins 8 caractères.',
                'password.confirmed'  => 'Les mots de passe ne correspondent pas.',
            ]
        );

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
