<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Login;
//use Illuminate\Support\Facades\DB;
use Socialite;
use App\Social;
use Session;
use Illuminate\Support\Facades\Redirect; //giống như cái return - thành công hay thất bại trả về trang gì gì đó
session_start();
class AdminController extends Controller
{
    public function index() {
        return view('admin_login');
    }
    //  public function CheckLogin()
    // {
    //     $admin_id=Session::get('admin_id');
    //     if($admin_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin_login')->send();
    //     }
    // }

    // public function index(){
    //     $this->CheckLogin();
    //     return view('admin_layout');
    // }


    public function show_dashboard(){
        return view('admin.dashboard');

    }
    public function dashboard(Request $request){

        $admin_username=$request->admin_username;
        $admin_password=$request->admin_password;

        $result = DB::table('tbl_admin')->where('admin_username',$admin_username)->where('admin_password',$admin_password)->first();//lấy giới hạn 1 user
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
           return view('admin.dashboard');
        //     echo '<pre>';
        // print_r($result);
        // echo '</pre>';
           
        }else{
                Session::put('message','Sai rùi man');
                return Redirect::to('/admin-login');
            }
           
    }



    public function logout(Request $request)
    {
        // $this->AuthLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }



    


}
