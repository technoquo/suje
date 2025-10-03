<?php

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

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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



        return view('home',
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }

    public function teams(){

        $teams = Team::whereActive(1)->get();
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();

        return view('teams.index', compact('teams', 'heroes', 'socialnetworks'));
    }

    public function ligue()
    {
        $heroes = Hero::first();
        $services = Service::whereStatus(1)->get();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();

        return view('ligue', compact('heroes','socialnetworks','services'));
    }
}
