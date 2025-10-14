<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Group;
use App\Models\Hero;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SportController extends Controller
{

    public function index()
    {

        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();

        return view('sports.index', [
            'sport_slug' => $sport,
            'heroes' => $heroes,
            'socialnetworks' => $socialNetworks,
            'groups' => $groups,
            'service' => $service,
            'serviceImage' => $serviceImage,
            'services' => $services,
        ]);
    }

    public function activities($slug)
    {


        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();


            $activities = Activity::where('slug', $slug)
                ->where('status', 1)
                ->paginate(6);


        return view('sports.activities', [
            'heroes' => $heroes,
            'activities' => $activities,
            'socialnetworks' => $socialNetworks

        ]);
    }

    public function all(Request $request)
    {
        $search = $request->input('search');
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::where('status', 1)->get();
        $activities = Activity::query()
            ->where(function ($q) use ($search) {
                $q->where('activities.title', 'LIKE', "%{$search}%")
                    ->orWhere('activities.description', 'LIKE', "%{$search}%");
            })
            ->orderBy('activities.date_published', 'desc')
            ->paginate(6);
        return view('sports.all', compact('heroes', 'socialnetworks', 'activities'));
    }

    public function show($slug)
    {
        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();

        $activity = Activity::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();



        return view('sports.activity', [
            'heroes' => $heroes,
            'socialnetworks' => $socialNetworks,
            'activity' => $activity,
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $activities = Activity::where('status', 1)
            ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($search) . '%'])
            ->paginate(6);

        return view('sports.search', compact('activities', 'heroes','socialnetworks'));
    }


}
