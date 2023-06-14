<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\admin_login;

class adminPages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
            $login =false;
                if(session()->has("username"))
                {
                    $sessionUsername=session("username");
                    $sessionPassword=session("password");

                    $adminTable=admin_login::all();
                    foreach ($adminTable as $admin)
                    {
                        if($sessionUsername == $admin->email && $sessionPassword == $admin->password)
                        {
                            $login=true;
                        }
                    }

                }
                if($login !=true)
                {
                    return redirect('/');
                }
        
        return $next($request);
    }
}
