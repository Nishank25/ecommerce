<?php $user = \Illuminate\Support\Facades\Auth::user();?>
<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="@isset($user->profile_image) {{url($user->profile_image)}} @endisset" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{$user->name}}
                    </div>
                </a>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>

            <li>
                <a href="{{route('category_manage')}}">
                    <i class="fal fa-suitcase"></i>
                    <span>Manage Categories</span></span>
                </a>
            </li>
            <li>
                <a href="{{route('product_manage')}}">
                    <i class="fab fa-product-hunt"></i>
                    <span>Manage Products</span>
                </a>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->