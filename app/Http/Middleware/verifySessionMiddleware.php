<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class verifySessionMiddleware
{

  public function handle(Request $request, Closure $next): Response
  {
    $isSessionLoginExisting = session()->exists('loginSession');
    if (!$isSessionLoginExisting) return redirect()->route('home');
    Log::debug(session()->get('loginSession'));

    return $next($request);
  }
}
