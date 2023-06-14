<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    @if(session("TheAdmin") !="True")
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
                            <img src="KP_logo.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Kpk Drug
                            <br />
                                <small>Last Login : {{session("LastAccess")}} </small>
                            </div>
                        </div>

                    </li>

              

                    <li>
                        <a class="active-menu" href="i{{URL::current()}}"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                 
                    <li>
                        <a href="/home"><i class="fa fa-square-o "></i>Buy Product</a>
                    </li>
             
                </ul>

            </div>

        </nav>
        @else 
        <x-navbar />
        <x-admin-navbar />
        @endif
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">You can manage your orders,product here  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <h5 style="color: #fff">Orders</h5>
                            <a href="#">
                                
                                <i class="fa fa-truck fa-5x"></i>
                                <h5>{{$MyOrdersCount}} Pending</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <h5 style="color: #fff">Orders</h5>
                            <a href="#"> 
                                <i class="fa fa-truck  fa-5x"></i>
                                <h5>{{$MyOrdersCountInProcess}} In Process</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box " style="background: seagreen">
                            <h5 style="color: #fff">Orders</h5>
                            <a href="#"> 
                                <i class="fa fa-truck  fa-5x"></i>
                                <h5>{{$Delivered}} Delivered</h5>
                            </a>
                        </div>
                    </div>

                </div>
              

                <hr />
                <div class="row">


                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>                  
                                        <th>quantity</th>
                                        <th>date</th>
                                        <th>status</th>
        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($MyOrders as $item)
                                    <tr>
                                        <td>{{$item->productID}}</td>
                                        <td>{{$item->userid}}</td>
                                        <td>{{$item->quant}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>{{$item->status}}</td>
                           

                                        <td><a href="/UpdateOrder/{{$item->id}}">Edit</a> - <a href="/DeleteOrder/{     {$item->productID}}">Delete</a>  </td>
                                        
                                    </tr>  
                                    @endforeach
                                    
                          
                                </tbody>
                            </table>  <br><br>
                        </div>
                    </div>
   
                  
                    <div class="col-md-8">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>price</th>
                                        <th>formula</th>
                                        <th>detail</th>
                                        <th>Discount</th>
                                        <th>Exp date</th>
                                        <th>qut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($table as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->formula}}</td>
                                        <td>{{$item->detail}}</td>
                                        <td>{{$item->Discount}}</td>
                                        <td>{{$item->expire_date}}</td>
                                        <td>{{$item->qut}}</td>
                                        <td><a href="">Edit</a> - <a href="">Delete</a>  </td>
                                        
                                    </tr>  
                                    @endforeach
                                    
                          
                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>
   

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

<x-footer />
</body>
</html>
