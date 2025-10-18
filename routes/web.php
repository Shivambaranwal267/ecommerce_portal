<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vendor\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Middleware\VendorMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}', [CategoryController::class, 'detail']);

Route::get('/category/electronics/{slug}', [SubcategoryController::class, 'detail']);

Route::get('/category/electronics/tv/{slug}', [ProductdetailController::class, 'detail']);

Route::get('/cart-list/{slug}', [CartController::class, 'list']);

Route::get('/checkout/{slug}', [CheckoutController::class, 'checkout']);

Route::get('register', [UserController::class, 'register']);

Route::get('register1', [UserController::class, 'register1']);

Route::get('login', [UserController::class, 'login']);

Route::get('login1', [UserController::class, 'login1']);

// user dashboard routes

Route::get('user/', [UserController::class, 'index']);

Route::get('user/order-history/', [UserController::class, 'history']);

Route::get('user/detail/', [UserController::class, 'detail']);

Route::get('user/settings/', [UserController::class, 'settings']);

// vendor dashboard routes

Route::get('vendor/signup', [VendorController::class, 'signup']);
Route::post('vendor/signup', [VendorController::class, 'register']);

Route::get('vendor/login', [VendorController::class, 'login']);
Route::post('vendor/login', [VendorController::class, 'login_create']);

Route::get('vendor/logout', [VendorController::class, 'logout']);

Route::get('vendor/forget', [VendorController::class, 'forget']);

Route::get('vendor/', [VendorController::class, 'index'])->middleware(VendorMiddleware::class);

Route::get('vendor/add-product', [ProductController::class, 'addproduct']);
Route::post('vendor/add-product', [ProductController::class, 'createproduct']);

Route::get('vendor/view-product', [ProductController::class, 'viewproduct']);

Route::get('vendor/edit-product/{p_id}', [ProductController::class, 'editproduct']);
Route::put('vendor/edit-product/{p_id}', [ProductController::class, 'updateproduct']);
Route::delete('vendor/delete-product/{p_id}', [ProductController::class, 'deleteproduct']);




Route::get('vendor/orders', [VendorController::class, 'orders']);

Route::get('vendor/order-detail', [VendorController::class, 'orderdetail']);

Route::get('vendor/users', [VendorController::class, 'users']);

Route::get('vendor/profile', [VendorController::class, 'profile']);



// Admin Dashboard

Route::get('admin/login', [AdminController::class, 'login']);

Route::get('admin/', [AdminController::class, 'index']);

Route::get('admin/order-detail', [AdminController::class, 'orderdetail']);

Route::get('admin/add-category', [AdminCategoryController::class, 'addcategory']);
Route::post('admin/add-category', [AdminCategoryController::class, 'createcategory']);

Route::get('admin/view-category', [AdminCategoryController::class, 'viewcategory']);

Route::get('admin/edit-category/{c_id}', [AdminCategoryController::class, 'editcategory']);
Route::put('admin/edit-category/{c_id}', [AdminCategoryController::class, 'updatecategory']);

Route::delete('admin/delete-category/{c_id}', [AdminCategoryController::class, 'deletecategory']);

Route::get('admin/users', [AdminController::class, 'users']);

Route::get('admin/vendors', [AdminController::class, 'vendors']);

Route::get('admin/orders', [AdminController::class, 'orders']);

// Route::get('admin/products',[AdminController::class,'products']);
