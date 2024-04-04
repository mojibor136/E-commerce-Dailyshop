
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Product</h5>
            <?php if(session()->has('massage')): ?>
                <div class="alert alert-success">
                    <li><?php echo e(session()->get('massage')); ?></li>
                </div>
            <?php endif; ?>
            <div class="table-responsive sm text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Img</th>
                            <th>Product Name</th>
                            <th>category</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('assets/image/ProductImg/' . $product->product_img)); ?>"
                                        alt="Product Image" width="50">
                                </td>
                                <td><?php echo e($product->product_name); ?></td>
                                <td><?php echo e($categories->where('id', $product->product_category_id)->first()->category_name); ?>

                                </td>
                                <td><?php echo e($product->product_price); ?></td>
                                <td><a href="" class="btn btn-success">Active</a></td>
                                <td>
                                    <div class="button">
                                        <form action="<?php echo e(route('edit.product', $product->id)); ?>" method="get">
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="<?php echo e(route('delete.product', $product->id)); ?>" method="get">
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

<?php echo $__env->make('admin.layout.tempalate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/allproduct.blade.php ENDPATH**/ ?>