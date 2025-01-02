
<?php $__env->startSection('title', 'Danh Sách Sản Phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Sản Phẩm</h1>
                <!-- Nút Thêm Mới -->
                <a href="<?php echo e(route('ldtAdmins.ldtSanPham.ldtcreate')); ?>" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Mã Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stt = 0;
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $ldtSanPhams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $stt++;
                        ?>
                        <tr>
                            <td><?php echo e($stt); ?></td>
                            <td><?php echo e($item->ldtMaSanPham); ?></td>
                            <td><?php echo e($item->ldtTenSanPham); ?></td>
                            <td style="display: flex; justify-content: center; align-items: center; height: 100px;">
                                <img src="<?php echo e(asset('storage/' . $item->ldtHinhAnh)); ?>" alt="Sản phẩm <?php echo e($item->ldtMaSanPham); ?>" width="100" height="100">
                            </td>
                            <td><?php echo e($item->ldtSoLuong); ?></td>
                            <td><?php echo e(number_format($item->ldtDonGia, 0, ',', '.')); ?> VND</td>
                            <td><?php echo e($item->ldtMaLoai); ?></td>
                            <td>
                                <?php if($item->ldtTrangThai == 0): ?>
                                    <span class="badge bg-success">Hiển Thị</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Khóa</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <!-- Xem chi tiết -->
                                    <a href="<?php echo e(route('ldtadmin.ldtsanpham.ldtdetail', $item->id)); ?>" class="btn btn-success btn-sm" title="Xem">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <!-- Chỉnh sửa -->
                                    <a href="<?php echo e(route('ldtadmin.ldtsanpham.ldtedit', $item->id)); ?>" class="btn btn-primary btn-sm" title="Chỉnh sửa">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <!-- Xóa -->
                                    <a href="" class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Bạn muốn xóa Mã sản phẩm này không? ID: <?php echo e($item->id); ?>');" title="Xóa">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Chưa có thông tin sản phẩm
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project 1\K23CNT4_LamDucTai_Project1Lab\K23CNT4_LamDucTai_2310900092_Project1\resources\views/ldtAdmins/ldtSanPham/ldt-list.blade.php ENDPATH**/ ?>