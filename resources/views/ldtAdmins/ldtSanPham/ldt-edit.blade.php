@extends('_layouts.admins._master')

@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa sản phẩm -->
                    <form action="{{ route('ldtadmin.ldtsanpham.ldteditsubmit', $ldtSanPham->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Mã sản phẩm -->
                        <div class="mb-3">
                            <label for="ldtMaSanPham" class="form-label">Mã sản phẩm</label>
                            <input type="text" name="ldtMaSanPham" class="form-control" value="{{ old('ldtMaSanPham', $ldtSanPham->ldtMaSanPham) }}">
                            @error('ldtMaSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="ldtTenSanPham" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="ldtTenSanPham" class="form-control" value="{{ old('ldtTenSanPham', $ldtSanPham->ldtTenSanPham) }}">
                            @error('ldtTenSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="ldtHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="ldtHinhAnh" class="form-control">
                            @if($ldtSanPham->ldtHinhAnh)
                                <img src="{{ asset('storage/' . $ldtSanPham->ldtHinhAnh) }}" alt="Sản phẩm {{ $ldtSanPham->ldtMaSanPham }}" width="200" class="mt-2">
                            @endif
                            @error('ldtHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="ldtSoLuong" class="form-label">Số lượng</label>
                            <input type="number" name="ldtSoLuong" class="form-control" value="{{ old('ldtSoLuong', $ldtSanPham->ldtSoLuong) }}">
                            @error('ldtSoLuong')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Đơn giá -->
                        <div class="mb-3">
                            <label for="ldtDonGia" class="form-label">Đơn giá</label>
                            <input type="number" name="ldtDonGia" class="form-control" value="{{ old('ldtDonGia', $ldtSanPham->ldtDonGia) }}">
                            @error('ldtDonGia')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mã Loại -->
                        <div class="mb-3">
                            <label for="ldtMaLoai" class="form-label">Loại Danh Muc</label>
                            <select name="ldtMaLoai" id="ldtMaLoai" class="form-control">
                                @foreach ($ldtloaisanpham as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ old('ldtMaLoai', $ldtSanPham->ldtMaLoai) == $item->id ? 'selected' : '' }}>
                                        {{ $item->ldtTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ldtMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="ldtTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="ldtTrangThai1" name="ldtTrangThai" value="1" {{ old('ldtTrangThai', $ldtSanPham->ldtTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="ldtTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0" {{ old('ldtTrangThai', $ldtSanPham->ldtTrangThai) == 0 ? 'checked' : '' }} />
                                <label for="ldtTrangThai0">Hiển Thị</label>
                            </div>
                            @error('ldtTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Nút lưu -->
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Nút quay lại danh sách sản phẩm -->
                    <a href="{{ route('ldtAdmins.ldtSanPham') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection