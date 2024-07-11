<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActionLogController;



Route::get('/', function () {
    if(\Auth::check() == 1 ){
        return redirect()->to(route('login'));
    }
    return view('auth.login');
});

Route::match(['GET','POST'],'/login_2fa', [TwoFactorController::class, 'login_2fa'])->middleware(['auth'])->name('login_2fa');
Route::match(['GET','POST'],'/generate_qr', [TwoFactorController::class, 'generate_qr'])->middleware(['auth'])->name('generate_qr');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified','2FA_auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/two-fa', [TwoFactorController::class, 'two_fa'])->name('twoFa');
    Route::post('/complete-registration', [TwoFactorController::class, 'complete_registration'])->name('complete_registration');

    /* route with 2FA */
    Route::middleware(['2FA_auth'])->group(function () {
       
        /* user routes*/
        Route::get('/users', [AdminController::class, 'index'])->name('user');
        Route::match(['GET','POST'],'/add-user', [AdminController::class, 'add_user'])->name('user.add');
        Route::match(['GET','POST'],'/update-my-profile', [AdminController::class, 'update_my_profile'])->name('user.profile');
        Route::match(['GET','POST'],'/update-user/{user_id}', [AdminController::class, 'update_user'])->name('user.update');
        Route::get('/delete-user/{user_id}', [AdminController::class, 'delete_user'])->name('user.delete');
        Route::match(['GET','POST'],'/update_user_menu', [AdminController::class, 'update_user_menu'])->name('user.update_user_menu');

        /* job routes*/
        Route::resource('job', JobController::class);

        /* users routes*/
        Route::get('list-user', [UserController::class, 'list_user'])->name('user.list');
        Route::match(['GET','POST'],'/create_user', [UserController::class, 'create_user'])->name('user.create');
        
         /* permission routes*/
        Route::get('role', [PermissionController::class, 'index'])->name('role.index');
        Route::match(['GET','POST'],'/create_role', [PermissionController::class, 'create'])->name('role.create');
         

        /* inventory routes*/
        Route::get('scanner-product', [InventoryController::class, 'product_scanner'])->name('inventory.product_scanner');
        Route::get('list-product', [InventoryController::class, 'list_product'])->name('inventory.list_product');
        Route::get('add-product', [InventoryController::class, 'add_product'])->name('inventory.add_product');
        Route::get('list-supplier', [InventoryController::class, 'list_supplier'])->name('inventory.list_supplier');

        /* batch routes*/
        Route::get('list-batch', [BatchController::class, 'list_batch'])->name('batch.list_batch');
        Route::get('job-without-batch-date', [BatchController::class, 'job_without_batch_date'])->name('batch.job_without_batch_date');

        /* reports routes*/
         Route::resource('report', ReportController::class);

         /* Action log routes*/
         Route::resource('log', ActionLogController::class);

          /* Branding routes*/
          Route::resource('brand', BrandController::class);
    });
});


require __DIR__.'/auth.php';


/* clear-cache */
Route::get('/c', function() {
    \Artisan::call('cache:clear');
    \Artisan::call('optimize:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});


