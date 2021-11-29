<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');

    }
   // public function all_category_product(){
      //  return view('admin.all_category_product');
    public function CheckLogin()
    {
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }

    public function all_category_product()
    {
        $this->CheckLogin();
        $all_category_product=DB::table('tbl_category')->get();
        $manager_category_product=view('admin.all_category_product')->with('all_category_product',$all_category_product); //goi lai theo ten file da tao, $all_category_product ở ngoài sẽ đc gán vào all_category_product ở trong
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product); // cái trang admin_layout sẽ chứa category_product lun được gán vào biến $manager_category_product
    }

    
}
