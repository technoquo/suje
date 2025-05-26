<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Group;
use App\Models\Hero;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SportController extends Controller
{

    public function index($slug, $sport)
    {
        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();

        // Obtener el servicio por slug
        $service = Service::where('title', 'LIKE', "%$slug%")->first();

        $services = Service::whereStatus(1)->get();

        if (!$service) {
            return redirect()->back()->withErrors(['error' => 'Servicio no encontrado.']);
        }

        // Obtener la imagen del servicio por nombre
        $serviceImage = ServiceImage::where('name', 'LIKE', "%$sport%")
            ->where('service_id', $service->id)
            ->first();

        if (!$serviceImage) {
            return redirect()->back()->withErrors(['error' => 'Imagen del servicio no encontrada.']);
        }

        // Obtener el grupo relacionado
        $groups = Group::where('service_id', $service->id)
            ->where('sport', $serviceImage->id)
            ->get();


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

    public function activities($slug, $sport, $group)
    {

        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();

        $service = Service::where('title', 'LIKE', "%$slug%")->first();
        $serviceImage = ServiceImage::where('name', 'LIKE', "%$sport%")->first();


        $group_id = Group::where('slug', strtolower($group))
            ->where('service_id', $service->id)
            ->first();


        if ($group_id) {
            $activities = Activity::where('group_id', $group_id->id)
                ->where('service_id', $service->id)
                ->where('service_image_id', $group_id->sport)
                ->where('status', 1)
                ->paginate(6);
        } else {
            $activities = collect(); // or create a LengthAwarePaginator manually
        }

        return view('sports.activities', [
            'heroes' => $heroes,
            'activities' => $activities,
            'socialnetworks' => $socialNetworks,
            'sport_slug' => $sport,
            'ligue_slug' => $slug,
            'group_slug' => $group_id->title ?? null,
        ]);
    }

    public function all(Request $request)
    {
        $search = $request->input('search');
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::where('status', 1)->get();
        $activities = Activity::whereStatus(1)
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orderBy('date_published', 'desc')
            ->paginate(6);

        return view('sports.all', compact('heroes', 'socialnetworks', 'activities'));
    }

    public function show($slug)
    {
        $heroes = Hero::first();
        $socialNetworks = SocialNetwork::where('status', 1)->get();
        $activity = Activity::where('slug', $slug)->first();
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
            ->get();

        return view('sports.search', compact('activities', 'heroes','socialnetworks'));
    }


}
