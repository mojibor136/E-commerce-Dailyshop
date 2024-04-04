
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Category</h5>
            <?php if(session()->has('massage')): ?>
                <div class="alert alert-success">
                    <li><?php echo e(session()->get('massage')); ?></li>
                </div>
            <?php endif; ?>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Category Img</th>
                            <th>Category Name</th>
                            <th>Sub Category</th>
                            <th>product</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><img src="<?php echo e(asset('assets/image/CategoryImg/' . $category->category_img)); ?>"
                                        alt="" width="40" height="40"></td>
                                <td><?php echo e($category->category_name); ?></td>
                                <td><?php echo e($category->subcategory_count); ?></td>
                                <td><?php echo e($category->product_count); ?></td>
                                <td>
                                    <div class="button">
                                        <form action="<?php echo e(route('editcategory', $category->id)); ?>" method="get">
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="<?php echo e(route('deletecategory', $category->id)); ?>" method="get">
                                            <button class="btn btn-warning">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.tempalate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/allcategory.blade.php ENDPATH**/ ?>