<x-home-top-header />

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
                     <a href="/home" ><i class="fa fa-home"></i> Home</a>
                     @if(session("verification")==true)
                     <a href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a>
                     <a href="/MyOrders" class="active-menu"><i class="fa fa-truck " ></i> Orders</a>
                     <a href=""><i class="fa fa-info-circle"></i> Account</a>
                     <a href=""><i class="fa fa-sign-out"></i> Logout</a>
                     @else
                     <a href="/"> Login</a>
                     @endif 
                  </div>
         
                  <span class="toggle_icon" onclick="openNav()"><img src="../images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Become member
                     </button>
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
                     <h1 class="fashion_taital">Your Orders </h1>
             
                     <div class="fashion_section_2 heights"  >
                        <div class="row">
                           
                            @foreach ($table as $item)   
                            @if($item->status==="Pending")
                            @foreach ($products as $Rows)
                            @if($Rows->id== $item->productID)
                            <div class="col-md-4 ">
                              <div class="alert alert-success text-center">
                            <h4>  {{$Rows->name}}</h4> 
                     
                      
                       <hr />
                       <img style="width:100px ;height:100px" src="{{"../assets/images/".$Rows->image}}" alt="" srcset="">
                       <p>
                        
                     @php 
                        echo  "Price: ". $Rows->price." <br>Name: ".$Rows->name.
                        " <br>Formula: ".$Rows->formula ." <br>Quantity: ".$item->quant." <br>&nbsp;Pending"; @endphp
                     </p>
                       <hr />
                        <a href="/home" class="btn btn-info">  Goto shop</a> 
                     </div>
                     
                    </div>
                    @endif
                    @endforeach
                          
                    @endif

                          
               @if($item->status==="Inprocess")

                     @foreach ($products as $Rows)
                           @if($Rows->id== $item->productID)
                           <div class="col-md-4 ">
                           <div class="alert alert-success text-center" style="background: rgb(177, 233, 177)">
                           <h4>  {{$Rows->name}}</h4> 

                              
                           <hr  />
                           <img style="width:100px ;height:100px" src="{{"../assets/images/".$Rows->image}}" alt="" srcset="">
                           <p>

                           @php 
                           echo  "Price: ". $Rows->price." <br>Name: ".$Rows->name.
                           " <br>Formula: ".$Rows->formula ." <br>Quantity: ".$item->quant." <br>Expected Deilvery: ".$item->date ."<br>Inprocess" @endphp
                           </p>
                           <hr />
                           <a href="/home" class="btn btn-success">  Go to shop</a> 
                           </div>

                           </div>
                            @endif
                     @endforeach
             @endif


                  @if($item->status==="Failed")
                        @foreach ($products as $Rows)
                           @if($Rows->id== $item->productID)
                           <div class="col-md-4 ">
                           <div class="alert alert-danger text-center">
                           <h4>  {{$Rows->name}}</h4> 


                           <hr />
                           <img style="width:100px ;height:100px" src="{{"../assets/images/".$Rows->image}}" alt="" srcset="">
                           <p>

                           @php 
                           echo  "Price: ". $Rows->price." <br>Name: ".$Rows->name.
                           " <br>Formula: ".$Rows->formula ." <br>Quantity: ".$item->quant." <br> &nbsp;Delivery Failed"; @endphp
                           </p>
                           <hr />
                           <a href="/home" class="btn btn-info">  Goto shop</a> 
                           </div>

                           </div>
                            @endif
                     @endforeach
                          
                  @endif

                  @if($item->status==="DELIVERED")
                  @foreach ($products as $Rows)
                     @if($Rows->id== $item->productID)
                     <div class="col-md-4 ">
                     <div class="alert alert-danger text-center" style="background: rgb(71, 212, 71);color: #fff !important;">
                     <h4 style="color: #fff !important;">  {{$Rows->name}}</h4> 


                     <hr />
                     <img style="width:100px ;height:100px" src="{{"../assets/images/".$Rows->image}}" alt="" srcset="">
                     <p>

                     @php 
                     echo  "Price: ". $Rows->price." <br>Name: ".$Rows->name.
                     " <br>Formula: ".$Rows->formula ." <br>Quantity: ".$item->quant." <br> &nbsp;DELIVERED"; @endphp
                     </p>
                     <hr />
                     <a href="/home" class="btn btn-info">  Goto shop</a> 
                     </div>

                     </div>
                      @endif
               @endforeach
                    
            @endif      
                         
                           @endforeach
                 
                           <br><br>
                    
                        </div>
                  
                     </div>
                  </div>
               </div>
           
            </div>
      
         </div>
      </div>
    </div>

    
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