<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Parsedown;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('posts.create', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request("post-tag"));

        $parsedown = new Parsedown;
        $markdownContent = request('post-content');
        $htmlContent = new HtmlString($parsedown->text($markdownContent));
        Storage::disk('public')->put("/posts-content/" . request('post-title') . ".html",  $htmlContent);
        $imageOnline = false;
        $imageLink = null;
        if (request('post-image-online') !== null) {
            $imageOnline = true;
            $imageLink = request('post-image-link');
        } else {
            $imageLink = str_replace(' ', '', request('post-title')) . "." . request('post-image-file')->getClientOriginalExtension();
            request('post-image-file')->storeAs('post-image', $imageLink);
        }
        $post = Post::create([
            "title" => request('post-title'),
            "description" => request('post-description'),
            "image_online" => $imageOnline,
            "image" =>$imageLink,
            "content" => request('post-title'),
            "author_id" => Auth::id()
        ]);

        $post->tags()->sync([request("post-tag")]);

        $post->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
