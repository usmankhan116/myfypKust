<x-home-top-header />
<html>
<head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Account Info</title>
    
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!--CUSTOM BASIC STYLES-->
        <link href="assets/css/basic.css" rel="stylesheet" />
        <!--CUSTOM MAIN STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
        <style>
            .w-5{
               display:none;
            }
            .pagination{
               margin: 0% 30% !important;
            }
         
         .Myimg{
            width: 200px ;
            height: 200px
         }
            .ribbon-2 {
                 --f: 10px;
                 /* control the folded part*/
                 --r: 15px;
                 /* control the ribbon shape */
                 --t: 12px;
                 /* the top offset */
               
                 position: absolute;
                 inset: var(--t) calc(var(--f)) auto auto;
                 padding: 0 20px var(--f) calc(10px + var(--r));
                 clip-path:
                  polygon(0 0, 100% 0, 100% calc(100% - var(--f)), 
                   calc(100% - var(--f)) calc(100% - var(--f)),
                  0 calc(100% - var(--f)), var(--r) calc(50% - var(--f)/2));
                 background: #bd1515;
                 color: #fff;
                 box-shadow: 0 calc(-1*var(--f)) 0 inset #0005;
             }
             .form-control{
               border: 1px solid #495057 !important;
             }
         
             #filter:focus
             {
              
               border: 1px solid #f26522 !important;
             }
             .heights{
               max-height:148%;
             }
            .box_main 
            {
               height: 450px !important;overflow:hidden
            }
         .containt_main{
            margin-top:50px;
         }
             @media only screen and (max-width: 600px) {
               .pagination{
               margin: 0% 0% !important;
            }
         
            .item{
               width:50% !important
            }
            .Myimg{
            width: 100px;
         }
         .box_main 
            {
               height: 320px !important;
            }
            .lang_box{
               display: none!important;
            }
            }
             .active-menu
             {
               background: #292828;border-left:5px solid green}
         </style>

    <style>


.containers h2 {
  color: #333;
}

.containers .form-group {
  margin-bottom: 15px;
}

.containers label {
    font-size: 16px !important; 
  display: block!important; 
  font-weight: bold !important; 
}

.containers input[type="text"],
.containers input[type="email"],
.containers input[type="password"] {
  width: 100%;
  padding: 5px;
  font-size: 16px;
}

.containers input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.containers input[type="submit"]:hover {
  background-color: #45a049;
}

    </style>
  <title>E-commerce Account</title>


@if(session()->has("message"))
<script>
   alert('{{Session("message")}}')
</script>

@endif

         <!-- header top section start -->

         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section"  >
          


            <div class="container" >
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="/home" class="active-menu"><i class="fa fa-home"></i> Home</a>
                     @if(session("verification")==true)
                     <a href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a>
                     <a href="/MyOrders"><i class="fa fa-truck "></i> Orders</a>
                     <a href="UserAccountInfo"><i class="fa fa-info-circle"></i> Account</a>
                     <a href=""><i class="fa fa-sign-out"></i> Logout</a>
                     @else
                     <a href="/"> Login</a>
                     @endif 
                  </div>
         
                  <span class="toggle_icon" onclick="openNav()">   <img src="../images/toggle-icon.png"></span>
                  <div class="dropdown">
                 
                  
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"  href="{{URL::to('/wholesellerSignIN')}}">Whole Seller</a>
                        <a class="dropdown-item"  href="{{URL::to('/ShopKeeperSignIN')}}">Shop kepper</a>
                        
                     </div>
                  </div>

                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="../images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                     
                     </div>
                     @if(session("verification")==true)
                     <div class="login_menu">
                        <ul>
                           <li><a href="/cart">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                       
                        </ul>
                     </div>
                    @endif
                  </div>
               </div> <br><br>
            </div>
         </div>
         <!-- header section end -->

       
     
    


      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container"><br>
                     <h1 class="fashion_taital">Account Information</h1>
         
  <div class="containers">
 
    <form id="accountForm">
      <div class="form-group col-md-6">
        <label for="name">Name:</label>
        <input type="text" value="{{$table->Name}}" disabled id="name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email:</label>
        <input type="email" id="email" value="{{session("username")}}" disabled required>
      </div>
      <div class="form-group col-md-6">
        <label for="Address">Address:</label>
        <input type="text" id="Address" value="{{$table->Address}}" disabled required>
      </div>
      <div class="form-group col-md-6">
        <label for="contact">Contact:</label>
        <input type="text" id="contact" value="{{$table->contact}}" disabled required>
      </div>
      <div class="form-group col-md-6">
        <label for="City">City :</label>
        <input type="text" id="City" value="{{$table->City}}" disabled required>
      </div>

      <div class="form-group col-md-6">
        <label for="State">State :</label>
        <input type="text" id="State" value="{{$table->State}}" disabled required>
      </div>
      <div class="form-group col-md-6">
        <label for="ZipCode">ZipCode :</label>
        <input type="text" id="ZipCode" value="{{$table->ZipCode}}" disabled required>
      </div>
      <div class="form-group col-md-6">
        <label for="Famousplace">Famousplace :</label>
        <input type="text" id="Famousplace" value="{{$table->Famousplace}}" disabled required>
      </div>
      <div class="form-group">
        <a href="/cart">
        <p type="submit" value="Save Changes" class="btn btn-primary">Edit address</p></a>
      </div>
    </form>

    <hr>

    <h2>Change Password</h2>
    <form action="UserUpdatePassword" method="POST" id="changePasswordForm">
        @csrf
        
      <div class="form-group">
        <label for="currentPassword">Current Password:</label>
        <input type="password" name="currentPassword" required>
      </div>
      <div class="form-group">
        <label for="newPassword">New Password:</label>
        <input onkeyup="fun()" type="password" name="password" id="newPassword" required>
      </div>
      <div class="form-group">
        <label  for="confirmNewPassword">Confirm New Password:</label>
        <input onkeyup="fun()" type="password" id="confirmNewPassword" required>
      </div>
      <div class="form-group">
        <abbr id="myabbr" title="Submit Button">
        <input type="submit" id="submit" value="Change Password" class="btn btn-primary"></abbr>
      </div>
    </form>
  </div>
</div>  </div>  </div></div>  </div>  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
  <script>
    function fun()
    {
        var newPassword=document.getElementById("newPassword").value;
        var confirmNewPassword=document.getElementById("confirmNewPassword").value;
        if(confirmNewPassword != newPassword)
        {
            document.getElementById("submit").disabled=true;
            document.getElementById("myabbr").title="password not matching";
        }
        else 
        {
            document.getElementById("myabbr").title="Submit Button";
            document.getElementById("submit").disabled=false;
        }
    }
  </script>

      <!-- fashion section end -->
      <x-home-footers />
           
                               
                                 
                   

<script>
    const filterInput = document.querySelector('#filter');
const items = document.querySelectorAll('.item');

filterInput.addEventListener('input', function() {
  const filterValue = this.value.toLowerCase();

  items.forEach(function(item) {
    if (item.textContent.toLowerCase().indexOf(filterValue) > -1) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
});

</script>