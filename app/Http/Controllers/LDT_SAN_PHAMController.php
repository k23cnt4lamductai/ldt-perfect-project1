<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LDT_SAN_PHAM; 
use App\Models\LDT_LOAI_SAN_PHAM; // Sử dụng Model User để thao tác với cơ sở dữ liệu
use Illuminate\Support\Facades\Storage;  // Use this for file handling
class ldt_SAN_PHAMController extends Controller
{
    //
     //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function ldtList()
    {
        $ldtSanPhams = ldt_SAN_PHAM::where('ldtTrangThai',0)->get();
        return view('ldtAdmins.ldtSanPham.ldt-list',['ldtSanPhams'=>$ldtSanPhams]);
    } 
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function ldtDetail($id)
    {
        // Tìm sản phẩm theo ID
        $ldtSanPham = ldt_SAN_PHAM::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('ldtAdmins.ldtSanPham.ldt-detail', ['ldtSanPham' => $ldtSanPham]);
    }

      //create  -----------------------------------------------------------------------------------------------------------------------------------------
      public function ldtCreate()
      {
            // đọc dữ liệu từ ldt_LOAI_SAN_PHAM
            $ldtsanpham = ldt_SAN_PHAM::all();
          return view('ldtAdmins.ldtSanPham.ldt-create',['ldtSanPham'=>$ldtsanpham]);
      }
     

     // Controller
public function ldtCreateSubmit(Request $request)
{

    // Validate input
    $validatedData = $request->validate([
        'ldtMaSanPham' => 'required|unique:ldt_SAN_PHAM,ldtMaSanPham',
        'ldtTenSanPham' => 'required|string|max:255',
        'ldtHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Kiểm tra hình ảnh và loại định dạng
        'ldtSoLuong' => 'required|numeric|min:1',
        'ldtDonGia' => 'required|numeric',
        'ldtMaLoai' => 'required|exists:ldt_LOAI_SAN_PHAM,id',
        'ldtTrangThai' => 'required|in:0,1',
    ]);

    // Khởi tạo đối tượng ldt_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
    $ldtSanPham = new ldt_SAN_PHAM;
    $ldtSanPham->ldtMaSanPham = $request->ldtMaSanPham;
    $ldtSanPham->ldtTenSanPham = $request->ldtTenSanPham;

    // Kiểm tra nếu có tệp hình ảnh
    if ($request->hasFile('ldtHinhAnh')) {
        // Lấy tệp hình ảnh
        $file = $request->file('ldtHinhAnh');

        // Kiểm tra nếu tệp hợp lệ
        if ($file->isValid()) {
            // Tạo tên tệp dựa trên mã sản phẩm
            $fileName = $request->ldtMaSanPham . '.' . $file->extension();

            // Lưu tệp vào thư mục public/img/san_pham
            $file->storeAs('public/img/san_pham', $fileName); // Lưu tệp vào thư mục storage/app/public/img/san_pham

            // Lưu đường dẫn vào cơ sở dữ liệu
            $ldtSanPham->ldtHinhAnh = 'img/san_pham/' . $fileName; // Lưu đường dẫn tương đối trong CSDL
        }
    }

    // Lưu các thông tin còn lại vào cơ sở dữ liệu
    $ldtSanPham->ldtSoLuong = $request->ldtSoLuong;
    $ldtSanPham->ldtDonGia = $request->ldtDonGia;
    $ldtSanPham->ldtMaLoai = $request->ldtMaLoai;
    $ldtSanPham->ldtTrangThai = $request->ldtTrangThai;

    // Lưu dữ liệu vào cơ sở dữ liệu
    $ldtSanPham->save();

    // Chuyển hướng người dùng về trang danh sách sản phẩm
    return redirect()->route('ldtAdmins.ldtSanPham');
}

//delete    -----------------------------------------------------------------------------------------------------------------------------------------

public function ldtdelete($id)
{
    ldt_SAN_PHAM::where('id',$id)->delete();
    return back()->with('sanpham_deleted','Đã xóa sinh viên thành công!');
}

// edit -----------------------------------------------------------------------------------------------------------------------------------------
public function ldtEdit($id)
    {
       // Tìm sản phẩm theo ID
    $ldtSanPham = ldt_SAN_PHAM::findOrFail($id);

    // Lấy tất cả các loại sản phẩm từ bảng ldt_LOAI_SAN_PHAM
    $ldtsanpham = ldt_SAN_PHAM::all();

    // Trả về view với dữ liệu sản phẩm và loại sản phẩm
    return view('ldtAdmins.ldtSanPham.ldt-edit', [
        'ldtSanPham' => $ldtSanPham,
        'ldtloaisanpham' => $ldtloaisanpham
    ]);
    }

    // Phương thức xử lý dữ liệu form chỉnh sửa sản phẩm


    public function ldtEditSubmit(Request $request, $id)
{
    // Validate dữ liệu
    $request->validate([
        'ldtMaSanPham' => 'required|max:20',
        'ldtTenSanPham' => 'required|max:255',
        'ldtHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ldtSoLuong' => 'required|integer',
        'ldtDonGia' => 'required|numeric',
        'ldtMaLoai' => 'required|max:10',
        'ldtTrangThai' => 'required|in:0,1',
    ]);

    // Tìm sản phẩm cần chỉnh sửa
    $ldtSanPham = ldt_SAN_PHAM::findOrFail($id);

    // Cập nhật thông tin sản phẩm
    $ldtSanPham->ldtMaSanPham = $request->ldtMaSanPham;
    $ldtSanPham->ldtTenSanPham = $request->ldtTenSanPham;
    $ldtSanPham->ldtSoLuong = $request->ldtSoLuong;
    $ldtSanPham->ldtDonGia = $request->ldtDonGia;
    $ldtSanPham->ldtMaLoai = $request->ldtMaLoai;
    $ldtSanPham->ldtTrangThai = $request->ldtTrangThai;

    // Kiểm tra nếu có hình ảnh mới
    if ($request->hasFile('ldtHinhAnh')) {
        // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
        if ($ldtSanPham->ldtHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $ldtSanPham->ldtHinhAnh)) {
            // Xóa file cũ nếu tồn tại
            Storage::disk('public')->delete('img/san_pham/' . $ldtSanPham->ldtHinhAnh);
        }
        // Lưu hình ảnh mới
        $imagePath = $request->file('ldtHinhAnh')->store('img/san_pham', 'public');
        $ldtSanPham->ldtHinhAnh = $imagePath;
    }

    // Lưu thông tin sản phẩm đã chỉnh sửa
    $ldtSanPham->save();

    // Redirect về trang danh sách sản phẩm
    return redirect()->route('ldtAdmins.ldtSanPham')->with('success', 'Sản phẩm đã được cập nhật thành công.');
}


}