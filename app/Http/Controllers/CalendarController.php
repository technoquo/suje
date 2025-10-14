<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Calendar;
use App\Models\Hero;
use App\Models\SocialNetwork;
use App\Models\Sport;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index($slug)
    {

       $sport = Sport::where('slug', $slug)->firstOrFail();


       $instagram = $sport->instagram;

        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();

        $calendar = Calendar::where('sport_id', $sport->id)
            ->where('status', 1)
            ->paginate(6);




        return view('sports.calendar', [
            'heroes' => $heroes,
            'socialnetworks' => $socialNetworks,
            'calendar' => $calendar,
            'instagram' => $instagram
        ]);

    }
}

