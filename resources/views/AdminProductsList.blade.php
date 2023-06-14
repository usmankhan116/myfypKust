<x-navbar />
<x-admin-navbar />

@php 
if(session()->has("message"))
{
    echo "<script> alert('".session("message")."') </script>";
}
@endphp
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Products </h1>
                <h1 class="page-subhead-line">Your product list is here</h1>

            </div>
        </div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Formula </th>
                        <th>Price</th>
                        <th>Expire date</th>
                        <th>Weight</th>
                        <th>Quantity</th>
                        <th>detail</th>
                        <th>ACtion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $row)
                        
                    
                    <tr>
                        <td>   <img style="width:50px;height:50px" src='{{url("assets/images/".$row->image)}}' alt=""> {{$row->name}}</td>
                        <td>{{$row->formula}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->expire_date}}</td>
                        <td>{{$row->weight}}</td>
              
                        <td>{{$row->qut}}</td>
                        <td>{{$row->detail}}</td>
                        <td>
                            <a href="/productEdit/{{$row->id}}"><i style="font-size:18px;padding:2px 4px;color:blue" class="fa fa-edit"></i></a>
                                       
                                        
                                       
                            <a href="/productDelete/{{$row->id}}"><i style="font-size:18px;padding:2px 4px;color:red" class="fa fa-trash"></i></a>

                            
                            
</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
