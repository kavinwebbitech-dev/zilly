<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ShoppingcartController;
use App\Http\Controllers\FrontendAuthController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\OrderController as userOrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);


Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');
Route::get('/product-details', function () {
    return view('frontend.partials.product-detail');
})->name('product-details');

Route::get('/modal-quick-view', function () {
    return view('frontend.partials.modalquickview');
})->name('modal-quick-view');

Route::get('/compare', function () {
    return view('frontend.partials.compare');
})->name('compare');
Route::get('/blog', function () {
    return view('frontend.partials.blog');
})->name('blog');
Route::get('/account-page', function () {
    return view('frontend.partials.accountpage');
})->name('accountpage');
Route::get('/viewcart', function () {
    return view('frontend.partials.viewcart');
})->name('viewcart');
Route::get('/term-and-condition', function () {
    return view('frontend.partials.term-and-condition');
})->name('term-and-condition');
Route::get('/privacy', function () {
    return view('frontend.partials.privacy');
})->name('privacy');
Route::get('/return-and-refund', function () {
    return view('frontend.partials.return-and-refund');
})->name('return-refund');

Route::get('/thank-you', function () {
    return view('frontend.partials.thankyou');
})->name('thank-you');

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/login', [FrontendAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [FrontendAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [FrontendAuthController::class, 'logout'])->name('logout');
Route::post('/register', [FrontendAuthController::class, 'register'])->name('register');
Route::post('/password/email', [FrontendAuthController::class, 'sendResetLink'])
    ->name('password.email');

// Show reset password form (EMAIL LINK OPENS THIS)
Route::get('/password/reset/{token}', [FrontendAuthController::class, 'showResetForm'])
    ->name('password.reset');

// Handle new password submission
Route::post('/password/reset', [FrontendAuthController::class, 'resetPassword'])
    ->name('password.update');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-details/{id}', [HomeController::class, 'show'])->name('product.details');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/quick-view/{product}', [ProductController::class, 'quickView'])->name('quick.view');
Route::get('/shoppingCart', [ShoppingcartController::class, 'index'])->name('shoppingCart');
Route::post('/cart/add', [ShoppingcartController::class, 'add'])->name('cart.add');
Route::get('/products/search', [SearchController::class, 'search'])
    ->name('products.search');
Route::get('/myorders', [userOrderController::class, 'index'])->name('myorders');
Route::post('/order/{order}/cancel', [userOrderController::class, 'cancel'])
    ->name('order.cancel');
Route::post('/order/{order}/return', [userOrderController::class, 'return'])
    ->name('order.return');

Route::get('/product/{id}', [SearchController::class, 'show'])
    ->name('products.show');

Route::post('/cart/update', [ShoppingcartController::class, 'updateQty'])
    ->name('cart.update');

Route::post('/cart/remove/{id}', [ShoppingcartController::class, 'remove'])
    ->name('cart.remove');

Route::get('/wish-list', [WishlistController::class, 'index'])->name('wish-list');

Route::post('/wishlist/toggle/{id}', [WishlistController::class, 'toggle'])
    ->name('wishlist.toggle');

Route::post('/wishlist/remove', [WishlistController::class, 'remove'])
    ->name('wishlist.remove');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
// Route::post('/apply-coupon', [CheckoutController::class, 'applyCoupon'])->name('coupon.apply');
Route::post('/checkout/apply-coupon', [CheckoutController::class, 'applyCoupon'])->name('checkout.applyCoupon');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');
Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product.details');
// Example Thank You page route
Route::get('/thank-you', function () {
    return view('frontend.partials.thankyou');
})->name('thank-you');


Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('products', [AdminProductController::class, 'index'])->name('products.index');
        Route::get('products/create', [AdminProductController::class, 'create'])->name('products.create');
        Route::post('products', [AdminProductController::class, 'store'])->name('products.store');
        Route::get('products/{product}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
        Route::put('products/{product}', [AdminProductController::class, 'update'])->name('products.update');
        Route::delete('products/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');
        Route::post('products/images/{id}', [AdminProductController::class, 'deleteImage'])
            ->name('products.images.delete');
        Route::resource('brands', BrandController::class);
        Route::resource('categories', CategoryController::class);
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('orders/{order}/status/{status}', [OrderController::class, 'updateStatus'])->name('orders.status');
        Route::delete('orders/{order}', [OrderController::class, 'destroy'])
            ->name('orders.destroy');
        Route::resource('userlist', UserListController::class)
            ->names('userlist');
        Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
        Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupons.create');
        Route::post('/coupons', [CouponController::class, 'store'])->name('coupons.store');
        Route::get('/coupons/{coupon}/edit', [CouponController::class, 'edit'])->name('coupons.edit');
        Route::put('/coupons/{coupon}', [CouponController::class, 'update'])->name('coupons.update');
        Route::delete('/coupons/{coupon}', [CouponController::class, 'destroy'])->name('coupons.destroy');
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
