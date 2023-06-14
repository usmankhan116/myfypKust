<x-home-top-header /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
           h1 {
            font-weight: 900;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            margin: 0;
        }
        
        .cart-items {
            padding: 20px;
        }
        
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .cart-item img {
            width: 100px;
            margin-right: 20px;
        }
        
        .item-details h2 {
            margin: 0;
        }
        
        .remove-button {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        
        .cart-total {
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .checkout-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        

        div {
            margin-bottom: 10px;
        }

        strong {
            display: inline-block;
            width: 200px;
        }
        .addLink{
          background: orange;
         
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
          
        }
    </style>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><h1>Shopping Cart</h1> </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- logo section end -->
      </div>
      <!-- banner bg main end -->
    

      
      <div class="fashion_section">
  
        <div class="container" style="border: 1px solid">
          <h1 style="color: black">Address Form</h1>
          @php $bool=false  @endphp
          <div class="row">
    @foreach($address as $add)
    <div class="col-md-6">
      <strong>Name:</strong> {{ $add->Name }}
  </div>   
  <div class="col-md-6">
    <strong>contact:</strong> {{ $add->contact }}
</div>
<div class="col-md-6">
              <strong>Street:</strong> {{ $add->Address }}
                  </div>
          @php $bool=true  @endphp
          <div class="col-md-6">
              <strong>City:</strong> {{ $add->City }}
          </div>
      
          <div class="col-md-6">
              <strong>State:</strong> {{ $add->State }}
          </div>
          
          <div class="col-md-6">
              <strong>Famous place:</strong> {{ $add->Famousplace }}
          </div>
      
          <div class="col-md-6">
              <strong>Postal Code:</strong> {{ $add->ZipCode }}
          </div>
       
 
          @endforeach</div>
          @if($bool==true)
          <div class="col-md-6">
            <a class="addLink" href="/EditAddress/{{$add->id}}">Edit</a>
          </div>
          @else 
          <div class="col-md-6">
            <a class="addLink" href="/UserAddressUpload">Submit Address</a>
          </div>
          @endif
         <br>
        </div>

         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
         <br><br>        
          <div class="container" style="border: 1px solid">
         
                     <div class="fashion_section_2">
                        <div class="row">
                         <form action="PostProceedTochackOut" method="POST">
                  @csrf
                          <div class="cart-items">
                           @php $total=0; @endphp
                           @foreach ($cart as $item)
                               
                           
                              <div class="cart-item" >
                               
                                 @foreach ($TABLE as $Rows)
                                 @if($Rows->id == $item->product_id )

                                 <input type="checkbox" onclick="fun()" id="a{{$Rows->id}}" style="position: absolute;margin-top:20px" >
                                  <input  type="text"  hidden id="{{$Rows->id}}" value="0" >
                                  
                                  <input hidden  type="text" id="B{{$Rows->id}}" name="{{$Rows->id}}" value="0"    >

                                 <img src="{{"../assets/images/".$Rows->image}}" alt="{{$Rows->image}}" style="margin-left: 30px">
                                 <div class="item-details">
                                  <h2>{{$item->name}}</h2>
                                  <p>Price: {{floor($Rows->price-($Rows->price * $Rows->Discount/100))}} pkr</p>
                                  
                              </div>
                                
                                @endif
                                 @endforeach
                               
                             
                                 <a href="DeletePRoductFromCart/{{$item->id}}"  class="remove-button"> Remove</a>
                                 
                              </div>



                           
                              @endforeach
                          </div>
                  
                    
                  
                        </div>
                     </div>      <div class="cart-total">
                        <h2>Total: <span id="totalPrice">0</span> pkr</h2>
                       
                        @if($bool==true)
                        <button type="submit" class="checkout-button">Proceed to Checkout</button>
                        @endif
                      </form> 
                      @if($bool==false)
                      
                     <span style="color: #ff0000">Submit your Address form first</span>
                      @endif
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

       
<script>
  function fun()
  {   
    var totalPrice=0;
    @foreach ($cart as $item)
    @foreach ($TABLE as $Rows)
    @if($Rows->id == $item->product_id )
    if(document.getElementById("a{{$Rows->id}}").checked == true)
    {
      document.getElementById("{{'B'.$Rows->id}}").value= "{{$Rows->id}}";

      document.getElementById("{{$Rows->id}}").value= {{floor($Rows->price-($Rows->price * $Rows->Discount/100))}};
      var price= document.getElementById("{{$Rows->id}}").value;
  
    
    
    totalPrice=parseFloat(totalPrice)+parseFloat(price);
  }
  else 
  {
    document.getElementById("{{'B'.$Rows->id}}").value= "0";
  }
 
    @endif
    @endforeach
    @endforeach

 
    document.getElementById("totalPrice").innerHTML =totalPrice;
  }
  
  </script>