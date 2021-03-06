<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>E-Commerce Front End Theme</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/e-commerce/style.min.css" rel="stylesheet" />
	<link href="../assets/css/e-commerce/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/e-commerce/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">
        <!-- BEGIN #top-nav -->
        <div id="top-nav" class="top-nav">
            <!-- BEGIN container -->
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown"><img src="../assets/img/flag/flag-english.png" class="flag-img" alt="" /> English <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="../assets/img/flag/flag-english.png" class="flag-img" alt="" /> English</a></li>
                                <li><a href="#"><img src="../assets/img/flag/flag-german.png" class="flag-img" alt="" /> German</a></li>
                                <li><a href="#"><img src="../assets/img/flag/flag-spanish.png" class="flag-img" alt="" /> Spanish</a></li>
                                <li><a href="#"><img src="../assets/img/flag/flag-french.png" class="flag-img" alt="" /> French</a></li>
                                <li><a href="#"><img src="../assets/img/flag/flag-chinese.png" class="flag-img" alt="" /> Chinese</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Customer Care</a></li>
                        <li><a href="#">Order Tracker</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Our Forum</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#"><i class="fa fa-facebook f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus f-s-14"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END container -->
        </div>
        <!-- END #top-nav -->
    
        <!-- BEGIN #header -->
        <div id="header" class="header">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN header-container -->
                <div class="header-container">
                    <!-- BEGIN navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- END navbar-header -->
                    <!-- BEGIN header-nav -->
                    <div class="header-nav">
                        <div class=" collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="dropdown dropdown-full-width dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Our Store 
                                        <i class="fa fa-angle-down"></i>
                                        <span class="arrow top"></span>
                                    </a>
                                    <!-- BEGIN dropdown-menu -->
                                    <div class="dropdown-menu p-0">
                                        <!-- BEGIN dropdown-menu-container -->
                                        <div class="dropdown-menu-container">
                                            <!-- BEGIN dropdown-menu-sidebar -->
                                            <div class="dropdown-menu-sidebar">
                                                <h4 class="title">Shop By Categories</h4>
                                                <ul class="dropdown-menu-list">
                                                    <li><a href="{{route('product')}}">Mobile Phone <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="{{route('product')}}">Tablet <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="{{route('product')}}">Laptop <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="{{route('product')}}">Desktop <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="{{route('product')}}">TV <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="{{route('product')}}">Speaker <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="{{route('product')}}">Gadget <i class="fa fa-angle-right pull-right"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- END dropdown-menu-sidebar -->
                                            <!-- BEGIN dropdown-menu-content -->
                                            <div class="dropdown-menu-content">
                                                <h4 class="title">Shop By Popular Phone</h4>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 7</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 6s</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 6</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 5s</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 5</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy S7</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy A9</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy J3</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy Note 5</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy S7</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 730</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 735</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 830</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 820</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia Icon</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia X</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia Z5</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia M5</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia C5</a></li>
                                                            <li><a href="{{route('product_detail')}}"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia C4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="title">Shop By Brand</h4>
                                                <ul class="dropdown-brand-list m-b-0">
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-apple.png" alt="" /></a></li>
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-samsung.png" alt="" /></a></li>
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-htc.png" alt="" /></a></li>
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-microsoft.png" alt="" /></a></li>
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-nokia.png" alt="" /></a></li>
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-blackberry.png" alt="" /></a></li>
                                                    <li><a href="{{route('product')}}"><img src="../assets/img/brand/brand-sony.png" alt="" /></a></li>
                                                </ul>
                                            </div>
                                            <!-- END dropdown-menu-content -->
                                        </div>
                                        <!-- END dropdown-menu-container -->
                                    </div>
                                    <!-- END dropdown-menu -->
                                </li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Accessories 
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('product')}}">Mobile Phone</a></li>
                                        <li><a href="{{route('product')}}">Tablet</a></li>
                                        <li><a href="{{route('product')}}">TV</a></li>
                                        <li><a href="{{route('product')}}">Desktop</a></li>
                                        <li><a href="{{route('product')}}">Laptop</a></li>
                                        <li><a href="{{route('product')}}">Speaker</a></li>
                                        <li><a href="{{route('product')}}">Gadget</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('product')}}">New Arrival</a></li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Pages
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/">Home (Default)</a></li>
                                        <li><a href="{{route('index_fixed_header')}}">Home (Fixed Header)</a></li>
                                        <li><a href="{{route('index_inverse_header')}}">Home (Inverse Header)</a></li>
                                        <li><a href="{{route('search_result')}}">Search Results</a></li>
                                        <li><a href="{{route('product')}}">Product Page</a></li>
                                        <li><a href="{{route('product_detail')}}">Product Details Page</a></li>
                                        <li><a href="{{route('checkout_cart')}}">Checkout Cart</a></li>
                                        <li><a href="{{route('checkout_info')}}">Checkout Shipping</a></li>
                                        <li><a href="{{route('checkout_payment')}}">Checkout Payment</a></li>
                                        <li><a href="{{route('checkout_complete')}}">Checkout Complete</a></li>
                                        <li><a href="{{route('my_account')}}">My Account</a></li>
                                        <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                                        <li><a href="{{route('about_us')}}">About Us</a></li>
                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        <i class="fa fa-search search-btn"></i>
                                        <span class="arrow top"></span>
                                    </a>
                                    <div class="dropdown-menu p-15">
                                        <form action="search_results.html" method="POST" name="search_form">
                                            <div class="input-group">
                                                <input type="text" placeholder="Search" class="form-control bg-silver-lighter" />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END header-nav -->
                    <!-- BEGIN header-nav -->
                    <div class="header-nav">
                        <ul class="nav pull-right">
                            <li class="dropdown dropdown-hover">
                                <a href="#" class="header-cart" data-toggle="dropdown">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="total">2</span>
                                    <span class="arrow top"></span>
                                </a>
                    
                                <div class="dropdown-menu dropdown-menu-cart p-0">
                                    <div class="cart-header">
                                        <h4 class="cart-title">Shopping Bag (1) </h4>
                                    </div>
                                    <div class="cart-body">
                                        <ul class="cart-item">
                                            <li>
                                                <div class="cart-item-image"><img src="../assets/img/product/product-ipad.jpg" alt="" /></div>
                                                <div class="cart-item-info">
                                                    <h4>iPad Pro Wi-Fi 128GB - Silver</h4>
                                                    <p class="price">$699.00</p>
                                                </div>
                                                <div class="cart-item-close">
                                                    <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-item-image"><img src="../assets/img/product/product-imac.jpg" alt="" /></div>
                                                <div class="cart-item-info">
                                                    <h4>21.5-inch iMac</h4>
                                                    <p class="price">$1299.00</p>
                                                </div>
                                                <div class="cart-item-close">
                                                    <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-item-image"><img src="../assets/img/product/product-iphone.png" alt="" /></div>
                                                <div class="cart-item-info">
                                                    <h4>iPhone 6s 16GB - Silver</h4>
                                                    <p class="price">$649.00</p>
                                                </div>
                                                <div class="cart-item-close">
                                                    <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-footer">
                                        <div class="row row-space-10">
                                            <div class="col-xs-6">
                                                <a href="checkout_cart.html" class="btn btn-default btn-block">View Cart</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="checkout_cart.html" class="btn btn-inverse btn-block">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <?php $user = \Illuminate\Support\Facades\Auth::user();?>
                            @if($user == null)
                            <li>
                                <a href="{{route('customer_login')}}">
                                    <img src="/assets/img/user/user-1.jpg" class="user-img" alt="" />
                                    Login
                                </a>
                            </li>
                            <li><a href="#">/</a></li>
                            <li>
                                <a href="{{route('customer_register')}}">Registration</a>
                            </li>
                            @else
                                <li>
                                    <a href="javascript:;">
                                        <span class="d-none d-md-inline">{{$user->name}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- END header-nav -->
                </div>
                <!-- END header-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #header -->
         @yield('content')
        <!-- BEGIN #footer -->
        <div id="footer" class="footer">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">ABOUT US</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tristique dolor, ac efficitur velit. Nulla lobortis tempus convallis. Nulla aliquam lectus eu porta pulvinar. Mauris semper justo erat. 
                        </p>
                        <p>
                            Vestibulum porttitor lorem et vestibulum pharetra. Phasellus sit amet mi congue, hendrerit mi ut, dignissim eros.
                        </p>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">RELATED LINKS</h4>
                        <ul class="fa-ul">
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Shopping Help</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Terms of Use</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Contact Us</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Careers</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Payment Method</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sales & Refund</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sitemap</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">LATEST PRODUCT</h4>
                        <ul class="list-unstyled list-product">
                            <li>
                                <div class="image">
                                    <img src="../assets/img/product/product-iphone-6s.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Iphone 6s</h4>
                                    <div class="price">$1200.00</div>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="../assets/img/product/product-galaxy-s6.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Samsung Galaxy s7</h4>
                                    <div class="price">$850.00</div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="image">
                                    <img src="../assets/img/product/product-ipad-pro.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Ipad Pro</h4>
                                    <div class="price">$800.00</div>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="../assets/img/product/product-galaxy-note5.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Samsung Galaxy Note 5</h4>
                                    <div class="price">$1200.00</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">OUR CONTACT</h4>
                        <address>
                            <strong>Twitter, Inc.</strong><br />
                            1355 Market Street, Suite 900<br />
                            San Francisco, CA 94103<br /><br />
                            <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                            <abbr title="Fax">Fax:</abbr> (123) 456-7891<br />
                            <abbr title="Email">Email:</abbr> <a href="mailto:sales@myshop.com">sales@myshop.com</a><br />
                            <abbr title="Skype">Skype:</abbr> <a href="skype:myshop">myshop</a>
                        </address>
                    </div>
                    <!-- END col-3 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #footer -->
    
        <!-- BEGIN #footer-copyright -->
        <div id="footer-copyright" class="footer-copyright">
            <!-- BEGIN container -->
            <div class="container">
                <div class="payment-method">
                    <img src="../assets/img/payment/payment-method.png" alt="" />
                </div>
                <div class="copyright">
                    Copyright &copy; 2017 SeanTheme. All rights reserved.
                </div>
            </div>
            <!-- END container -->
        </div>
        <!-- END #footer-copyright -->
    </div>
    <!-- END #page-container -->
    
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/e-commerce/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/e-commerce/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="../assets/css/e-commerce/theme/default.css" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/e-commerce/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/e-commerce/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="/assets/plugins/bootstrap3/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
    <script src="assets/crossbrowserjs/html5shiv.js"></script>
    <script src="assets/crossbrowserjs/respond.min.js"></script>
    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="/assets/js/e-commerce/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
@yield('javascript')
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>

</body>
</html>
