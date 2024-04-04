
<?php $__env->startSection('content'); ?>
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add-Category</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <?php if(session()->has('massage')): ?>
                        <div class="alert alert-success">
                            <li><?php echo e(session()->get('massage')); ?></li>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <form action="<?php echo e(route('storecategory')); ?>" method="POST"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">ADD CATEGORY</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                                    value="<?php echo e(old('category_name')); ?>" placeholder="ADD CATEGORY" />
                            </div>
                            <?php $__errorArgs = ['category_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div>
                                <label for="formFileDisabled" class="form-label">ADD CATEGORY IMG</label>
                                <input class="form-control" type="file" id="formFileDisabled" name="category_img" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.tempalate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/addcategory.blade.php ENDPATH**/ ?>