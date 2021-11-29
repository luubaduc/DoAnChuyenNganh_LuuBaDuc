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

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function register(){
        return view('users.register');
    }
    public function register_user(Request $request)
    {
        $data = array();
        $data['user_username'] = $request->ho_ten;
        $data['user_password'] = $request->mat_khau;
        $data['user_email'] = $request->e_mail;
        $data['user_phone'] = $request->dien_thoai;

        DB::table('tbl_user')->insert($data);
        // Session::put('message','Đăng ký thành công');
        return Redirect::to('/dangnhap');
    }

    public function login(){
        return view('users.login');
    }

    public function login_user(Request $request)
    {
        $mail = $request->e_mail;
        $pass = $request->mat_khau;
        $result = DB::table('tbl_user')->where('user_email',$mail)->where('user_password',$pass)->first();
        if($result)
        {
            Session::put('user_username', $result->user_username);
           return Redirect::to('/index');

        }
        else
        {
             Session::put('message','Đăng nhập thất bại');
             return Redirect::to('/dangnhap');


        }
    }

    public function logout(Request $request)
    {
        // $this->AuthLogin();
        Session::put('user_username', null);
        // Session::put('user_id', null);
        return Redirect::to('/index');
    }

}

?>