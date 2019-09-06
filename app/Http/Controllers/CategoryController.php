<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
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
            return view('backend.category.manage');
        }catch(\Exception $exception){
            $data = [
                'data' => 'Category View',
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
            $categoryData = Categories::select('id','name','category_type','created_at')->get();
            return datatables($categoryData)
                ->addColumn('action',function ($data){
                    $button = '<a href="'.url('categories/edit-categories').'/'.$data->id.'" class="btn btn-outline-info btn-sm" title="Edit '.$data->name.'"><i class="fa fa-edit"></i></a>';
                    return $button;
                })->rawColumns(['action'])
                ->make(true);

        }catch(\Exception $exception){
            $data = [
              'data' => 'Category Listing',
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
            $rootCategory = Categories::where('category_type','root_category')->get()->toArray();
            return view('backend.category.create')->with(compact('rootCategory'));
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

    /**
     * @param CategoryRequest $request
     * @return $this
     */
    public function create(CategoryRequest $request){
        try{
                $data['name'] = $request['name'];
                $data['slug'] = strtolower(str_replace(' ','_',$request['name']));
                if($request['root_category'] == null){
                    $data['category_type'] = 'root_category';
                    $data['category_id'] = null;
                }else{
                    $data['category_type'] = 'sub_category';
                    $data['category_id'] = $request['root_category'];
                }
                $query = Categories::create($data);
                if($query){
                    return redirect('/categories/manage')->with('success','category has been created');
                }else{
                    return back()->with('error','Something went wrong please check');
                }
        }catch(\Exception $exception){
            $data = [
                'data' => 'Category create',
                'param' => $request->all(),
                'exception' => $exception->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return $this
     */
    public function editView(Request $request,$id){
        try{
            $category = Categories::where('id',$id)->first();
            $rootCategory = Categories::where('category_type','root_category')->get()->toArray();
            return view('backend.category.edit')->with(compact('category','rootCategory'));
        }catch(\Exception $exception){
            $data = [
                'data' => 'Category Edit View',
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
    public function edit(Request $request){
        try{
            $data['name'] = $request['name'];
            if($request['root_category'] == null){
                $data['category_type'] = 'root_category';
                $data['category_id'] = null;
            }else{
                $data['category_type'] = 'sub_category';
                $data['category_id'] = $request['root_category'];
            }
            $query = Categories::where('id',$request['categ_id'])->update($data);
            if($query){
                return redirect('/categories/manage')->with('success','category has been updated');
            }else{
                return back()->with('error','Something went wrong please check');
            }
        }catch (\Exception $exception){
            $data = [
                'data' => 'Category Edit',
                'param' => $request->all(),
                'exception' => $exception->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$exception->getMessage());
        }
    }
}
