@extends('_layouts.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('ldtAdmins.ldtLoaiSanPham.ldtCreateSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="ldtMaLoai" class="col-sm-2 col-form-label">ma loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="ldtMaLoai" name="ldtMaLoai">
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="ldtTenLoai" class="col-sm-2 col-form-label">ten loai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="ldtTenLoai" name="ldtTenLoai">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="ldtTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                  <input type="radio"  id="ldtTrangThai1" name="ldtTrangThai" value="1"
                                  checked />
                                  <label for="ldtTrangThai">hien thi</label>
                                    &nbsp;
                                  <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0" />   
                                  <label for="ldtTrangThai0">khóa</label> 
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">ghi lai</button>
                        <a href="{{route('ldtAdmins.ldtLoaiSanPham')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection