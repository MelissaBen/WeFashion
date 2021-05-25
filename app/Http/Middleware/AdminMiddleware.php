<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth::user();
        if(!$user) {
           // die('not auth'); 
            return redirect()->route('login');
        }
            
        //dd($user->role);

        if($user->role !== User::ADMIN_ROLE){
          return redirect()->route('login');

        }
        return $next($request);
    }
}
