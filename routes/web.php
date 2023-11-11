<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\front\AdController;
use App\Http\Controllers\SettingController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\UserController as UserAccountController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::middleware(['auth','isAdmin'])->group(function(){

    Route::group([
        // 'middleware' => 'role:superadministrator|administrator',
        'as' => 'admin.',
        'prefix' => 'admin',
    ], function(){
        
        // Posts Routes-------
        Route::controller(PostController::class)->name('posts.')
        ->prefix('posts')
        ->group(function(){
                Route::get('/','index')->name('index')->middleware('permission:posts-read');
                Route::get('create','create')->name('create')->middleware('permission:posts-create');
                Route::post('/','store')->name('store')->middleware('permission:posts-create');
                Route::get('/{post}/edit','edit')->name('edit')->middleware('permission:posts-update');
                Route::put('/{post}','update')->name('update')->middleware('permission:posts-update');
                Route::delete('/{post}','destroy')->name('destroy')->middleware('permission:posts-delete');
                Route::get('/{post}','show')->name('show')->middleware('permission:post-show');
            });

        // Categories Routes-------
        Route::controller(CategoryController::class)->name('categories.')
        ->prefix('categories')
        ->group(function(){
            Route::get('/','index')->name('index')->middleware('permission:categories-read');
            Route::get('create','create')->name('create')->middleware('permission:categories-create');
            Route::post('/','store')->name('store')->middleware('permission:categories-create');
            Route::get('/{category}/edit','edit')->name('edit')->middleware('permission:categories-update');
            Route::put('/{category}','update')->name('update')->middleware('permission:categories-update');
            Route::delete('/{category}','destroy')->name('destroy')->middleware('permission:categories-delete');
            Route::get('/{category}','show')->name('show')->middleware('permission:category-show');
        });
       
        // Users Routes-------
        Route::controller(UserController::class)->name('users.')
        ->prefix('users')
        ->group(function(){
            Route::get('/','index')->name('index')->middleware('permission:users-read');
            Route::get('create','create')->name('create')->middleware('permission:users-create');
            Route::post('/','store')->name('store')->middleware('permission:users-create');
            Route::get('/{user}/edit','edit')->name('edit')->middleware('permission:users-update');
            Route::put('/{user}','update')->name('update')->middleware('permission:users-update');
            Route::delete('/{user}','destroy')->name('destroy')->middleware('permission:users-delete');
            Route::get('/{user}','show')->name('show')->middleware('permission:user-show');
        });
       
        // Roles Routes-------
        Route::controller(RoleController::class)->name('roles.')
        ->prefix('roles')
        ->group(function(){
            Route::get('/','index')->name('index')->middleware('permission:roles-read');
            Route::get('create','create')->name('create')->middleware('permission:roles-create');
            Route::post('/','store')->name('store')->middleware('permission:roles-create');
            Route::get('/{role}/edit','edit')->name('edit')->middleware('permission:roles-update');
            Route::put('/{role}','update')->name('update')->middleware('permission:roles-update');
            Route::delete('/{role}','destroy')->name('destroy')->middleware('permission:roles-delete');
            Route::get('/{role}','show')->name('show')->middleware('permission:role-show');
        });


        // Permissions Routes-------
        Route::controller(PermissionController::class)->name('permissions.')
        ->prefix('permissions')
        ->group(function(){
            Route::get('/','index')->name('index')->middleware('permission:permissions-read');
            Route::get('create','create')->name('create')->middleware('permission:permissions-create');
            Route::post('/','store')->name('store')->middleware('permission:permissions-create');
            Route::get('/{role}/edit','edit')->name('edit')->middleware('permission:permissions-update');
            Route::put('/{role}','update')->name('update')->middleware('permission:permissions-update');
            Route::delete('/{role}','destroy')->name('destroy')->middleware('permission:permissions-delete');
            Route::get('/{role}','show')->name('show')->middleware('permission:role-show');
        });

        Route::controller(DashboardController::class)->name('dashboard.')
        ->prefix('dashboard')
        ->group(function(){
            Route::get('/', 'index')->name('index'); //->middleware('permission:dashboard-read')
        });

    });
});

Route::controller(LoginController::class)->prefix('admin')->name('admin.')->middleware('guest')->group(
    function(){
        Route::get('login', 'adminLoginView')->name('login_view');
        Route::post('login', 'adminLogin')->name('login');
    }
);


Auth::routes();


// FRONT Routes -------- 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
    /** -------------
     * Auth
     --------------- */
        Route::middleware(['auth']) //  'verified'
        ->group(function ()
        {
        //  Route::get('account', function(){
        //      return view('front.account');
        //  })->name('account');


            Route::prefix('account')->group(function ()
            {
                /** ----------------------
                     User Account Routes
                --------------------- */
                Route::controller(UserAccountController::class)
                ->name('user.')->group(function ()
                {
                    Route::get('/settings', 'profile')->name('profile');
                    Route::put('/settings/{user}', 'updateProfile')->name('profile.update');
                    Route::get('/change-password', 'editPassword')->name('password');
                    Route::put('/change-password/{user}', 'updatePassword')->name('password.update');

                //  Route::get('/', 'dashboard')->name('account');
                });

                /** ----------------------
                 User ADs Routes
            --------------------- */

            Route::resource('ads', AdController::class)->except('show');

            
            });
        });

        Route::get('ads/{ad}', [AdController::class,'show'])->name('ads.show');
    
        Route::any('ads', [AdController::class,'lists'])->name('ads.lists');



