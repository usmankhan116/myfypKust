<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
<html>
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Eflyer</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
        <!-- fevicon -->
        <link rel="icon" href="{{ asset('/images/fevicon.png') }}" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{ asset('/css/jquery.mCustomScrollbar.min.css') }}">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="{{ asset('/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
        <!-- fonts -->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap') }}" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
        <!--  -->
        <!-- owl stylesheets -->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="{{ asset('/css/bootstrap-fileupload.min.css') }}" rel="stylesheet" /> </head>
<head>
  <title>Company Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group {
      margin-bottom: 20px;
      float: left;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn-primary {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
    }
  </style>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>    
   
    <!-- header top section start -->
  
       <div class="header_section_top">
          <div class="row">
             <div class="col-sm-12">
                <div class="custom_menu">
                   <ul>   
                     <li> <h5 class="banner_taital" style="font-size: 24px">Kpk Drug Agency</h5></li>
                
                 
                   </ul>
                </div>
             </div>
          </div>
       </div>
  
<br><br>
<div class="container"><br><br>
    <h2>Registration Form</h2>
    <form id="registrationForm" action="wholesellerSignINForm"  method="POST">
        @csrf
      <div  class="col-6 form-group" >
        <label for="name"><i class="fas fa-user"></i>Company Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="col-6 form-group">
        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div  class="col-6 form-group" >
        <label for="name"><i class="fas fa-phone"></i> Contact:</label>
        <input type="text" class="form-control" id="name" name="Contact" required>
      </div>
      <div class="col-6 form-group">
        <label for="password"><i class="fas fa-lock"></i> Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="col-6 form-group">
        <label for="confirmPassword"><i class="fas fa-lock"></i> Confirm Password:</label>
        <input type="password" class="form-control" id="confirmPassword" required>
      </div>
      <div class="col-6 form-group">
        <label for="address"><i class="fas fa-map-marker-alt"></i> Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <br>
      <div class="col-10 form-group">
        <label for="companyDetails"><i class="fas fa-building"></i> Company Details:</label>
        <textarea class="form-control" id="companyDetails" name="companyDetails" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Register</button>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
\
</body>
</html>
<script>
    // Example JavaScript validation
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
      event.preventDefault();

      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirmPassword').value;

      if (password !== confirmPassword) {
        alert('Password and Confirm Password do not match!');
      } else {
        // Perform form submission
        alert('Registration Successful!');
        this.submit();
      }
    });
  </script>