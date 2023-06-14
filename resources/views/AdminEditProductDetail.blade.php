<x-navbar />
<x-admin-navbar />

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Upload Product </h1>
                <h1 class="page-subhead-line">Upload your product here</h1>

            </div>
        </div>
<div class="row">
    <div class="col-md-12">
       <div class="panel panel-info">
                <div class="panel-heading">
                  Upload 
                </div>
                
                    
              

                <div class="panel-body">
                    <form role="form" action="uploadProduct" method="POST" enctype="multipart/form-data">
@csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" name="Name" value="{{$product->name}}" type="text" required>
                            <p class="help-block">Enter product name here</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-lg-4">Pre Defined Image</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src='{{url("assets/images/".$product->image)}}' alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                                        <input type="file" name="ImageUpload" required></span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enter weight</label>
                            <input class="form-control" name="weight" type="text" value="{{$product->weight}}" required>
                            <p class="help-block">Enter product weight  here</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Expire date</label>
                            <input class="form-control" type="date" value="{{$product->expire_date}}" name="expire_date" required>
                            <p class="help-block">Product expire date</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Formula</label>
                            <input class="form-control" type="text" value="{{$product->formlua}}"  name="formula" required>
                            <p class="help-block">Product formula</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="text"  value="{{$product->formula}}"  name="price" required>
                            <p class="help-block">Product price</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input class="form-control" type="number" value="{{$product->qut}}"  name="qut" required>
                            <p class="help-block">Product Quantity</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea  name="detail" class="form-control" rows="3" required>{{$product->detail}} </textarea>
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
