<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //
    public function index() {
        return view('admin_login');
    }

    public function show_dashboard() {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();  
        echo '<pre>';
        print_r($result);
        echo '</pre>';
        // echo("5555555555");
    }
}
