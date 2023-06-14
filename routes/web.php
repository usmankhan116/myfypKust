<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeCont;
use App\Http\Controllers\loginCont;
use App\Http\Controllers\adminController;
use App\Http\Controllers\wholeSellerCont;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/login',[loginCont::class,'loginFun']);

Route::get('/', function () {
    return view('login');
});


Route::get('/wholesellerSignIN', function () {  return view('WholeSellerSignIN');});
Route::get('/ShopKeeperSignIN', function () {  return view('shopkeeperSignIn');});
Route::post("/shopkeeperSignINForm",[loginCont::class,"shopkeeperSignINFormFUN"]);

Route::post("/wholesellerSignINForm",[loginCont::class,"wholesellerSignINFormFUN"]);

Route::get('/about', function () {
    return view('about');
});




Route::get('/logout', function () {
    session()->pull("username",null);
    session()->pull("password",null);
    session()->pull("TheAdmin",null);
    return redirect('/');
});

Route::group(['middleware'=>['Protectedpages']],function(){

    Route::get('/admin', function () {
        return view('adminDashboard');
    });
    route::get("/admin",[wholeSellerCont::class,'data']);
    Route::get('/productUpload',[adminController::class,'productUploadFUN']); 
    Route::get('/AdminProductsList',[adminController::class,'AdminProductsListFUN']); 
    Route::post('/uploadProduct',[adminController::class,'uploadProductFUN']); 
    route::get('/productDelete/{id}',[adminController::class,'productDeleteFUN']);
    route::get('/productEdit/{id}',[adminController::class,'productEditFUN']);
});
route::group(['middleware'=>['wholesellersPreotection']],function(){
 
     
    route::get("wholsaellerDashboard",[wholeSellerCont::class,'data']);
    Route::get('/home',[homeCont::class,'data']);
    

});



route::group(['middleware'=>['shopkeeperPreotection']],function(){
 
     
    route::get("Dashboard",[wholeSellerCont::class,'data']);
    route::get("UpdateOrder/{id}",[wholeSellerCont::class,'UpdateOrderFUN']);
    route::post("UpdateUserOrder",[wholeSellerCont::class,"UpdateUserOrderFUN"]);

});

route::group(["middleware"=>['HomeProtection']],function () {
    Route::post("/UserUpdatePassword",[logincont::class,'UserUpdatePasswordFUN']);
    Route::get("/UserAccountInfo",[homeCont::class,'UserAccountInfoFUN']);
    Route::get("/MyOrders",[homeCont::class,'MyOrdersFunction']); 
   Route::get("/checkout",[homeCont::class,'checkoutFUN']);
   Route::get("/EditAddress/{id}",[homeCont::class,'EditAddressFUN']);
   Route::get("/UserAddressUpload",[homeCont::class,'UserAddressUploadFUN']);
   Route::post("/PostSubmitOrder",[homeCont::class,'PostSubmitOrderFUN']);
   Route::post("/UpdateAddressFormPost",[homeCont::class,'UpdateAddressFormPostFUN']);
   Route::post("/SubmitAddressFormPost",[homeCont::class,'SubmitAddressFormPostFUN']);
   Route::post("/PostProceedTochackOut",[homeCont::class,'PostProceedTochackOutFUN']);
    Route::get('/home',[homeCont::class,'data']);
    Route::get('/cart',[homeCont::class,'cartFUN']);
    Route::get('/ProductAddTocart/{id}',[homeCont::class,'ProductAddTocartFUN']) ;  
    Route::get('/DeletePRoductFromCart/{id}',[homeCont::class,'DeletePRoductFromCartFUN']);
});







