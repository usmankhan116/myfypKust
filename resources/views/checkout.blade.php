
<html lang="en">
<style>
    .col-md-6{
        float: left;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Buying Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<x-home-top-header />
<br><br><br><br>
</div>

<div class="container">
    <br>

   <br>
    <form action="PostSubmitOrder" method="post">
        @csrf
        <div class="row">
            @for ($i=0;$i<count($product);$i++)
            @foreach ($TABLE as $row)
            @if ($product[$i]==$row->id)
                
          
            <div class="col-md-6">
               
                <div class="card">
                    <h2 style="text-align: center">Product Details</h2>
                    <img class="card-img-top" style="width:200px;height:200px;margin:0% 30%" src="{{"../assets/images/".$row->image}}" alt="Product Image">
                    <div class="card-body">

                        <h4 style="text-align: center" class="card-title">{{$row->name}}</h4>
                        <p style="text-align: center" class="card-text">{{$row->detail}}</p>
                        <h5 style="text-align: center" class="card-price">{{$row->price}} pkr</h5>
                        <div class="form-group">
                        <label style="width: 100px;float:left"  for="quantity">Quantity</label>
                        <input style="width: 100px;float:left" name="Qun{{$row->id}}" value="1" type="number" class="form-control" id="quantity" min="1" required>
                       <input type="hidden" name="{{$row->id}}" value="{{$row->id}}">
                    </div>
                    </div>
                </div> 
                 <br>
            </div>
          
         

        
        @endif
        @endforeach
        @endfor</div>
      
    
        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle form submission
            $('#orderForm').submit(function(event) {
                event.preventDefault();
                // Perform AJAX request to submit the order
                // You can add your logic here to process the order details
                alert('Order placed successfully!');
            });
        });
    </script>
</body>

</html>