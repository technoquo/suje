<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\SocialNetwork;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function index()
    {
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $professionals = Testimonial::whereStatus(1)
                                        ->orderBy('full_name', 'asc')
                                        ->get();
        return view('professionals.index', [
             'professionals' => $professionals,
             'heroes' => $heroes,
             'socialnetworks' => $socialnetworks,
        ]);
    }
}
