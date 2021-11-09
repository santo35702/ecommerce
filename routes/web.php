<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\ProductPage;
use App\Http\Livewire\Frontend\ProductDetails;
use App\Http\Livewire\Frontend\CartPage;
use App\Http\Livewire\Frontend\CompareProduct;
use App\Http\Livewire\Frontend\ProductListPage;
use App\Http\Livewire\Frontend\ProuctByCategory;
use App\Http\Livewire\Frontend\ProductListByCategory;
use App\Http\Livewire\Frontend\CheckoutPage;
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\ContactUs;
use App\Http\Livewire\Frontend\FAQPage;
use App\Http\Livewire\Frontend\NotFoundPage;
use App\Http\Livewire\Frontend\WishlistPage;
use App\Http\Livewire\Admin\AddCategoryPage;
use App\Http\Livewire\Admin\AdminProductPage;
use App\Http\Livewire\Admin\EditCategoryPage;
use App\Http\Livewire\Admin\BrandPage;
use App\Http\Livewire\Admin\CategoryPage;
use App\Http\Livewire\Admin\AddBrandPage;
use App\Http\Livewire\Admin\DashboardPage as AdminDashboard;
use App\Http\Livewire\Admin\EditBrandPage;
use App\Http\Livewire\Users\DashboardPage as UsersDashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', HomePage::class)->name('home');
Route::prefix('products')->name('products.')->group(function ()
{
    Route::get('/', ProductPage::class)->name('index');
    Route::get('/list', ProductListPage::class)->name('list');
    Route::get('/{slug}', ProductDetails::class)->name('details');
    Route::get('/categories/{slug}', ProuctByCategory::class)->name('by_category');
    Route::get('/categories-list/{slug}', ProductListByCategory::class)->name('list_category');
});
Route::get('/cart', CartPage::class)->name('cart');
Route::get('/compare-product', CompareProduct::class)->name('compare');
Route::get('/checkout', CheckoutPage::class)->name('checkout');
Route::get('/about-us', AboutUs::class)->name('about');
Route::get('/contact-us', ContactUs::class)->name('contact');
Route::get('/faqs', FAQPage::class)->name('faq');
Route::get('/404', NotFoundPage::class)->name('404');
Route::get('/wishlist', WishlistPage::class)->name('wishlist');

// Admin Route__
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');

    Route::prefix('products')->name('products.')->group(function ()
    {
        Route::get('/', AdminProductPage::class)->name('index');
    });
    // Route::get('/products', AdminProductPage::class)->name('products');

    Route::prefix('categories')->name('category.')->group(function ()
    {
        Route::get('/', CategoryPage::class)->name('index');
        Route::get('/add', AddCategoryPage::class)->name('add');
        Route::get('/edit/{category_slug}', EditCategoryPage::class)->name('edit');
    });
    // Route::get('/categories', CategoryPage::class)->name('category');

    Route::prefix('brands')->name('brands.')->group(function ()
    {
        Route::get('/', BrandPage::class)->name('index');
        Route::get('/add', AddBrandPage::class)->name('add');
        Route::get('/edit/{brand_slug}', EditBrandPage::class)->name('edit');
    });
    // Route::get('/brands', BrandPage::class)->name('brand');
});

// Users & Customers Route__
Route::middleware(['auth:sanctum', 'verified'])->prefix('users')->name('users.')->group(function () {
    Route::get('/dashboard', UsersDashboard::class)->name('dashboard');
});
