<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\login;
use App\Models\wholesale_login;
use App\Models\shop_login;
class HomeContoller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $verification=false;
    
        $username = session("username") ;
        $password = session("password");
      
        $userTable=login::all();
        foreach($userTable as $user)
        {
            if($user->email==$username && $user->password==$password)
            { $verification = true;
                session()->put("owner","shopkeeper");
                session()->put("verification",true);
            }
        }


   
        
     
             $shop_table=shop_login::all();
             foreach($shop_table as $shopuser)
             {
                 if($shopuser->email==$username && $shopuser->password==$password)
                 {
                     $verification = true;
                     session()->put("owner","wholesellers");
                   
                     session()->put("verification",true);
                  }
              }

              
              $wholesale_login=wholesale_login::all();
              foreach ($wholesale_login as $wholeseller)
              {
                  if($username == $wholeseller->email && $password == $wholeseller->password)
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
    }
}
