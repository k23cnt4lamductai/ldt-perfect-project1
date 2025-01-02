

<?php $__env->startSection('title', 'Chỉnh Sửa Sản Phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa sản phẩm -->
                    <form action="<?php echo e(route('ldtadmin.ldtsanpham.ldteditsubmit', $ldtSanPham->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>

                        <!-- Mã sản phẩm -->
                        <div class="mb-3">
                            <label for="ldtMaSanPham" class="form-label">Mã sản phẩm</label>
                            <input type="text" name="ldtMaSanPham" class="form-control" value="<?php echo e(old('ldtMaSanPham', $ldtSanPham->ldtMaSanPham)); ?>">
                            <?php $__errorArgs = ['ldtMaSanPham'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="ldtTenSanPham" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="ldtTenSanPham" class="form-control" value="<?php echo e(old('ldtTenSanPham', $ldtSanPham->ldtTenSanPham)); ?>">
                            <?php $__errorArgs = ['ldtTenSanPham'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Hình ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="ldtHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="ldtHinhAnh" class="form-control">
                            <?php if($ldtSanPham->ldtHinhAnh): ?>
                                <img src="<?php echo e(asset('storage/' . $ldtSanPham->ldtHinhAnh)); ?>" alt="Sản phẩm <?php echo e($ldtSanPham->ldtMaSanPham); ?>" width="200" class="mt-2">
                            <?php endif; ?>
                            <?php $__errorArgs = ['ldtHinhAnh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="ldtSoLuong" class="form-label">Số lượng</label>
                            <input type="number" name="ldtSoLuong" class="form-control" value="<?php echo e(old('ldtSoLuong', $ldtSanPham->ldtSoLuong)); ?>">
                            <?php $__errorArgs = ['ldtSoLuong'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Đơn giá -->
                        <div class="mb-3">
                            <label for="ldtDonGia" class="form-label">Đơn giá</label>
                            <input type="number" name="ldtDonGia" class="form-control" value="<?php echo e(old('ldtDonGia', $ldtSanPham->ldtDonGia)); ?>">
                            <?php $__errorArgs = ['ldtDonGia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Mã Loại -->
                        <div class="mb-3">
                            <label for="ldtMaLoai" class="form-label">Loại Danh Muc</label>
                            <select name="ldtMaLoai" id="ldtMaLoai" class="form-control">
                                <?php $__currentLoopData = $ldtloaisanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" 
                                        <?php echo e(old('ldtMaLoai', $ldtSanPham->ldtMaLoai) == $item->id ? 'selected' : ''); ?>>
                                        <?php echo e($item->ldtTenLoai); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['ldtMaLoai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="ldtTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="ldtTrangThai1" name="ldtTrangThai" value="1" <?php echo e(old('ldtTrangThai', $ldtSanPham->ldtTrangThai) == 1 ? 'checked' : ''); ?> />
                                <label for="ldtTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="ldtTrangThai0" name="ldtTrangThai" value="0" <?php echo e(old('ldtTrangThai', $ldtSanPham->ldtTrangThai) == 0 ? 'checked' : ''); ?> />
                                <label for="ldtTrangThai0">Hiển Thị</label>
                            </div>
                            <?php $__errorArgs = ['ldtTrangThai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <!-- Nút lưu -->
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Nút quay lại danh sách sản phẩm -->
                    <a href="<?php echo e(route('ldtAdmins.ldtSanPham')); ?>" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project 1\K23CNT4_LamDucTai_Project1Lab\K23CNT4_LamDucTai_2310900092_Project1\resources\views/ldtAdmins/ldtSanPham/ldt-edit.blade.php ENDPATH**/ ?>