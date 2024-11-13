<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Prompts\Prompt;
use Symfony\Component\HttpFoundation\Response;

use function Laravel\Prompts\alert;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      $country = $request->input('country');
      if($country!="india"){
            die("you are outside");
      }else {
        return $next($request);
      }
        
        
    }
}
