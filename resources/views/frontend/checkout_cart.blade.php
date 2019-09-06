@extends('frontend.layout')
@section('content')
        <div class="section-container" id="checkout-cart">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN checkout -->
                <div class="checkout">
                    <form action="checkout_info.html" method="POST" name="form_checkout">
                        <!-- BEGIN checkout-header -->
                        <div class="checkout-header">
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step active">
                                        <a href="#">
                                            <div class="number">1</div>
                                            <div class="info">
                                                <div class="title">Delivery Options</div>
                                                <div class="desc">Lorem ipsum dolor sit amet.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step">
                                        <a href="{{route('checkout_info')}}">
                                            <div class="number">2</div>
                                            <div class="info">
                                                <div class="title">Shipping Address</div>
                                                <div class="desc">Vivamus eleifend euismod.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step">
                                        <a href="{{route('checkout_payment')}}">
                                            <div class="number">3</div>
                                            <div class="info">
                                                <div class="title">Payment</div>
                                                <div class="desc">Aenean ut pretium ipsum. </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step">
                                        <a href="{{route('checkout_complete')}}">
                                            <div class="number">4</div>
                                            <div class="info">
                                                <div class="title">Complete Payment</div>
                                                <div class="desc">Curabitur interdum libero.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END checkout-header -->
                        <!-- BEGIN checkout-body -->
                        <div class="checkout-body">
                            <div class="table-responsive">
                                <table class="table table-cart">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cart-product">
                                                <div class="product-img">
                                                    <img src="../assets/img/product/product-iphone-6s-plus.png" alt="" />
                                                </div>
                                                <div class="product-info">
                                                    <div class="title">iPhone 6s Plus 16GB (Silver)</div>
                                                    <div class="desc">Delivers Tue 26/04/2016 - Free</div>
                                                </div>
                                            </td>
                                            <td class="cart-price text-center">$999.00</td>
                                            <td class="cart-qty text-center">
                                                <div class="cart-qty-input">
                                                    <a href="#" class="qty-control left disabled" data-click="decrease-qty" data-target="#qty"><i class="fa fa-minus"></i></a>
                                                    <input type="text" name="qty" value="1" class="form-control" id="qty" />
                                                    <a href="#" class="qty-control right disabled" data-click="increase-qty" data-target="#qty"><i class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="qty-desc">1 to max order</div>
                                            </td>
                                            <td class="cart-total text-center">
                                                $999.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-summary" colspan="4">
                                                <div class="summary-container">
                                                    <div class="summary-row">
                                                        <div class="field">Cart Subtotal</div>
                                                        <div class="value">$999.00</div>
                                                    </div>
                                                    <div class="summary-row text-danger">
                                                        <div class="field">Free Shipping</div>
                                                        <div class="value">$0.00</div>
                                                    </div>
                                                    <div class="summary-row total">
                                                        <div class="field">Total</div>
                                                        <div class="value">$999.00</div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        <div class="checkout-footer">
                            <a href="#" class="btn btn-white btn-lg pull-left">Continue Shopping</a>
                            <button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Checkout</button>
                        </div>
                        <!-- END checkout-footer -->
                    </form>
                </div>
                <!-- END checkout -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #checkout-cart -->
    
        <!-- BEGIN #policy -->
        <div id="policy" class="section-container p-t-30 p-b-30 bg-white">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN policy -->
                        <div class="policy">
                            <div class="policy-icon"><i class="fa fa-truck"></i></div>
                            <div class="policy-info">
                                <h4>Free Delivery Over $100</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!-- END policy -->
                    </div>
                    <!-- END col-4 -->
                    <!-- BEGIN col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN policy -->
                        <div class="policy">
                            <div class="policy-icon"><i class="fa fa-shield"></i></div>
                            <div class="policy-info">
                                <h4>1 Year Warranty For Phones</h4>
                                <p>Cras laoreet urna id dui malesuada gravida. <br />Duis a lobortis dui.</p>
                            </div>
                        </div>
                        <!-- END policy -->
                    </div>
                    <!-- END col-4 -->
                    <!-- BEGIN col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN policy -->
                        <div class="policy">
                            <div class="policy-icon"><i class="fa fa-user-md"></i></div>
                            <div class="policy-info">
                                <h4>6 Month Warranty For Accessories</h4>
                                <p>Fusce ut euismod orci. Morbi auctor, sapien non eleifend iaculis.</p>
                            </div>
                        </div>
                        <!-- END policy -->
                    </div>
                    <!-- END col-4 -->
                </div>
                <!-- END row -->
            </div>
        </div>
@stop