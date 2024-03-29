<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

  public function index()
  {
    return view('register');
  }

  public function store(Request $request)
  {
    $loginErrors = [];
    $user = new User();

    $this->validate(
      $request,
      [
        'firstname' => 'required|min:3|max:30',
        'lastname' => 'required|min:3|max:30',
        'username' => 'required|min:3|max:50|unique:users',
        'email' => 'required|unique:users|max:50|email',
        'password' => 'required|max:25',
        'sex' => 'required|max:1|min:1',
        'birthday' => 'required',
        'password' => 'required|min:8|max:50',
        'confirmPassword' => 'required|min:8|max:50',
      ],
      [
        'username.required' => 'firstname field is required.',
        'username.required' => 'firstaname field is required.',
        'username.required' => 'name field is required.',
        'username.unique' => 'username already exists.',
        'username.min' => 'the lenght must have between 3 to 50 caracters.',
        'firstname.min' => 'the lenght must have between 3 to 30 caracters.',
        'lastname.min' => 'the lenght must have between 3 to 30 caracters.',
        'username.max' => 'the lenght must have between 3 to 50 caracters.',
        'firstname.max' => 'the lenght must have between 3 to 30 caracters.',
        'lastname.max' => 'the lenght must have between 3 to 30 caracters.',
        'email.required' => 'email field is required.',
        'email.unique' => 'email already exists.',
        'email.max' => 'max email field lenght must be 90 caracters.',
        'email' => 'email invalid (example@hotmail.com)',
        'sex.required' => 'sex field is required.',
        'sex.max' => 'thelenght must be 1 caracter.',
        'sex.min' => 'the lenght must be 1 caracter.',
        'birthday.required' => 'birthday field is required.',
        'password.required' => 'password field is required.',
        'password.max' => 'the lenght must be between 8 to 50 caracters.',
        'password.min' => 'the lenght must be between 8 to 50 caracters.',
        'confirmPassword.required' => 'confirm password field is required.',
        'confirmPassword.max' => 'the lenght must be between 8 to 50 caracters.',
        'confirmPassword.min' => 'the lenght must be between 8 to 50 caracters.'
      ]
    );

    if ($request->password != $request->confirmPassword) {
      array_push($loginErrors, 'passwords not the same');
      return view('register', compact('loginErrors'));
    }

    $user->username = $request->username;
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->sex = $request->sex;
    $user->birthday = $request->birthday;
    $user->password = bcrypt($request->password,);
    $user->save();

    return view('login');
  }


  public function show(string $id)
  {
    if (!isset($id)) return NULL;

    $user = User::find($id);
    if (!isset($user)) return NULL;

    return view('user.show', compact('user'));
  }

  public function edit(string $id)
  {
    $user = User::find($id);

    return view('user.edit', compact('user'));
  }

  public function update(Request $request, string $id)
  {
    $user = User::find($id);

    $user->username = $request->username;
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->birthday = $request->birthday;
    $user->sex = $request->sex;
    $user->save();

    return redirect()->route('user.index');
  }

  public function destroy(string $id)
  {

    if (!$id) return;
    $user = User::find($id);

    if (!$user) echo "user don't exist";

    $user->delete();

    return redirect()->route('user.index');
  }
}
