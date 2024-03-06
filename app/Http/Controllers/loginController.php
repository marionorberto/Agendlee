<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('login');
    }
}
