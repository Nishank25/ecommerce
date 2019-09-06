<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\ProductRequest;
use App\ProductDetails;
use App\ProductImages;
use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manage(Request $request){
        try{
            return view('backend.product.manage');
        }catch(\Exception $exception){
            $data = [
                'data' => 'Product View',
                'para' => $request->all(),
                'exception' => $exception->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return string
     */
    public function listing(Request $request){
        try{
            $productData = Products::get()->toArray();
            return datatables($productData)
                ->addColumn('action',function ($data){
                    $button = '<a href="'.url('product/edit-product').'/'.$data->id.'/edit" class="btn btn-outline-info btn-sm" title="Edit '.$data->name.'"><i class="fa fa-edit"></i></a>';
                    return $button;
                })->rawColumns(['action'])
                ->make(true);

        }catch(\Exception $exception){
            $data = [
                'data' => 'Product Listing',
                'param' => $request->all(),
                'exception' => $exception->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$exception->getMessage());
        }
    }
    /**
 * @param Request $request
 * @return $this
 */
    public function createView(Request $request){
        try{
            $subCategory = Categories::where('category_type','sub_category')->get()->toArray();
            return view('backend.product.create')->with(compact('subCategory'));
        }catch(\Exception $exception){
            $data = [
                'data' => 'Product create View',
                'param' => $request->all(),
                'exception' => $exception->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$exception->getMessage());
        }
    }

    /**
     * @param ProductRequest $request
     * @return $this
     */
    public function create(ProductRequest $request){
        try{
            $productData['name'] = $request['name'];
            $productData['category_id'] = $request['category'];
            $productData['description'] = $request['description'];
            $product = Products::create($productData);
                $productDetailsData['product_id'] = $product->id;
                $productDetailsData['stock'] =$request['stock'];
                $productDetailsData['manufacture'] =$request['manufacture'];
                $productDetailsData['dimensions'] =$request['dimensions'];
                $productDetailsData['capacity'] =$request['capacity'];
                $productDetailsData['unit_type'] =$request['unit_type'];
                $productDetailsData['unit_value'] =$request['unit_value'];
                $productDetailsData['base_price'] =$request['base_price'];
                $productDetailsData['discounted_price'] =$request['discounted_price'];
                $productDetailsData['product_description'] =$request['product_description'];
                $productDetails = ProductDetails::create($productDetailsData);
                    if($request->hasfile('image'))
                    {
                        foreach($request->file('image') as $image)
                        {
                            $name=$image->getClientOriginalName();
                            $image->move(public_path().'/product/'.sha1($product->id), $name);
                            $images[] = $name;
                        }
                    }
                    $productImage = ProductImages::insert([
                        'image' => implode("|",$images),
                        'product_id' => $product->id,
                        'created_at' => Carbon::now()
                        ]);
            if($productImage && $productDetails && $product){
                        return back()->with('success','Product Created Successfully');
                    }else{
                        return back()->with('success','Product Created Successfully');
                    }
        }catch(\Exception $exception){
            $data = [
                'data' => 'Category create View',
                'param' => $request->all(),
                'exception' => $exception->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$exception->getMessage());
        }
    }
}
