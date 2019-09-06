@extends('frontend.layout')
@section('content')
        <div id="page-header" class="section-container page-header-container bg-black">
            <!-- BEGIN page-header-cover -->
            <div class="page-header-cover">
                <img src="../assets/img/cover/cover-13.jpg" alt="" />
            </div>
            <!-- END page-header-cover -->
            <!-- BEGIN container -->
            <div class="container">
                <h1 class="page-header">Search Results for "<b>Mobile Phones</b>"</h1>
            </div>
            <!-- END container -->
        </div>
        <!-- BEGIN #page-header -->
        
        <!-- BEGIN search-results -->
        <div id="search-results" class="section-container bg-silver">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN search-container -->
                <div class="search-container">
                    <!-- BEGIN search-content -->
                    <div class="search-content">
                        <!-- BEGIN search-toolbar -->
                        <div class="search-toolbar">
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6">
                                    <h4>We found 732 Items for "Mobile Phones"</h4>
                                </div>
                                <!-- END col-6 -->
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6 text-right">
                                    <ul class="sort-list">
                                        <li class="text"><i class="fa fa-filter"></i> Sort by:</li>
                                        <li class="active"><a href="#">Popular</a></li>
                                        <li><a href="#">New Arrival</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Price</a></li>
                                    </ul>
                                </div>
                                <!-- END col-6 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END search-toolbar -->
                        <!-- BEGIN search-item-container -->
                        <div class="search-item-container">
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-iphone.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product_detail')}}">iPhone 6s Plus<br />16GB</a>
                                        </h4>
                                        <p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
                                        <div class="item-price">$649.00</div>
                                        <div class="item-discount-price">$739.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-samsung-note5.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">Samsung Galaxy Note 5<br />Black</a>
                                        </h4>
                                        <p class="item-desc">Super. Computer. Now in two sizes.</p>
                                        <div class="item-price">$599.00</div>
                                        <div class="item-discount-price">$799.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-iphone-se.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">iPhone SE<br />32/64Gb</a>
                                        </h4>
                                        <p class="item-desc">A big step for small.</p>
                                        <div class="item-price">$499.00</div>
                                        <div class="item-discount-price">$599.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-zenfone2.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product_detail')}}">Assus ZenFone 2<br />‏(ZE550ML)</a>
                                        </h4>
                                        <p class="item-desc">See What Others Can’t See</p>
                                        <div class="item-price">$399.00</div>
                                        <div class="item-discount-price">$453.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-xperia-z.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">Sony Xperia Z<br />Black Color</a>
                                        </h4>
                                        <p class="item-desc">For unexpectedly beautiful moments</p>
                                        <div class="item-price">$599.00</div>
                                        <div class="item-discount-price">$799.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-lumia-532.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">Microsoft Lumia 531<br />Smartphone Orange</a>
                                        </h4>
                                        <p class="item-desc">1 Year Local Manufacturer Warranty</p>
                                        <div class="item-price">$99.00</div>
                                        <div class="item-discount-price">$199.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-ipad-pro.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product_detail')}}">9.7-inch iPad Pro<br />32GB</a>
                                        </h4>
                                        <p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
                                        <div class="item-price">$649.00</div>
                                        <div class="item-discount-price">$739.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-galaxy-tab2.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">Samsung Galaxy Tab S2<br />Black</a>
                                        </h4>
                                        <p class="item-desc">A Brilliant Screen That Adjusts to You</p>
                                        <div class="item-price">$399.99</div>
                                        <div class="item-discount-price">$499.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-galaxy-taba.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">Samsung Galaxy Tab A<br />9.7" 16Gb(Wi-Fi)</a>
                                        </h4>
                                        <p class="item-desc">Keep All Your Samsung Devices In Sync</p>
                                        <div class="item-price">$349.99</div>
                                        <div class="item-discount-price">$399.99</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-hp-spectrex2.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product_detail')}}">HP Spectre x2<br />‏12-a011nr</a>
                                        </h4>
                                        <p class="item-desc">Our thinnest detachable separates from all others.</p>
                                        <div class="item-price">$799.99</div>
                                        <div class="item-discount-price">$850.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-xperia-z2.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">Sony Xperia Z2 Tablet<br />Black Color</a>
                                        </h4>
                                        <p class="item-desc">For unexpectedly beautiful moments</p>
                                        <div class="item-price">$199.00</div>
                                        <div class="item-discount-price">$259.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="{{route('product_detail')}}" class="item-image">
                                        <img src="../assets/img/product/product-ipad-air.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="{{route('product')}}">iPad Air 2<br />32/64Gb</a>
                                        </h4>
                                        <p class="item-desc">Light. Heavyweight.</p>
                                        <div class="item-price">$399.00</div>
                                        <div class="item-discount-price">$459.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                        </div>
                        <!-- END search-item-container -->
                        <!-- BEGIN pagination -->
                        <div class="text-center">
                            <ul class="pagination m-t-0">
                                <li class="disabled"><a href="javascript:;">Previous</a></li>
                                <li class="active"><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li><a href="javascript:;">Next</a></li>
                            </ul>
                        </div>
                        <!-- END pagination -->
                    </div>
                    <!-- END search-content -->
                    <!-- BEGIN search-sidebar -->
                    <div class="search-sidebar">
                        <h4 class="title">Filter By</h4>
                        <form action="search_results.html" method="POST" name="filter_form">
                            <div class="form-group">
                                <label class="control-label">Keywords</label>
                                <input type="text" class="form-control input-sm" name="keyword" value="Mobile Phones" placeholder="Enter Keywords" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="row row-space-0">
                                    <div class="col-md-5">
                                        <input type="number" class="form-control input-sm" name="price_from" value="10" placeholder="Price From" />
                                    </div>
                                    <div class="col-md-2 text-center p-t-5 f-s-12 text-muted">to</div>
                                    <div class="col-md-5">
                                        <input type="number" class="form-control input-sm" name="price_to" value="10000" placeholder="Price To" />
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-30">
                                <button type="submit" class="btn btn-sm btn-inverse"><i class="fa fa-search"></i> Filter</button>
                            </div>
                        </form>
                        <h4 class="title m-b-0">Categories</h4>
                        <ul class="search-category-list">
                            <li><a href="#">Microsoft <span class="pull-right">(10)</span></a></li>
                            <li><a href="#">Samsung <span class="pull-right">(15)</span></a></li>
                            <li><a href="#">Apple <span class="pull-right">(32)</span></a></li>
                            <li><a href="#">Micromax <span class="pull-right">(4)</span></a></li>
                            <li><a href="#">Karbonn <span class="pull-right">(6)</span></a></li>
                            <li><a href="#">Intex <span class="pull-right">(8)</span></a></li>
                            <li><a href="#">Sony <span class="pull-right">(42)</span></a></li>
                            <li><a href="#">HTC <span class="pull-right">(33)</span></a></li>
                            <li><a href="#">Asus <span class="pull-right">(15)</span></a></li>
                            <li><a href="#">Nokia <span class="pull-right">(84)</span></a></li>
                            <li><a href="#">Blackberry <span class="pull-right">(8)</span></a></li>
                        </ul>
                    </div>
                    <!-- END search-sidebar -->
                </div>
                <!-- END search-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END search-results -->
@stop