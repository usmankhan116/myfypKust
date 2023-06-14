<?php

namespace App\Http\Controllers;

use App\Http\Middleware\wholesellers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\myorder;
use App\Models\address;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class homeCont extends Controller
{
   public   function data(){

      
      $owner= session("owner")  ;

   

   
  
         $TABLE= product::where("owner" ,  $owner)->get();
       
        
       
       return  view("home",['table'=>$TABLE,]) ;
    
   }


  public function checkoutFUN($id =null){ 

   if(isset($id))
   {
      $username= session("username");
   

    $cart=cart::where('product_id',$id)->get();
    $TABLE= product::find($id);

    return view('checkout',['cart'=>$cart,'TABLE'=>$TABLE]);
   }
   return view("checkout");

}
  public function  cartFUN()
  {
      $username= session("username");
    $TABLE= product::all();
    $cart=cart::where('user_id',$username)->get();
    $cart=cart::where('user_id',$username)->get();
   $addresstable=address::where('username',$username)->get();
   

    return view('cart',['cart'=>$cart,'TABLE'=>$TABLE,"address"=>$addresstable]);
  }
   //************************** ADD product to cart ************************* */
   public   function ProductAddTocartFUN( $id){

    $username= session("username");
    $ProductId= $id;
    $checkDubplicate=cart::where('product_id', $ProductId)->where('user_id',$username)->first();
    if($checkDubplicate != null){
      return  redirect('/home')->with("message","Product already added in cart ") ;
    }
    else 
    {
      $insert= new cart;
      $insert->user_id = $username;
      $insert->product_id = $ProductId;
      $insert->save();
     return  redirect('/home')->with("message","Product added to cart successfully") ;
    }

    
   }
public function PostProceedTochackOutFUN(Request $input)
{
   $username= session("username");
   $TABLE= product::all();
   $cart=cart::where('user_id',$username)->get();

   $array=0;
   $i=0;
   $arrays=array();
      foreach($cart as $item)
      {
       foreach($TABLE as $row)
      {
         if($row->id == $item->product_id )
         {

           $value=  $input->input($row->id ) ;

           if($value >0)
           {
            $arrays[$i] =$value;
            $i++;
           }
         }
      }
   }
   return view("checkout",["product"=>$arrays,"TABLE"=>$TABLE]);
  
   
   

   
}

public function PostSubmitOrderFUN(Request $input)
{
   $username= session("username");

   $cart=cart::where('user_id',$username)->get();



     $username= session ("username");
     
     $owner= session ("owner");
 
     $Myaddress=address::where("username",$username)->first();
     $MyaddressID=$Myaddress->id;

         foreach($cart as $item)
         {
         if($input->input($item->product_id )== $item->product_id )
         {


        
            $Quant=  $input->input("Qun".$item->product_id ) ;
            $value=  $input->input($item->product_id ) ;
         
      
            $orderInsert=new myorder;
            $orderInsert->productID= $value;
            $orderInsert->userid= $username;
            $orderInsert->owner= $owner;
            $orderInsert->Quant= $Quant;
            $orderInsert->addressId= $MyaddressID;
            $orderInsert->date=date('Y-m-d');
            $orderInsert->save();

            $deleteProductFromCart=cart::where('user_id',$username)->where('product_id',$item->product_id)->first();
            $deleteProductFromCart->delete();
         }
      }
      

      return redirect("/home")->with("message", "Your order has been placed successfully");
//     $CombineArray=  array_merge($arrays,$arraysQun);

// return $CombineArray;
   
}
/*******************************  Upload user address for orders ********************** */
public function UserAddressUploadFUN()
{
   return view ("ShopAddress");
}


/*****************************   Submit address Form ************************* */
public function SubmitAddressFormPostFUN(Request $input)
{
      $username=session ("username");
      $Name=$input->input("name");
      $Address=$input->input("address");
      $City=$input->input("city");
      $State =$input->input("state");
      $ZipCode=$input->input("zip");
      $Famousplace=$input->input("Famousplace");
      $contact=$input->input("contact");

      //Dubplicate address
      $Myaddress=address::where("username",$username)->first();

   
      if($Myaddress==null)
      {
         $addressInsert=new address;
         $addressInsert->username=  $username;
         $addressInsert->Name=  $Name;
         $addressInsert->Address=  $Address;
         $addressInsert->City=  $City;
         $addressInsert->State=  $State;
         $addressInsert->ZipCode=  $ZipCode;
         $addressInsert->Famousplace=  $Famousplace;
         $addressInsert->contact=  $contact;
         $addressInsert->save();

      }
      
      return $Myaddress;
}

public function EditAddressFUN($id)
{

   $address=address::find($id);

   return view("EditOrderAddress",["add"=>$address]);
}

public function UpdateAddressFormPostFUN(Request $input)
{
   $username=session ("username");
   $Name=$input->input("name");
   $Address=$input->input("address");
   $City=$input->input("city");
   $State =$input->input("state");
   $ZipCode=$input->input("zip");
   $Famousplace=$input->input("Famousplace");
   $contact=$input->input("contact"); 
   $id=$input->input("id"); 
   $addressInsert=address::find($id);


   $addressInsert->username=  $username;
   $addressInsert->Name=  $Name;
   $addressInsert->Address=  $Address;
   $addressInsert->City=  $City;
   $addressInsert->State=  $State;
   $addressInsert->ZipCode=  $ZipCode;
   $addressInsert->Famousplace=  $Famousplace;
   $addressInsert->contact=  $contact;
   $addressInsert->save();

  return  redirect("/cart");
}

//***************************Display order pages ******************************/

public function MyOrdersFunction()
{
   $username=session("username");
   
   $myorder=myorder::where("userid",$username)->orderby("id", "DESC")->get();

  $products=product::all();
   return view("MyOrders",["table"=>$myorder,"products"=>$products]);   
}

public function UserAccountInfoFUN()
{
   $username=session ("username");
   $Myaddress= address::where("username",$username)->first();
   return view("UserAccountInfo",["table"=>$Myaddress]);
}
public function DeletePRoductFromCartFUN($id)
{
   $products=cart::find($id);
   $products->delete();
   return redirect("/cart");
}
}
