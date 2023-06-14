<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <link href="{{ asset('assets/css/bootstrap-fileupload.min.css')}}" rel="stylesheet" />
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                
                    <li>
                        <a href="/home"><i class="fa fa-square-o "></i>Buy Product</a>
                    </li>
                </ul>

            </div>

        </nav>
<div id="page-wrapper">
    
        <div class="row">

<div class="row">
    <div class="panel panel-info">
        <div class="panel-heading">
          Order 
        </div>

        <div class="panel-body">
            <h1 style="color: black">Address</h1>
            @php $bool=false  @endphp
            <div class="row">
     
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
         
   
  
           <br>
          </div>

       <h1 style="color: black">Order Detail</h1>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" value="{{$TABLE->name}}" type="text" disabled>
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-lg-4">Pre Defined Image</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{"../assets/images/".$TABLE->image}}" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  
                                </div>
                            </div>
                        </div>  
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enter weight</label>
                            <input class="form-control" value="{{$TABLE->weight}}" type="text" disabled>
                         
                        </div>
                    </div>
 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Formula</label>
                            <input class="form-control" value="{{$TABLE->formula}}" type="text" name="formula" disabled>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" value="{{$TABLE->price}}" type="text" name="price" disabled>
                            <p class="help-block">Product price</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input class="form-control" type="number"  value="{{$MyOrders->quant}}" disabled >
                            <p class="help-block">Product Quantity</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Order Id</label>
                            <input class="form-control" type="text"  value="{{$MyOrders->id}}" disabled>
                            
                            <p class="help-block">Product Quantity</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea  name="detail" class="form-control" rows="3" disabled>{{$TABLE->detail}}</textarea>
                        </div>
                  
                    </div>
                   
                    <form role="form" action="/UpdateUserOrder" method="POST" enctype="multipart/form-data">
                        @csrf  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Expected Delivery  date</label>
                                <input class="form-control" type="hidden" name="OrderID"  value="{{$MyOrders->id}}" required>
                                <input class="form-control"  type="date" name="DelDate" required>
                           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
   <select name="Status" id="" class="form-control">
    <option value="Failed">Failed</option>
    <option value="DELIVERED">DELIVERED</option>
    
    <option value="Inprocess">Inprocess</option>
   </select>
                           
                            </div>
                        </div>
                    <div class="col-md-8">
                        <button style="width:200px" type="submit" class="btn btn-info">Upload </button>
                    </div>
                           

                            </form>
                    </div>
                </div>
                  
                </div>
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <x-footer />
