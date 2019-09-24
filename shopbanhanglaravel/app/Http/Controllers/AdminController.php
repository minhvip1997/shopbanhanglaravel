<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;

 

use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
    	return view('admin.dashboard');
    }
    public function dashboard(Request $request){
    	$admin_email = $request->admin_email;
    	$admin_password = $request->admin_password;
    	 
    	$result = DB::table('tbl_admin')->where('admin_email','tnminh1997123@gmail.com')->where('admin_password',
    		'doubleminh1997')->first();
    	
    	
    	if($result){
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id',$result->admin_id);
    		return Redirect::to('/dashboard');
    	}else{
    		Session::put('message','Tai khoan hoac mat khau nhap sai lam on nhap lai');
    		return Redirect::to('admin');
    	}
    	
    }
    public function logout(){
    	Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('admin');
    }
}
