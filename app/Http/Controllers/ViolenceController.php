<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\SocialNetwork;
use App\Models\Testimonial;
use App\Models\Violence;
use Illuminate\Http\Request;

class ViolenceController extends Controller
{
    public function index()
    {
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $violences = Violence::whereStatus(1)
                                        ->orderBy('title', 'asc')
                                        ->get();
        return view('violences.index', [
             'violences' => $violences,
             'heroes' => $heroes,
             'socialnetworks' => $socialnetworks,
        ]);
    }
}
