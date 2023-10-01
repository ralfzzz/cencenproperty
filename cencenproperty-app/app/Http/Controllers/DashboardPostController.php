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
            'hot_list' => 'required|max:10',
            'property_type' => 'required|',
            'title' => 'required|unique:posts|max:25',
            'description' => 'required',
            'address' => 'required',
            'kota_kabupaten' => 'required',
            'size_type' => 'required',
            'size' => 'required',
            'bedroom' => 'required',
            'additional_bedroom' => 'required',
            'bathroom' => 'required',
            'furniture_electronics' => 'required',
            'facility' => 'required',
            'located_near' => 'required',
            'price' => 'required',
            'image' => 'required|image|file|max:1024',
            'image2' => 'required|image|file|max:1024',
            'image3' => 'required|image|file|max:1024',
            'image4' => 'required|image|file|max:1024',
            'image5' => 'required|image|file|max:1024',
            // 'image' => 'image|file|max:1024',
            // 'user_id' => auth()->user()->id
        ]);

        
        if ($request->file('image') ) {
                $validateInput['image'] = $request->file('image')->store('post_images');
            }
        if ($request->file('image2')) {
            $validateInput['image2'] = $request->file('image2')->store('post_images');
        }
        if ($request->file('image3')) {
            $validateInput['image3'] = $request->file('image3')->store('post_images');
        }
        if ($request->file('image4')) {
            $validateInput['image4'] = $request->file('image4')->store('post_images');
        }
        if ($request->file('image5')) {
            $validateInput['image5'] = $request->file('image5')->store('post_images');
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
            'hot_list' => 'required|max:10',
            'property_type' => 'required|',
            'title' => 'required|max:25',
            'description' => 'required',
            'address' => 'required',
            'kota_kabupaten' => 'required',
            'size_type' => 'required',
            'size' => 'required',
            'bedroom' => 'required',
            'additional_bedroom' => 'required',
            'bathroom' => 'required',
            'furniture_electronics' => 'required',
            'facility' => 'required',
            'located_near' => 'required',
            'price' => 'required',
            'image' => 'required|image|file|max:1024',
            'image2' => 'required|image|file|max:1024',
            'image3' => 'required|image|file|max:1024',
            'image4' => 'required|image|file|max:1024',
            'image5' => 'required|image|file|max:1024',
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
        if ($request->file('image2')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $validateInput['image2'] = $request->file('image2')->store('post_images');
        }
        if ($request->file('image3')) {
            if ($request->oldImage3) {
                Storage::delete($request->oldImage3);
            }
            $validateInput['image3'] = $request->file('image3')->store('post_images');
        }
        if ($request->file('image4')) {
            if ($request->oldImage4) {
                Storage::delete($request->oldImage4);
            }
            $validateInput['image4'] = $request->file('image4')->store('post_images');
        }
        if ($request->file('image5')) {
            if ($request->oldImage5) {
                Storage::delete($request->oldImage5);
            }
            $validateInput['image5'] = $request->file('image5')->store('post_images');
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
        if ($post->image2) {
            Storage::delete($post->image2);
        }
        if ($post->image3) {
            Storage::delete($post->image3);
        }
        if ($post->image4) {
            Storage::delete($post->image4);
        }
        if ($post->image5) {
            Storage::delete($post->image5);
        }
        Post::destroy($post->id);

    return redirect('/dashboard2')->with('success','Post succesfully deleted!');
    }
}
