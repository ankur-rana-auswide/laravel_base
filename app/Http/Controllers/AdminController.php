<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use DB;

class AdminController extends Controller
{
    public function index(){
    	$auth_user = \Auth::user()->role;
    	$auth_user_id = \Auth::user()->id; 
    	if($auth_user == 'Super Admin'){
    		$users = User::where('role','!=','Super Admin')->get();
    	}else{
    		$users = User::where('id',$auth_user_id)->get();
    	}
    
    	return view('pages.users',compact('users'));
    }

    public function dashboard(){
    	
	    return view('pages.dashboard.dashboard');
    }
    
    
    public function update_user(Request $request,$user_id){
    	
    	if($request->isMethod('get')){
    		$user_detail = User::where('id',$user_id)->first();
    		return view('pages.update-user',compact('user_detail'));
    	}else{

    		
    		$request->validate([
	            'name' => ['required','regex:/^(?![\W_]+$)[a-zA-Z0-9_]*$/'],
	            'first_name' => ['nullable','regex:/^(?![\W_]+$)[a-zA-Z0-9_]*$/'],
	            'last_name' => ['nullable','regex:/^(?![\W_]+$)[a-zA-Z0-9_]*$/'],
	            'email' => [
	                'required',
	                'email',
	                'regex:/(.+)@(.+)\.(.+)/i',
	                Rule::unique('users')->ignore($user_id,'id'),
	            ],
	            'phone' => [
	            ],
	        ]);


	       	$update['name'] = $request->name;
	        $update['first_name'] = $request->first_name;
	        $update['last_name'] = $request->last_name;
	        $update['email'] = $request->email;
	        $update['phone'] = $request->phone;
	        $update['designation'] = $request->designation ?? '';
	        

	        // dd($update);
	        
	        if ($request->filled('password')) {
	            $update['password'] = bcrypt($request->password);
	        }

	        if ($request->hasFile('img')) {
	            $image = $request->file('img');
	            $imageName = time() . '.' . $image->getClientOriginalExtension();
	            $image->move(public_path('user_image'), $imageName);
	            $update['img'] = $imageName;
	        }

	        if($request->is_remove == 1){
	        	$update['img'] = '';
	        }

	        User::where('id',$user_id)->update($update);
		    return redirect()->back()->with('success', 'User updated successfully!');
		    
    	}
    }

    
    public function update_user_menu(Request $request){
    	$user_id=\Auth::user()->id;
    	$validatedData = $request->validate([
    	    '_token' => 'required',
            'opened' => 'required|in:Yes,No',
        ], [
            'opened.in' => 'The :attribute must be either "Yes" or "No".',
        ]);
  
       	$update['menu_collapse'] = $request->opened;
        
        User::where('id',$user_id)->update($update);
	    $return['status']='Success';
        $return['message']='Updated successfully';
        echo json_encode($return);die;
		    
    	 
    }


    public function update_my_profile(Request $request){
    	$user_id = \Auth::id();
    	if($request->isMethod('get')){
   			$user_detail = User::where('id',$user_id)->first();
    		return view('pages.super-admin.update-my-profile',compact('user_detail'));
    	}else{
    		 $request->validate([
	            'name' => ['required','regex:/^(?![\W_]+$)[a-zA-Z0-9_]*$/'],
	            'first_name' => ['nullable','regex:/^(?![\W_]+$)[a-zA-Z0-9_]*$/'],
	            'last_name' => ['nullable','regex:/^(?![\W_]+$)[a-zA-Z0-9_]*$/'],
	            'email' => [
	                'required',
	                'email',
	                'regex:/(.+)@(.+)\.(.+)/i',
	                Rule::unique('users')->ignore($user_id,'id'),
	            ],
	            'phone' => [
	                'required',
	                'regex:/^[0-9]{10,15}$/',
	                Rule::unique('users')->ignore($user_id,'id'),
	            ],
        ]);


       	$update['name'] = $request->name;
        $update['first_name'] = $request->first_name;
        $update['last_name'] = $request->last_name;
        $update['email'] = $request->email;
        $update['phone'] = $request->phone;

        if ($request->filled('password')) {
            $update['password'] = bcrypt($request->password);
        }

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user_image'), $imageName);
            $update['img'] = $imageName;
        }

        if($request->is_remove == 1){
        	$update['img'] = '';
        }

        User::where('id',$user_id)->update($update);
	    return redirect()->back()->with('success', 'User updated successfully!');
	    
    	}
    }
}
