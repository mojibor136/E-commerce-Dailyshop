<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController as ProductsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\AdminLogoutController;
use App\Http\Controllers\Reseller\ResellerController;
use App\Http\Controllers\Reseller\Auth\ResellerLogoutController;
use App\Http\Controllers\Reseller\Auth\ResellerLoginController;
use App\Http\Controllers\Reseller\Auth\ResellerRegisterController;
use App\Http\Controllers\Reseller\Auth\ForgetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User Routes
// Route::controller(CommonController::class)->group(function () {
//     Route::get('/receive-data', 'receiveData')->name('receive.data');
// });
Route::controller(ProductsController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
    Route::get('/Product/Details/{id}/{productName}', 'ProductDetails')->name('product.details');
    Route::get('/category/product/{id}/{slug}' , 'ProductFilter')->name('category.product');
    Route::get('/GetCategoriesData','GetCategoriesData')->name('GetCategoriesData');
    Route::get('/Products/Price/Filtur','PriceFiltur')->name('PriceFiltur');
    Route::get('/Products/Size/Filtur','SizeFiltur')->name('SizeFiltur');
});
Route::controller(CommonController::class)->group(function () {
    Route::get('/Checkout', 'receiveData')->name('receive.data');
});
Route::controller(SearchController::class)->group(function () {
    Route::get('/Search', 'SearchProduct')->name('search.product');
});
Route::controller(Controller::class)->group(function () {
    Route::get('/Test', 'Test')->name('Test');
    Route::post('/Data' , 'Data')->name('Data');
    Route::get('/Products-Data' , 'ProductsData')->name('ProductsData');
    Route::get('/Price-Data','PriceData')->name('PriceData');
});
Route::middleware('auth')->group(function () {
    Route::controller(CartController::class)->group(function () {
        Route::get('/AddToCart', 'Cart')->name('addtocart');
        Route::post('/AddToCart', 'AddToCart')->name('addtocart.products');
        Route::post('/BuyNow' , 'BuyNow')->name('buynow.products');
        Route::get('/delete-cart-item/{id}', 'DeleteCartItem')->name('delete.cart.item');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/SandData', 'SandData')->name('Sand.Data');
        Route::post('/Shipping', 'StoreShipping')->name('shipping.product');
        Route::get('/Payment' , 'Payment')->name('payment');
        Route::post('/Order-Place' , 'OrderPlace')->name('order.place');
        Route::get('/Order/Confirmation' , 'OrderConfirmation')->name('order.confirmation');

    });
});

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/Admin', 'Admin')->name('admin');
    });

    Route::prefix('Admin')->group(function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('add-category', 'Index')->name('addcategory');
            Route::get('/all-category', 'AllCategory')->name('allcategory');
            Route::post('/storecategory', 'StoreCategory')->name('storecategory');
            Route::get('/delete-category {id}', 'DeleteCategory')->name('deletecategory');
            Route::get('/edit-category/{id}', 'EditCategory')->name('editcategory');
            Route::post('update-category', 'UpdateCategory')->name('updatecategory');
        });

        Route::controller(SubCategoryController::class)->group(function () {
            Route::get('/add-subcategory', 'Index')->name('addsubcategory');
            Route::get('/all-subcategory', 'AllSubCategory')->name('allsubcategory');
            Route::post('/store-subcategory', 'StoreSubCategory')->name('storesubcategory');
            Route::get('/edit-subcategory/{id}', 'EditSubCategory')->name('editsubcategory');
            Route::post('/update-subcategory', 'UpdateCategory')->name('updatesubcategory');
            Route::get('/delete-subcategory/{id}', 'DeleteSubCategory')->name('deletesubcategory');
        });

        Route::controller(ProductController::class)->group(function () {
            Route::get('/add-product', 'Index')->name('addproduct');
            Route::get('/all-product', 'AllProduct')->name('allproduct');
            Route::post('/store-product', 'StoreProduct')->name('storeproduct');
            Route::get('/products-delete/{id}', 'DeleteProduct')->name('delete.product');
            Route::get('/products-edit/{id}' , 'EditProduct')->name('edit.product');
            Route::post('/update-products', 'UpdateProduct')->name('update.product');
        });

        Route::controller(OrderController::class)->group(function () {
            Route::get('/all-order', 'Index')->name('allorder');
            Route::get('/delete-order/{id}', 'DeleteOrder')->name('delete.order');
            Route::get('/panding-order', 'PandingOrder')->name('panding.order');
            Route::get('/confrim-order', 'ConfrimOrder')->name('confirm.order');
            Route::get('/manage-order', 'ManageOrder')->name('manage.order');
        });
    });
});

Route::prefix('Admin')->group(function () {
    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('/login', 'LoginForm')->name('admin.login.form');
        Route::post('/login', 'Login')->name('admin.login');
    });
    Route::controller(AdminLogoutController::class)->group(function () {
        Route::get('/logout', 'Logout')->name('admin.logout');
    });
});

// Reseller Routes
Route::middleware('reseller')->group(function () {
    Route::controller(ResellerController::class)->group(function () {
        Route::get('/reseller', 'Reseller')->name('reseller');
    });

    Route::prefix('Reseller')->group(function () {
        Route::controller(ResellerController::class)->group(function(){
            Route::get('/Profile' , 'Profile')->name('reseller.profile');
         });
         
        });
    });


Route::prefix('Reseller')->group(function () {
    Route::controller(ResellerLoginController::class)->group(function () {
        Route::get('Login', 'LoginForm')->name('reseller.login.form');
        Route::post('Login', 'Login')->name('reseller.login');
    });
    Route::controller(ResellerLogoutController::class)->group(function () {
        Route::get('/Logout', 'Logout')->name('reseller.logout');
    });
    Route::controller(ResellerRegisterController::class)->group(function () {
        Route::get('/Register', 'RegisterForm')->name('reseller.register.form');
        Route::post('/Store', 'Store')->name('reseller.register');
    });
    Route::controller(ForgetController::class)->group(function () {
        Route::get('/Forget-Password','ForgetPasswordShow')->name('forget.password.show');
    });
});

require __DIR__.'/auth.php';
