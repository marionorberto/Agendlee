<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users = User::all();

      return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->sex = $request->sex;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!isset($id)) return NULL;

        $user = User::find($id);
        if(!isset($user)) return NULL;

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->sex = $request->sex;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

         if(!$id) return;
         $user = User::find($id);

         if(!$user) echo "user don't exist";

         $user->delete();

         return redirect()->route('user.index');

    }
}
