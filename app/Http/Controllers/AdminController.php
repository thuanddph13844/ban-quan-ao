<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danh_mucs;
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
    public function loadList(){
        $this->v['title'] = "Danh sách danh mục";
        $danhmuc= new danh_mucs();
        $this->v['danhsachdanhmuc'] = $danhmuc->loadListWithPager();
        
        return view('admin.index', $this->v);
    }
}
