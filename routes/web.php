<?php


use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Image\ImageController;
use App\Http\Livewire\Admin\AdmimEditProductComponent;
use App\Http\Livewire\Admin\Admin\AdminAddSettingComponent;
use App\Http\Livewire\Admin\Admin\AdminEditSettingComponent;
use App\Http\Livewire\Admin\Admin\AdminSettingComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\ArticleComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\FromWishlistComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

//Route::get('/', function () {
//    return view('welcome');
//});

route::get('/',HomeComponent::class)->name('home.index');

route::get('/article',ArticleComponent::class)->name('article');
route::get('/shop',ShopComponent::class)->name('shop');
route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
route::get('/cart',CartComponent::class)->name('shop.cart');
route::get('/checkout',CheckOutComponent::class)->name('shop.checkout');
route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
route::get('/search',SearchComponent::class)->name('product.search');
route::get('/wishlist',FromWishlistComponent::class)->name('shop.wishlist');

route::middleware(['auth'])->group(function (){
    route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});
route::get('/admin/home/setting/app',[HomeComponent::class,'index'])->name('admin.home.setting.app');

route::middleware(['auth','authadmin'])->group(function (){
    route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    route::get('/admin/categories/add',AdminAddCategoryComponent::class)->name('admin.categories.add');
    route::get('/admin/categories/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.categories.edit');
// Productc
    route::get('/admin/product',AdminProductComponent::class)->name('admin.product');
    route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    route::get('/admin/product/edit/{product_id}',AdmimEditProductComponent::class)->name('admin.product.edit');
//slider
    route::get('/admin/home/slider',AdminHomeSliderComponent::class)->name('admin.home.slider');
    route::get('/admin/home/slider/add',AdminAddHomeSliderComponent::class)->name('admin.home.slider.add');
    route::get('/admin/home/slider/edit/{slider_id}',AdminEditHomeSliderComponent::class)->name('admin.home.slider.edit');
//Setting
    route::get('/admin/home/setting',AdminSettingComponent::class)->name('admin.home.setting');
    route::get('/admin/home/setting/add',AdminAddSettingComponent::class)->name('admin.home.setting.add');
    route::get('/admin/home/setting/edit/{setting_id}',AdminEditSettingComponent::class)->name('admin.home.setting.edit');

    //Article
    route::resource('/articles',ArticleController::class);

    //image
    route::resource('/images',ImageController::class);

});



require __DIR__.'/auth.php';
