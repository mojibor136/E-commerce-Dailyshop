
<?php $__env->startSection('content'); ?>
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">ADD-PRODUCT</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('storeproduct')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">PRODUCT TITEL</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="product_name"
                                    placeholder="PRODUCT TITEL" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">PRODUCT PRICE</label>
                                <input type="text" class="form-control" id="basic-default-company" name="product_price"
                                    placeholder="PRODUCTT PRICE" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">SHORT DESCAPTION</label>
                                <textarea class="form-control" id="product_short_desc" rows="3" name="product_short_desc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">LONG DESCAPTION</label>
                                <textarea class="form-control" id="product_long_desc" rows="6" name="product_long_desc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SELECT CATEGORY</label>
                                <select class="form-select" id="product_category_id" name="product_category_id"
                                    aria-label="Default select example">
                                    <option selected>SELECT CATEGORY</option>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">SELECT SUBCATEGORY</label>
                                <select class="form-select" id="product_subcategory_id" name="product_subcategory_id"
                                    aria-label="Default select example">
                                    <option selected>SELECT SUB-CATEGORY</option>
                                    <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->subcategory_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">QUANTITY</label>
                                <input type="text" class="form-control" id="basic-default-company" name="quantity"
                                    placeholder="QUANTITY" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">ADD KEY-WORD</label>
                                <input type="text" class="form-control" id="basic-default-company" name="kay_word"
                                    placeholder="KEY-WORDS" />
                            </div>
                            <div>
                                <label for="formFileDisabled" class="form-label">ADD PRODCUT IMG</label>
                                <input class="form-control" type="file" id="formFileDisabled" name="product_img" />
                            </div>
                            <div>
                                <label for="formFileDisabled" class="form-label">ADD MULTIPLE IMG</label>
                                <input class="form-control" multiple type="file" id="formFileDisabled" name="multipleImg[]" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" style="float: right;">SUBMIT
                                PRODUCT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.tempalate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/addprodcut.blade.php ENDPATH**/ ?>