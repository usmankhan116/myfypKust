<li>
    <a  href="{{URL::to('/admin')}}" @if (URL::current()==URL::to('/admin')) class="active-menu"  @endif><i class="fa fa-dashboard "></i>Dashboard</a>
</li>
<li>
    <a href="#" 
    @if (URL::current()==URL::to('/productUpload') 
       ||URL::current()==URL::to('/AdminProductsList') )

     class="active-menu"  @endif>
     <i class="fa fa-product-hunt "></i>Product <span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
        <li>
            <a  href="{{URL::to('/productUpload')}}" @if (URL::current()==URL::to('/productUpload')) class="active-menu"  @endif><i class="fa fa-upload "></i>Upload</a>
        </li>
        <li>
            <a href="{{URL::to('/AdminProductsList')}}"><i class="fa fa-product-hunt "></i>Products List</a>
        </li>
    </ul>
<li>
    <a  href="/logout"><i class="fa fa-sign-out "></i>Logout</a>
</li>
</ul>
</div>

</nav>