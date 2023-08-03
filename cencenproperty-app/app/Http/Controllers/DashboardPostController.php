<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post_image');

        $validateInput = $request->validate([
            'sell_rent' => 'required|max:255',
            'property_type' => 'required|',
            'title' => 'required|unique:posts',
            'description' => 'required',
            'address' => 'required',
            'size_type' => 'required',
            'size' => 'required',
            'bedroom' => 'required',
            'additional_bedroom' => 'required',
            'bathroom' => 'required',
            'furniture_electronics' => 'required',
            'facility' => 'required',
            'located_near' => 'required',
            'price' => 'required',
            // 'image' => 'image|file|max:1024',
            // 'user_id' => auth()->user()->id
        ]);

        
        if ($request->file('image')) {
                $validateInput['image'] = $request->file('image')->store('post_images');
            }
            
            $validateInput['user_id'] = auth()->user()->id;
            // dd($validateInput);
        // $validateInput['excerpt'] = Str::limit(strip_tags($validateInput['body']), 50);

        Post::create($validateInput);

        return redirect('/dashboard')->with('success','Post succesfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
