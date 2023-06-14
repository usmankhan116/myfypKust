<x-home-top-header />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
           h1 {
            font-weight: 900;
            color: #fff;
           
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
            width: 100px;
        }
 
    .containers {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      margin: 0 auto;
    }

    .form-group label {
      font-weight: 500;
    }

    .form-group input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ced4da;
    }

    .form-group button[type="submit"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      background-color: #007bff;
      border: none;
      color: #fff;
      font-weight: 500;
      cursor: pointer;
    }
  </style>
</head>

<br><br><br><br>
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
    </div> </div></div>
    <!-- banner bg main end -->
 

  <div class="containers" style="margin-top: 20px">
    
    <h3 style="position: absolute;margin-left: 120px"><br>Address Details</h3>
    <form id="addressForm" action="SubmitAddressFormPost" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="contact">contact</label>
        <input type="text" id="contact" name="contact" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <input type="text" id="state" name="state" required>
      </div>
      <div class="form-group">
        <label for="zip">Zip Code</label>
        <input type="text" id="zip" name="zip" required>
      </div>
      <div class="form-group">
        <label for="Famous">Famous place</label>
        <input type="text" id="Famous" name="Famousplace" required>
      </div>
      <button type="submit" class="checkout-button">Submit</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Handle form submission
    document.getElementById('addressForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // You can retrieve the form values and process them here
      var name = document.getElementById('name').value;
      var address = document.getElementById('address').value;
      var city = document.getElementById('city').value;
      var state = document.getElementById('state').value;
      var zip = document.getElementById('zip').value;
      var country = document.getElementById('country').
