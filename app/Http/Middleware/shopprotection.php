<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\shop_login;
class shopprotection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
        $login=false;
        $sessionUsername=session("username");
            $sessionPassword=session("password");
       
            $shop_table=shop_login::all();
            foreach($shop_table as $shopuser)
            {
                if($shopuser->email==$sessionUsername && $shopuser->password==$sessionPassword)
                {
                    
                    session()->put("owner","wholesellers");
                    $login=true;
                  
                 }
             }
            if($login!=true)
            {
                return redirect("/");
            }
               
         
        return $next($request);
    
}
}
