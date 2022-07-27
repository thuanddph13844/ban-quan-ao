<?php

namespace App\Http\Controllers;

use App\Http\Requests\danh_mucRequest;
use Illuminate\Http\Request;
use App\Models\danh_mucs;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\Element;

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
    public function add(danh_mucRequest $request){
        $this->v['_title'] = "Thêm danh mục";
        $method_route = 'route_BackEnd_danh_mucs_Add';
        if ($request -> isMethod('POST')){
            $param = [];
            $param['cols']= $request ->post();
            unset($param['cols']['_token']);
//            dd($param['cols']);
            $modelAdd = new danh_mucs();
            $res = $modelAdd->saveNew($param);
            if ($res == null){
                return redirect()->route($method_route);
            }elseif ($res>0){
                Session::flash('success','Thêm mới Danh mục thành công');
                return redirect()->route($method_route);
            }else{
                Session::flash('error','Thêm mới danh mục thất bại');
                return redirect()->route($method_route);
            }
        }
        return view("admin.danh-muc.add", $this->v);
    }
}
