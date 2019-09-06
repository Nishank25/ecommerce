<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Auth;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        try{
            $user = Auth::user();
           return view('backend.index')->with(compact('user'));
        }catch(\Exception $e){
            abort(404,$e->getMessage());
        }
    }
    public function profileView(Request $request){
        try{
            $user = Auth::user();
            return view('backend.profile')->with(compact('user'));
        }catch(\Exception $e){
            abort(404,$e->getMessage());
        }
    }
    public function profileUpdate(ProfileUpdateRequest $request){
        try{
            $present_url = User::where('id',$request->user_id)->first('profile_image');
            $file = $request->file('profile_image');
            if(isset($file))
            {
                if($present_url->profile_image != null){
                    Storage::delete('public/profile'.basename($present_url->profile_image));
                }
                $file_result = $request->file('profile_image')->store('public/profile');
                $file_path = Storage::url($file_result);
            }else{
                $file_path = "$present_url->profile_image";
            }

            $data['name'] = $request['name'];
            $data['email'] = $request['email'];
            $data['mobile'] = $request['mobile'];
            $data['address'] = $request['address'];
            $data['gender'] = $request['gender'];
            $data['birthday'] = $request['birthday'];
            $data['profile_image'] = $file_path;
            $query = User::where('id',$request['user_id'])->update($data);
            if ($query){
                return redirect('dashboard')->with('info','You have update your profile successfully');
            }else{
                return back()->with('error','something went wrong');
            }
        }catch(\Exception $e){
            $data=[
                'action' => 'Admin Profile Update',
                'param' => $request->all(),
                'exception' => $e->getMessage()
            ];
            Log::critical(json_encode($data));
            abort(500,$e->getMessage());
        }
    }
}
