@extends('_layouts.admins._master')
@section('title','Sửa thông tin loại sản phẩm')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('ldtAdmins.ldtLoaiSanPham.ldtEditSubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$ldtLoaiSanPham->id}}">
                    <div class="card-header">
                        <h2>sửa thông tin  loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="ldtMaLoai" class="col-sm-2 col-form-label">ma loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="{{$ldtLoaiSanPham->ldtMaLoai}}"
                              id="ldtMaLoai" name="ldtMaLoai">
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="ldtTenLoai" class="col-sm-2 col-form-label">ten loai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$ldtLoaiSanPham->ldtTenLoai}}"
                                  id="ldtTenLoai" name="ldtTenLoai">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="ldtTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                    @if($ldtLoaiSanPham->ldtTrangThai == 1)
                                        <input type="text" class="form-control" id="ldtTrangThai1" name="ldtTrangThai" value="1"
                                            checked />
                                        <label for="ldtTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0" />   
                                        <label for="ldtTrangThai0">khóa</label> 
                                    @else
                                        <input type="text" class="form-control" id="ldtTrangThai1" name="ldtTrangThai" value="1"
                                            />
                                        <label for="ldtTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0"  checked />   
                                        <label for="ldtTrangThai0">khóa</label> 
                                    @endif
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