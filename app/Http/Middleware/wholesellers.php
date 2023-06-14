<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\wholesale_login;

class wholesellers
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
            $verification=false;
            $wholesale_login=wholesale_login::all();

        
            foreach ($wholesale_login as $wholeseller)
            {
                if($sessionUsername == $wholeseller->email && $sessionPassword == $wholeseller->password)
                {
                    $verification = true;
                    session()->put("owner","Theadmin");
                  
                    session()->put("verification",true);
                 }
             }
      if($verification == false)
      {
         session()->put("verification",false);
       
      }
         

        return $next($request);
        }}
}
