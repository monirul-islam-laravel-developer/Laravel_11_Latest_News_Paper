<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontThemeController;
use App\Http\Controllers\FrontCategoryController;
use App\Http\Controllers\AuthCustommerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Controllers\CatSubController;
use App\Models\RoleRoute;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\CuponController;
use App\Http\Controllers\FrontCuponController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\InquaryController;
use App\Http\Controllers\ReporterController;

function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}


    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/contact-page',[HomeController::class,'contactPage'])->name('contact-page');
    Route::post('/inquary-submit',[InquaryController::class,'inquary'])->name('inquary-submit');
    Route::get('/all-blogs',[FrontBlogController::class,'index'])->name('front-allblogs');
    Route::get('/blogs-detail/{id}',[FrontBlogController::class,'detail'])->name('blogs-detail');
    Route::get('/cat/{slug}', [FrontCategoryController::class, 'index'])->name('single-category');
    Route::get('/detail/{categorySlug}/{postSlug}', [FrontThemeController::class, 'index'])->name('detail');
    Route::get('/all-website', [FrontThemeController::class, 'allWebsite'])->name('all-website');
    Route::get('/search-website', [FrontThemeController::class, 'searchWebsite'])->name('search-website');
    Route::get('cart-page', [CartController::class, 'index'])->name('add-to-cart');
    Route::get('order-page/{id}/{slug}', [CustomerOrderController::class, 'index'])->name('order-page');

    Route::post('complete-order', [CustomerOrderController::class, 'completeOrder'])->name('complete-order');
    Route::post('/cupon/verify', [FrontCuponController::class, 'verify'])->name('cupon.verify');
    Route::get('complete-order', [CustomerOrderController::class, 'completeOrder'])->name('complete-order');
    Route::post('/cupon/verify', [FrontCuponController::class, 'verify'])->name('cupon.verify');

    Route::get('customer-register', [AuthCustommerController::class, 'index'])->name('customer-register')->middleware('customerlogin');
    Route::get('customer-login', [AuthCustommerController::class, 'login'])->name('customer-login')->middleware('customerlogin');
    Route::get('customer-logincheck', [AuthCustommerController::class, 'logincheck'])->name('customer-logincheck');
    Route::post('new-customer', [AuthCustommerController::class, 'storeCustomer'])->name('store-customer');
    Route::get('customer-dashboard', [AuthCustommerController::class, 'dashboard'])->name('customer-dashboard')->middleware('customer');
    Route::get('customer-profile', [AuthCustommerController::class, 'profile'])->name('customer-profile')->middleware('customer');
    Route::post('customer-update', [AuthCustommerController::class, 'updateCustomer'])->name('customer-update')->middleware('customer');
    Route::post('customer-password-change', [AuthCustommerController::class, 'changePassword'])->name('customer-password-change')->middleware('customer');
    Route::get('customer-logout', [AuthCustommerController::class, 'customerLogout'])->name('customer-logout')->middleware('customer');


    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function ()
    {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/get-sub-category-by-id',[CatSubController::class,'getSubCategory'])->name('product.sub-category');

        Route::get('clear',function() {
            Artisan::call('optimize:clear');
            Alert::success('Cache Clear', 'Cache clear successfully');
            return redirect()->back();
//    dd('cleared');
        })->name('clear');

        Route::middleware(['roles'])->group(function () {
            Route::group(['prefix' => 'role'], function () {
                Route::get('/add', [RoleController::class, 'index'])->name('role.add');
                Route::post('/new', [RoleController::class, 'create'])->name('role.new');
                Route::get('/manage', [RoleController::class, 'manage'])->name('role.manage');
                Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
                Route::post('/update/{id}', [RoleController::class, 'update'])->name('role.update');
                Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');
            });

            Route::prefix('user')->group(function () {
                Route::get('/add', [UserController::class, 'index'])->name('user.add');
                Route::post('/new', [UserController::class, 'create'])->name('user.new');
                Route::get('/manage', [UserController::class, 'manage'])->name('user.manage');
                Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
                Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
                Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
            });

            Route::resource('category',CategoryController::class);
            Route::resource('subcategory',SubCategoryController::class);
            Route::resource('reporter',ReporterController::class);
            Route::resource('logos',LogoController::class);
            Route::resource('privacyPolicy',PrivacyPolicyController::class);
            Route::resource('slider',SliderController::class);
            Route::resource('aboutus',AboutUsController::class);
            Route::resource('info',InfoController::class);
            Route::resource('theme',ThemeController::class);
            Route::resource('blog',BlogController::class);
            Route::resource('cupon',CuponController::class);
        });
    });
