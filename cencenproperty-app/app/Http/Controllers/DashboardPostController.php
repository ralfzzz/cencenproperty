<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Post;
use Illuminate\Http\Request;
use Database\Factories\PostFactory;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'required|image|file|max:1024'
            // 'image' => 'image|file|max:1024',
            // 'user_id' => auth()->user()->id
        ]);

        
        if ($request->file('image')) {
                $validateInput['image'] = $request->file('image')->store('post_images');
            }
            
            $validateInput['user_id'] = auth()->user()->id;

            $validateInput['slug'] = PostFactory::slugify($request->title);
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
        return view('dashboard.edit',[
            'title' => 'Dashboard Edit',
            'active' => 'active',
            'posts' => $post
        ]);
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
        $rules = ([
            'sell_rent' => 'required|max:255',
            'property_type' => 'required|',
            'title' => 'required',
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
            'image' => 'required|image|file|max:1024'
        ]);

        $validateInput = $request->validate($rules);

        $uniq_slug = PostFactory::slugify($request->title).uniqid('-CC', true);
        $validateInput['slug'] = $uniq_slug;

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateInput['image'] = $request->file('image')->store('post_images');
        }

        $validateInput['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)->update($validateInput);

        return redirect("/dashboard2")->with('success','Post succesfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

    return redirect('/dashboard2')->with('success','Post succesfully deleted!');
    }
}
