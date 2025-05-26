<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Post;
use App\Models\SocialNetwork;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $posts = Post::whereStatus('published')
                      ->where('title', 'LIKE', "%{$search}%")
                     ->orWhere('description', 'LIKE', "%{$search}%")
                     ->orderBy('date_published','desc')
                     ->get();
        return view('blog.all', compact('posts', 'heroes', 'socialnetworks'));
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
    public function show($slug)
    {

        $tags  = Tag::all();
        $heroes = Hero::first();
        $post = Post::whereStatus('published')
            ->where('slug', $slug)
            ->firstOrFail();


        // Get related posts that share at least one tag
        $relatedPostsTags = Post::where('status', 'published')
            ->whereHas('tags', function ($query) use ($post) {
                $query->whereIn('tags.id', $post->tags->pluck('id'));
            })
            ->where('id', '!=', $post->id) // Exclude the current post
            ->with('tags')
            ->get();

        $socialnetworks = SocialNetwork::whereStatus(1)->get();

        return view('blog.index', compact('heroes', 'post', 'tags', 'relatedPostsTags','socialnetworks'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $posts = Post::where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->whereStatus('published')
            ->get();


        return view('blog.search', compact('posts', 'heroes','socialnetworks'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
