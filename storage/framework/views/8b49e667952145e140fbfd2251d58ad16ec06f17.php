<!-- <!DOCTYPE html> -->
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/welcome.css')); ?>">
</head>
<style>
    .notAvailable {
        display: flex;
        justify-content: center;
        padding: 15px 0;
    }

    .notAvailable span {
        color: red;
    }
</style>

<body>
    <main class="main-container">
        
        <div class="header-container">
            <div class="category-banner">
                <div class="category">
                    <ul>
                        <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a
                                href="<?php echo e(route('category.product', ['id' => $Category->id, 'slug' => $Category->slug])); ?>">
                                <li><?php echo e($Category->category_name); ?></li>
                                <div class="arr"></div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="slideshow-container">
                    <div class="banner">
                        <img class="slides-img" src="<?php echo e(asset('assets/img/banner/banner.jpg')); ?>" alt="">
                        <img class="slides-img" src="<?php echo e(asset('assets/img/banner/banner1.jpg')); ?>" alt="">
                        <img class="slides-img" src="<?php echo e(asset('assets/img/banner/banner3.jpg')); ?>" alt="">
                        <div class="slider-btn">
                            <div class="prev"></div>
                            <div class="next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="categories-container">
            <div class="categories-card">
            </div>
        </div>
        </div>
        
        <div class="top-product-container">
            <div class="type">
                <span>top salling</span>
                <a href="">view more</a>
            </div>
            <div class="card top-product-card">
                <?php $__currentLoopData = $TopSelles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TopSelle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="<?php echo e(route('product.details', ['id' => $TopSelle->id, 'productName' => $TopSelle->product_name])); ?>">
                        <li class="card">
                            <img src="<?php echo e(asset('assets/image/ProductImg/' . $TopSelle->product_img)); ?>" alt="">
                            <div class="text">
                                <span class="titel"><?php echo e($TopSelle->product_name); ?></span>
                                <div class="price">
                                    <span class="price">bdt:<?php echo e($TopSelle->product_price); ?></span>
                                    <div class="discount">
                                        <span>bdt:570</span>
                                    </div>
                                </div>
                                <div class="star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <span>(25)</span>
                                    <div class="charge">
                                        <span>free</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
        <div class="category-container">
            <div class="type">
                <span>all category</span>
                <a href="">view more</a>
            </div>
            <div class="card category-card border-0">
                <ul>
                    <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="">
                            <li class="card">
                                <img src="<?php echo e(asset('assets/image/CategoryImg/1709013029-65dd782536cd3.jpg')); ?>"
                                    alt="">
                                <span><?php echo e($Category->category_name); ?></span>
                            </li>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <?php if($Products->isEmpty()): ?>
            <li class="notAvailable"><span>Not available products</span></li>
        <?php else: ?>
            
            <div class="product-container">
                <div class="type">
                    <span>latest products</span>
                </div>
                <div class="card product-card">
                    <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a
                            href="<?php echo e(route('product.details', ['id' => $Product->id, 'productName' => $Product->product_name])); ?>">
                            <li class="card">
                                <img src="<?php echo e(asset('assets/image/ProductImg/' . $Product->product_img)); ?>"
                                    alt="">
                                <div class="text">
                                    <span class="titel"><?php echo e($Product->product_name); ?></span>
                                    <div class="price">
                                        <span class="price">bdt:<?php echo e($Product->product_price); ?></span>
                                        <div class="discount">
                                            <span>bdt:570</span>
                                        </div>
                                    </div>
                                    <div class="star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-line"></i>
                                        <span>(25)</span>
                                        <div class="charge">
                                            <span>free</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
    </main>
    <!-- FOOTER  -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.bottom-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/tempalate.js')); ?>"></script>
    <script>
        let CategoryNames = '';
        fetch('/GetCategoriesData')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    let CategoryName = item.category_name.split(' ', 1);
                    let CategoryId = item.id;
                    let CategorySlug = item.slug;
                    var url = '<?php echo e(route('category.product', ['id' => ':id', 'slug' => ':slug'])); ?>';
                    url = url.replace(':id', item.id).replace(':slug', item.slug);
                    CategoryNames +=
                        `<a href="${url}" class="card">
                            <img src="<?php echo e(asset('assets/img/banner/vivo.jfif')); ?>" alt="">
                            <span>${CategoryName.join(' ')}</span>
                        </a>`;
                });
                let CategoryElement = document.querySelector('.categories-card');
                CategoryElement.innerHTML = CategoryNames;
            })
            .catch(error => console.error('Error:', error));
    </script>


</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/search-product.blade.php ENDPATH**/ ?>