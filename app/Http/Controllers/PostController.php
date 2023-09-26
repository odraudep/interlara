<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            ['title' => 'Title here', 'description' => 'Description here lorem ipsum he lkjodiajd asoddosj'],
            ['title' => 'Title here', 'description' => 'Description here lorem ipsum he lkjodiajd asoddosj'],
            ['title' => 'Title here', 'description' => 'Description here'],
            ['title' => 'Title here', 'description' => 'Description here lorem ipsum he lkjodiajd asoddosj'],
            ['title' => 'Title here', 'description' => 'Description here lorem ipsum he lkjodiajd asoddosj'],
            ['title' => 'Title here', 'description' => 'Description here lorem ipsum he lkjodiajd asoddosj'],
            ['title' => 'Title here', 'description' => 'Description here'],
            ['title' => 'Title here', 'description' => 'Description here lorem ipsum he lkjodiajd asoddosj'],
            ['title' => 'Title here', 'description' => 'Description here'],
        ];
        return view('pages.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
