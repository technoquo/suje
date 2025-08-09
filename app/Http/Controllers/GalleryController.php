<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        return view('gallery.index', compact('heroes', 'socialnetworks'));
    }
}
