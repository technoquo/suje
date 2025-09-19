<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Hero;
use App\Models\SocialNetwork;
use App\Models\year;
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
        $year_id = Year::where('year', $year)->first();
        $gallery = Gallery::where('year_id', $year_id->id)->first();
        $images = GalleryImage::where('gallery_id', $gallery->id)->get();
        return view('gallery.show', compact('year','images','heroes', 'socialnetworks'));
    }
}
