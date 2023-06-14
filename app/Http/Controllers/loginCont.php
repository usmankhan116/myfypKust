<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_login;
use App\Models\wholesale_login;
use App\Models\login;
use App\Models\shop_login;

use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class loginCont extends Controller
{
    public function  loginFun(Request $request)
    {
        $username = strtolower($request->input('username')) ;
        $password = md5($request->input('password')) ;
   
        date_default_timezone_set("Asia/karachi");
       $admin=admin_login::all();
  
       foreach($admin as $Admin)
       {
           if($Admin->email==$username && $Admin->password==$password)
           {
             
               session()->put("username",$username);
               session()->put("password",$password);
               session()->put("TheAdmin","True");
               session()->put("LastAccess",$Admin->Lastacces);
               $Lastacces=date('Y-m-d H:i:s');
            
             $supdateTime=DB::update("UPDATE  admin_login  SET    Lastacces ='$Lastacces' WHERE email='$Admin->email'");
      
            
             
            
               return redirect("/admin");
           }
       }




       $wholesaleTable=wholesale_login::all();
       foreach($wholesaleTable as $wholesaller)
       {    
        
           if($wholesaller->email ==$username && $wholesaller->password==$password)
           {
          
           
               session()->put("username",$username);
               session()->put("password",$password);
               session()->put("LastAccess",$wholesaller->Lastacces);
               $Lastacces=date('Y-m-d H:i:s');
            
             $supdateTime=DB::update("UPDATE  wholesale_login   SET    Lastacces ='$Lastacces' WHERE email='$wholesaller->email'");
      
            
         
               return redirect("/wholsaellerDashboard");  
                
           }
       }

       $userTable=login::all();
       foreach($userTable as $user)
       {
       
           if($user->email==$username && $user->password==$password)
           {
             
               session()->put("username",$username);
               session()->put("password",$password);
               session()->put("owner","shopkeeper");
               
               return redirect("/home");
           }
       }

  
       $shop_table=shop_login::all();
       foreach($shop_table as $shopuser)
       {


    
           if($shopuser->email==$username && $shopuser->password==$password)
           {    
             
               session()->put("username",$username);
               session()->put("password",$password);
               session()->put("owner","shopkeeper");
               
               return redirect("/Dashboard");
           }
       }
      

       return redirect("/");
    }

    public function wholesellerSignINFormFUN(Request $reqInput)
    { 

        $name= strtolower( $reqInput->input("name"));
        $password= md5( $reqInput->input("password"));
        $email= strtolower ( $reqInput->input("email"));
        $Contact= $reqInput->input("Contact");
        $address= $reqInput->input("address");
        $companyDetails= $reqInput->input("companyDetails");
        

        $Insert=new wholesale_login;
        $Insert->name=$name;
        $Insert->password=$password;
        $Insert->email=$email;
        $Insert->Contact=$Contact;
        $Insert->address=$address;
        $Insert->companyDetails=$companyDetails;
     
       if($Insert->save())
       {
        return "Sign in SuccessFull";
       } 
       else 
       {
        return "Faild to sign in";
       }
    }
 
    
    public function shopkeeperSignINFormFUN(Request $reqInput)
    { 

        $name= strtolower( $reqInput->input("name"));
        $password= md5( $reqInput->input("password"));
        $email= strtolower ( $reqInput->input("email"));
        $Contact= $reqInput->input("Contact");
        $address= $reqInput->input("address");
        $companyDetails= $reqInput->input("companyDetails");
        

        $Insert=new shop_login;
        $Insert->name=$name;
        $Insert->password=$password;
        $Insert->email=$email;
        $Insert->Contact=$Contact;
        $Insert->address=$address;
        $Insert->companyDetails=$companyDetails;
     
       if($Insert->save())
       {
        return "Sign in SuccessFull";
       } 
       else 
       {
        return "Faild to sign in";
       }
    }
    public function UserUpdatePasswordFUN(Request $reqInput)
    {
        $Email=session("username");
        $currentPassword=md5( $reqInput->input("currentPassword"));
        $password=md5( $reqInput->input("password"));

        $find=login::where('email',$Email )->where('password',$currentPassword )->first();

        if($find==null)
        {
            return redirect('UserAccountInfo')->with('message',"Invild current password");
        }
          
          $find->password=$password;
          $find->save();

            return redirect('UserAccountInfo')->with('message',"Password updated successfully");
    }
  
}
