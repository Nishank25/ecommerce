<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function register(){
        $data['user'] = "Customer";
       return view('auth/register',$data);
    }

    public function myAccount(Request $request)
    {
    	return view('frontend/my_account');
    }

    public function products(Request $request){
    	return view('frontend/product');
    }

    public function productDetail(Request $request){
    	return view('frontend/product_detail');
    }

    public function fixedHeader(Request $request){
    	return view('frontend/index_fixed_header');
    }

    public function inverseHeader(Request $request){
    	return view('frontend/index_inverse_header');
    }

    public function searchResult(Request $request){
    	return view('frontend/search_results');
    }

    public function checkoutCart(Request $request){
    	return view('frontend/checkout_cart');
    }

    public function checkoutInfo(Request $request){
    	return view('frontend/checkout_info');
    }

    public function checkoutPayment(Request $request){
    	return view('frontend/checkout_payment');
    }

    public function checkoutComplete(Request $request){
    	return view('frontend/checkout_complete');
    }

    public function contactUs(Request $request){
    	return view('frontend/contact_us');
    }

    public function aboutAs(Request $request){
    	return view('frontend/about_us');
    }

     public function faq(Request $request){
    	return view('frontend/faq');
    }
}
