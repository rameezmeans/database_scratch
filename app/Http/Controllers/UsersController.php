<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = new User();
        // $user->name = "Dummy";
        // $user->email = "dummy@dummy.com";
        // $user->password = Hash::make("dummy@dummy.com");
        // $user->save();

        // dd(User::all());
        $user = User::findOrFail(1);
        dd($user->oldestPost->user);

        // $user->posts()->create(
        //     ['title' => 'Second One', 'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '],
        // );

        // dd($user->posts);

        // $post = Post::findOrFail(1);
        // dd($post->user);

        // $profile = ['website' => 'mywebsite1.com', 'code' => 'ABC1234'];
        // $user = User::findOrFail(1);
        // $user->profile()->update($profile);

        // dd($user->profile->user);

        // $profile = Profile::findOrFail(1);
        // dd($profile->user->profile);

        // dd($user->with('profile')->first());
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
