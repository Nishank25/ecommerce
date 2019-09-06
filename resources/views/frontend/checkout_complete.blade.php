@extends('frontend.layout')
@section('content')
        <!-- BEGIN #checkout-cart -->
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
                                    <div class="step">
                                        <a href="{{route('checkout_cart')}}">
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
                                    <div class="step active">
                                        <a href="#">
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
                            <!-- BEGIN checkout-message -->
                            <div class="checkout-message">
                                <h1>Thank you! <small>Your Payment has been successfully processed with the following details.</small></h1>
                                <div class="table-responsive2">
                                    <table class="table table-payment-summary">
                                        <tbody>
                                            <tr>
                                                <td class="field">Transaction Status</td>
                                                <td class="value">Success</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Transaction Reference No.</td>
                                                <td class="value">REF000001</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Bank Authorised Code</td>
                                                <td class="value">AUTH000001</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Transaction Date and Time</td>
                                                <td class="value">05 APR 2016 07:30PM</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Orders</td>
                                                <td class="value product-summary">
                                                    <div class="product-summary-img">
                                                        <img src="../assets/img/product/product-iphone-6s-plus.png" alt="" />
                                                    </div>
                                                    <div class="product-summary-info">
                                                        <div class="title">iPhone 6s Plus 16GB (Silver)</div>
                                                        <div class="desc">Delivers Tue 26/04/2016 - Free</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="field">Payment Amount (RM)</td>
                                                <td class="value">$999.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-muted text-center m-b-0">Should you require any assistance, you can get in touch with Support Team at (123) 456-7890</p>
                            </div>
                            <!-- END checkout-message -->
                        </div>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        <div class="checkout-footer text-center">
                            <button type="submit" class="btn btn-white btn-lg p-l-30 p-r-30 m-l-10">Manage Orders</button>
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
            <!-- END container -->
        </div>
        <!-- END #policy -->
@stop