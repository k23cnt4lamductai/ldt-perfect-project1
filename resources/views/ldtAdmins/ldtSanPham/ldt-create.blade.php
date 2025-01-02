@extends('_layouts.admins._master')
@section('title','Create  Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('ldtAdmins.ldtSanPham.ldtcreatesubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="ldtMaSanPham" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="ldtMaSanPham" name="ldtMaSanPham" value="{{ old('ldtMaSanPham') }}" >
                                @error('ldtMaSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ldtTenSanPham" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="ldtTenSanPham" name="ldtTenSanPham" value="{{ old('ldtTenSanPham') }}" >
                                @error('ldtTenSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="ldtHinhAnh" class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control" id="ldtHinhAnh" name="ldtHinhAnh" accept="image/*">
                                @error('ldtHinhAnh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="ldtSoLuong" class="form-label">Số Lượng</label>
                                <input type="number" class="form-control" id="ldtSoLuong" name="ldtSoLuong" value="{{ old('ldtSoLuong') }}" >
                                @error('ldtSoLuong')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ldtDonGia" class="form-label">Đơn Giá</label>
                                <input type="text" class="form-control" id="ldtDonGia" name="ldtDonGia" value="{{ old('ldtDonGia') }}" >
                                @error('ldtDonGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ldtMaLoai" class="form-label">Loại Danh Muc</label>
                                <select name="ldtMaLoai" id="ldtMaLoai" class="form-control">
                                    @foreach ($ldtSanPham as $item)
                                        <option value="{{ $item->id }}">{{ $item->ldtTenLoai }}</option>
                                    @endforeach
                                </select>
                                @error('ldtMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="ldtTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ldtTrangThai1" name="ldtTrangThai" value="0" checked/>
                                    <label for="ldtTrangThai1"> Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="1"/>
                                    <label for="ldtTrangThai0">Khóa</label>
                                </div>
                                @error('ldtTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('ldtAdmins.ldtSanPham')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
