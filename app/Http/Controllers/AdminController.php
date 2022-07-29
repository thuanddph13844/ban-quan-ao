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
    public function index()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this->v['hoten'] = $hoten;
        return view('templates.index', $this->v);
    }
    public function shop()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this->v['hoten'] = $hoten;
        return view('templates.shop', $this->v);
    }
    public function detail()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this->v['hoten'] = $hoten;
        return view('templates.detail', $this->v);
    }
    public function contact()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this->v['hoten'] = $hoten;
        return view('templates.contact', $this->v);
    }
    public function checkout()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this->v['hoten'] = $hoten;
        return view('templates.checkout', $this->v);
    }
    public function cart()
    {
        $this->v['tieude'] = "Admin";
        $hoten = "Đinh Đức Thuận";
        $this->v['hoten'] = $hoten;
        return view('templates.cart', $this->v);
    }
}