<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Hero;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $galleries = Gallery::with('years')
            ->whereHas('years', fn ($q) => $q->where('year', '>=', 2001))
            ->join('years', 'galleries.year_id', '=', 'years.id')
            ->orderBy('years.year', 'asc')
            ->select('galleries.*')
            ->get();
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        return view('gallery.index', compact('galleries','heroes', 'socialnetworks'));
    }

    public function show($year)
    {


        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        return view('gallery.show', compact('year','heroes', 'socialnetworks'));
    }
}
