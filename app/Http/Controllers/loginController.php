<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\Translation\Util\ArrayConverter;

use function PHPUnit\Framework\isEmpty;

class loginController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('login');
  }
  public function login(Request $request)
  {
    $user = new User();

    $loginError = [];

    $user = $user::where('email', $request->email)
      ->get()->toArray();

    if (Count($user) <= 0) {
      array_push($loginError, 'email invalid');
      return view('login', ['emailError' => 'email is invalid']);
    }

    $userPasswordHashed = $user[0]['password'];

    $isPasswordOk = password_verify($request->password, $userPasswordHashed);

    if (!$isPasswordOk) {
      array_push($loginError, 'password invalid');
      return view('login', ['passwordError' => 'password is invalid']);
    }

    session()->put('loginSession', [
      'email' => $user[0]['email'],
      'username' => $user[0]['username']
    ]);

    return redirect()->route('home');
  }
}
