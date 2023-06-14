<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Middleware\wholesellers;
use App\Models\address;
use App\Models\product;
use App\Models\cart;
use App\Models\myorder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class wholeSellerCont extends Controller
{
    public function data()
    {
        $owner= session("owner") ;


    if($owner == "wholesellers")
    {
      $owner="shopkeeper";
    }
    if($owner == "admin")
    {
      $owner="wholesellers";
    }
    
    if($owner == "admin")
    {
      $owner="wholesellers";
    }
      
        if($owner ==null)
        {
          $owner="Theadmin";
        }

        $MyOrdersCount=myorder::where('owner',$owner)->where("status","Pending")->get()->count();
        $MyOrdersCountInProcess=myorder::where('owner',$owner)->where("status","InProcess")->get()->count();
        
        $Delivered=myorder::where('owner',$owner)->where("status","Delivered")->get()->count();
       
        $MyOrders=myorder::where('owner',$owner)->get();
   
        $TABLE= product::where("owner" ,  $owner)->get();
    
   
        
      return  view("wholesallerDashboard",['table'=>$TABLE, "MyOrders"=> $MyOrders, "MyOrdersCount"=>  $MyOrdersCount,"MyOrdersCountInProcess"=>$MyOrdersCountInProcess,"Delivered"=>$Delivered]) ;
    }

    public function UpdateOrderFUN($id)
    {
      
      $MyOrders=myorder::where("id",$id)->first();


      $ProductId=$MyOrders->productID;
      $TABLE= product::find($ProductId);
      $addID=  $MyOrders->addressId;
      $address=address::find($addID);

     
      return view ("updateOrder",["MyOrders"=>$MyOrders,"TABLE"=>$TABLE,"add"=>$address]);




     
    }

    public function UpdateUserOrderFUN(Request $Myinputs)
    {

      $OrderID=$Myinputs->input("OrderID");
      $DelDate=$Myinputs->input("DelDate");
      $Status=$Myinputs->input("Status");

    
      $update=myorder::where("id",$OrderID)->first();
 
      $update->date= $DelDate;
      $update->status= $Status;
      $update->save();
      return redirect("Dashboard")->with("Message","Order Updated");
     
    }
}
