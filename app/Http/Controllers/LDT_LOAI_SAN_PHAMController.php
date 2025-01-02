<?php

namespace App\Http\Controllers;
use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use App\Http\Controllers\LDT_LOAI_SAN_PHAMController;
use Illuminate\Support\Facades\DB;
use App\Models\LDT_LOAI_SAN_PHAM;


class LDT_LOAI_SAN_PHAMController extends Controller
{
        //admin: CRUD

    //list 
    public function ldtList()
    {
        $ldtLoaiSanPham = ldt_Loai_San_Pham::all();
        return view('ldtAdmins.ldtLoaiSanPham.ldt-list',['ldtLoaiSanPham'=>$ldtLoaiSanPham]);
    }

    //create
    public function ldtCreate()
    {
        return view('ldtadmins.ldtLoaiSanPham.ldt-create');
    }
    public function ldtCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $ldtLoaiSanPham = new ldt_Loai_San_Pham;
        $ldtLoaiSanPham->ldtMaLoai = $request->ldtMaLoai;
        $ldtLoaiSanPham->ldtTenLoai = $request->ldtTenLoai;
        $ldtLoaiSanPham->ldtTrangThai = $request->ldtTrangThai;

        $ldtLoaiSanPham->save();
        return redirect()->route('ldtAdmins.ldtLoaiSanPham');
    }


    //edit
    public function ldtEdit($id)
    {
        $ldtLoaiSanPham = ldt_Loai_San_Pham::find($id);
        return view('ldtAdmins.ldtLoaiSanPham.ldt-edit',['ldtLoaiSanPham'=>$ldtLoaiSanPham]);
    }
    #Edit - submit
    public function ldtEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $ldtLoaiSanPham =  ldt_Loai_San_Pham::find($request->id);

        $ldtLoaiSanPham->ldtMaLoai = $request->ldtMaLoai;
        $ldtLoaiSanPham->ldtTenLoai = $request->ldtTenLoai;
        $ldtLoaiSanPham->ldtTrangThai = $request->ldtTrangThai;

        $ldtLoaiSanPham->save();
        return redirect()->route('ldtAdmins.ldtLoaiSanPham');
    }


    public function ldtDelete($id)
    {
        $ldtLoaiSanPham =  ldt_Loai_San_Pham::find($id);
        $ldtLoaiSanPham->delete();
        return redirect()->route('ldtAdmins.ldtLoaiSanPham');
    }
}
