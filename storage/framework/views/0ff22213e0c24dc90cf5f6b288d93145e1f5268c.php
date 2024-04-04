
<?php $__env->startSection('content'); ?>
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">UPDATE-PRODUCT</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('update.product')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">PRODUCT TITEL</label>
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="product_name" placeholder="PRODUCT TITEL"
                                        value="<?php echo e($product['product_name']); ?>" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">PRODUCT PRICE</label>
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="product_price" placeholder="PRODUCTT PRICE"
                                        value="<?php echo e($product['product_price']); ?>" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">SHORT DESCAPTION</label>
                                    <textarea class="form-control" id="product_short_desc" rows="3" name="product_short_desc"><?php echo e($product['product_short_desc']); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">LONG DESCAPTION</label>
                                    <textarea class="form-control" id="product_long_desc" rows="6" name="product_long_desc"><?php echo e($product['product_long_desc']); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">QUANTITY</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="quantity"
                                        placeholder="QUANTITY" value="<?php echo e($product['quantity']); ?>" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">ADD KEY-WORD</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="kay_word"
                                        placeholder="KEY-WORDS" value="<?php echo e($product['kay_word']); ?>" />
                                </div>
                                <div class="mb-3">
                                    <img src="<?php echo e(asset('assets/image/ProductImg/' . $product->product_img)); ?>"
                                        alt="" width="65">
                                </div>
                                <div>
                                    <label for="formFileDisabled" class="form-label">ADD PRODCUT IMG</label>
                                    <input class="form-control" type="file" id="formFileDisabled" name="product_img" />
                                </div>
                                <div>
                                    <label for="formFileDisabled" class="form-label">ADD MULTIPLE IMG</label>
                                    <input class="form-control" multiple type="file" id="formFileDisabled"
                                        name="multipleImg[]" />
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button type="submit" class="btn btn-primary mt-3" style="float: right;">UPDATE
                                PRODUCT</button>
                            <input type="hidden" name="Productid" value="<?php echo e($product['id']); ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.tempalate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/edit/editProduct.blade.php ENDPATH**/ ?>