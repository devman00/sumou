<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\front\AdController as FrontAdController;
use App\Http\Controllers\front\AdRequestController;
use App\Http\Controllers\front\UserController as UserAccountController;
use App\Http\Controllers\NidVerificationController;
use App\Http\Controllers\PhoneNumberVerifyController;
use App\Http\Controllers\SettingController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

    /** --------------
        ADMIN Routes
    ----------------**/
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
                Route::get('/{permission}/edit','edit')->name('edit')->middleware('permission:permissions-update');
                Route::put('/{permission}','update')->name('update')->middleware('permission:permissions-update');
                Route::delete('/{permission}','destroy')->name('destroy')->middleware('permission:permissions-delete');
                Route::get('/{permission}','show')->name('show')->middleware('permission:role-show');
            });

            // Dashboard Routes-------
            Route::controller(DashboardController::class)->name('dashboard.')
            ->prefix('dashboard')
            ->group(function(){
                Route::get('/', 'index')->name('index'); //->middleware('permission:dashboard-read')
            });

            // Ads Routes-------
            Route::controller(AdController::class)->name('ads.')
            ->prefix('ads')
            ->group(function(){
                    Route::get('/','index')->name('index')->middleware('permission:ads-read');
                    Route::get('create','create')->name('create')->middleware('permission:ads-create');
                    Route::post('/','store')->name('store')->middleware('permission:ads-create');
                    Route::get('/{ad}/edit','edit')->name('edit')->middleware('permission:ads-update');
                    Route::put('/{ad}','update')->name('update')->middleware('permission:ads-update');
                    Route::delete('/{ad}','destroy')->name('destroy')->middleware('permission:ads-delete');
                    Route::get('/{ad}','show')->name('show')->middleware('permission:ad-show');
            });

             // Requests Routes-------
             Route::controller(RequestController::class)->name('requests.')
             ->prefix('requests')
             ->group(function(){
                    //  Route::get('/','index')->name('index')->middleware('permission:request-read');
                    //  Route::get('create','create')->name('create')->middleware('permission:request-create');
                    //  Route::post('/','store')->name('store')->middleware('permission:request-create');
                    //  Route::get('/{ad}/edit','edit')->name('edit')->middleware('permission:request-update');
                    //  Route::put('/{ad}','update')->name('update')->middleware('permission:request-update');
                    //  Route::delete('/{ad}','destroy')->name('destroy')->middleware('permission:request-delete');
                    //  Route::get('/{ad}','show')->name('show')->middleware('permission:request-show');

                    Route::get('/','index')->name('index');
                    Route::delete('/{ad}','destroy')->name('destroy');
                    Route::get('/{ad}','show')->name('show');
             });


        });
    });

    // Admin Login (Guest Middleware)
    Route::controller(LoginController::class)->prefix('admin')->name('admin.')->middleware('guest')->group(
        function(){
            Route::get('login', 'adminLoginView')->name('login_view');
            Route::post('login', 'adminLogin')->name('login');
        }
    );


    Auth::routes();


    /** -------------
        Auth
    --------------- */
    Route::middleware(['auth','verifiedphone']) //  'verified'
    ->group(function ()
    {
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

                Route::get('/permit', 'permit')->name('permit');

            //  Route::get('/', 'dashboard')->name('account');
            });

            /** ----------------------
             User ADs Routes
            --------------------- */
            Route::resource('ads', FrontAdController::class)->except('show');
        });

        Route::get('requests/type', [AdRequestController::class, 'requestType'])->name('requests.type');
        // Route::get('requests/{type}/confirm/{id}', [AdRequestController::class, 'confirm'])->name('requests.confirm');
        Route::get('requests/confirm/{id}', [AdRequestController::class, 'confirm'])->name('requests.confirm')->whereNumber('id');
        Route::resource('requests', AdRequestController::class);
    });


    /** ----------------------
    Public ADs Routes
    --------------------- */
    Route::get('ads/{ad}', [FrontAdController::class,'show'])->name('ads.show');
    Route::any('ads', [FrontAdController::class,'lists'])->name('ads.lists');


    // FRONT Routes --------
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/', [HomeController::class, 'index'])->name('home');


    // OTP Verification
    Route::get('phone/verify', [PhoneNumberVerifyController::class,'show'])->name('phoneverification.show');
    Route::post('phone/verify', [PhoneNumberVerifyController::class,'verify'])->name('phoneverification.verify');

    // National Id Verification (NID)
    Route::get('nid/validation', [NidVerificationController::class,'show'])->name('nidverification.show');
    Route::post('nid/send', [NidVerificationController::class,'send'])->name('nidverification.send');
    Route::post('nid/confirm', [NidVerificationController::class,'confirm'])->name('nidverification.confirm');
    // Route::post('nid/callback', [NidVerificationController::class,'callback'])->name('nidverification.callback');
    Route::post('account/endpoint/', [NidVerificationController::class, 'callback'])->name('nidverification.callback');
    Route::post('account/endpoint1/', [NidVerificationController::class, 'callback1'])->name('nidverification.callback1');
    Route::post('nid/status/', [NidVerificationController::class, 'status'])->name('nidverification.status');
    Route::get('nid/token', [NidVerificationController::class,'token'])->name('nidverification.token');
