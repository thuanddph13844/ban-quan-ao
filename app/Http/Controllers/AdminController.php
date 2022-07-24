<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function view()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this -> v ['hoten']=$hoten;
        return view('admin.index', $this->v);
    }
}
