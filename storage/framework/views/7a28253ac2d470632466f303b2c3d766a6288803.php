
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <h5 class="card-header">All SubCategory</h5>
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
                            <th>SubCategory Name</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th></th>
                            <th></th>
                            <th> </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($subcategory->id); ?></td>
                                <td><?php echo e($subcategory->subcategory_name); ?></td>
                                <td><?php echo e($subcategory->category_name); ?></td>
                                <td><?php echo e($subcategory->product_count); ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="button">
                                        <form action="<?php echo e(route('editsubcategory', $subcategory->id)); ?>" method="get">
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="<?php echo e(route('deletesubcategory', $subcategory->id)); ?>" method="get">
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

<?php echo $__env->make('admin.layout.tempalate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/allsubcategory.blade.php ENDPATH**/ ?>