<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class adminController extends Controller
{
   public function productUploadFUN   () {
    return view('AdminUploadProduct');
}

public function uploadProductFUN   (Request $request ) {
    
    $extention=".".$request->file('ImageUpload')->getClientOriginalExtension();
    $imageName=product::all()->count(). $extention;
    $Name = $request->input('Name');
    $ImageUpload = $request->input('ImageUpload');
    $expire_date = $request->input('expire_date');
    $formula = $request->input('formula');
    $price = $request->input('price');
    $detail = $request->input('detail');
    $qut = $request->input('qut');
    $weight = $request->input('weight');

    $path= $request->ImageUpload->move(public_path('/assets/images'), $imageName);

    $Insertproduct=new product;
    $Insertproduct->image= $imageName;
    $Insertproduct->detail= $detail;
    $Insertproduct->price= $price;
    $Insertproduct->qut= $qut;
    $Insertproduct->name= $Name;
    $Insertproduct->formula= $formula;
    $Insertproduct->expire_date= $expire_date;
    $Insertproduct->weight= $weight;
    $Insertproduct->owner="Theadmin";
    $Insertproduct->Discount="0";
    $Insertproduct->save();
    
    return redirect("productUpload");

}
/******************************     Send data to  AdminProductsListFUN *** **********/
public function AdminProductsListFUN()
{
    $product=product::all();

    return view('AdminProductsList',["product"=>$product]);
}
public function productDeleteFUN($id)
{
    $product=product::find($id);
    $image="assets/images/".$product->image;

  
    if (File::exists($image)) {
        File::delete($image);
     
    }
   
    $product->delete();
    return redirect("AdminProductsList")->with("message", "Product deleted successfully");
    
}
public function productEditFUN($id)
{
    $product=product::find($id);

    return view("AdminEditProductDetail",["product"=>$product]);
}
 
}
