
<?php $__env->startSection('title','Sửa thông tin loại sản phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="<?php echo e(route('ldtAdmins.ldtLoaiSanPham.ldtEditSubmit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($ldtLoaiSanPham->id); ?>">
                    <div class="card-header">
                        <h2>sửa thông tin  loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="ldtMaLoai" class="col-sm-2 col-form-label">ma loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="<?php echo e($ldtLoaiSanPham->ldtMaLoai); ?>"
                              id="ldtMaLoai" name="ldtMaLoai">
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="ldtTenLoai" class="col-sm-2 col-form-label">ten loai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="<?php echo e($ldtLoaiSanPham->ldtTenLoai); ?>"
                                  id="ldtTenLoai" name="ldtTenLoai">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="ldtTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                    <?php if($ldtLoaiSanPham->ldtTrangThai == 1): ?>
                                        <input type="text" class="form-control" id="ldtTrangThai1" name="ldtTrangThai" value="1"
                                            checked />
                                        <label for="ldtTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0" />   
                                        <label for="ldtTrangThai0">khóa</label> 
                                    <?php else: ?>
                                        <input type="text" class="form-control" id="ldtTrangThai1" name="ldtTrangThai" value="1"
                                            />
                                        <label for="ldtTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0"  checked />   
                                        <label for="ldtTrangThai0">khóa</label> 
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">ghi lai</button>
                        <a href="<?php echo e(route('ldtAdmins.ldtLoaiSanPham')); ?>" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project 1\K23CNT4_LamDucTai_Project1Lab\K23CNT4_LamDucTai_2310900092_Project1\resources\views/ldtAdmins/ldtLoaiSanPham/ldt-edit.blade.php ENDPATH**/ ?>