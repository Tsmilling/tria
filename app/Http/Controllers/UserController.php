<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title'     => 'Data user',
            'menuAdminUser'     => 'active',
        );
        return view('admin/user/index',$data);
    }
}
