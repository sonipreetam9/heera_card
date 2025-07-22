<?php


use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SDashboardController;
use App\Http\Controllers\SSAuthController;
use App\Http\Controllers\SProfileController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Artisan;

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


Route::get('/optimize', function () {
    // Clear all caches
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    // Re-optimize the application
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize');

    return '✅ सभी कैश और कॉन्फ़िगरेशन सफलतापूर्वक क्लियर और ऑप्टिमाइज़ कर दिए गए हैं!';
});


Route::get('/', [IndexController::class, 'index'])->name('home');


Route::get('/super_admin', [SSAuthController::class, 'login_page'])->name('super.login');
Route::post('/super_admin', [SSAuthController::class, 'check_login'])->name('super.post.login');
Route::get('/super_admin/register', [SSAuthController::class, 'register_page'])->name('super.register');
Route::post('/super_admin/register', [SSAuthController::class, 'register_post'])->name('super.post.register');

Route::group(
    ['middleware' => 'guest'],
    function () {
        Route::get('/login', [AuthController::class, 'login_page'])->name('login');
        Route::post('/login', [AuthController::class, 'check_login'])->name('post.login');
    }
);


Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

    Route::get('/add-employee', [EmployeeController::class, 'add_employee'])->name('add.employee');
    Route::post('/add-employee-post', [EmployeeController::class, 'add_employee_post'])->name('post.register.employee');
    Route::get('/all-employee-list', [EmployeeController::class, 'employee_list'])->name('employee.list');
    Route::get('/print-employee-id-card/{empTag}', [EmployeeController::class, 'employee_card_print'])->name('print.employee.id.card');
});

Route::group(
    ['prefix' => 'super_admin', 'middleware' => ['admin']],
    function () {
        Route::get('/logout', [SSAuthController::class, 'logout'])->name('super.logout');
        Route::get('/dashboard', [SDashboardController::class, 'dashboard'])->name('super.dashboard');

        Route::get('/profile', [SProfileController::class, 'profile'])->name('super.profile');


        Route::get('/add-branch', [AuthController::class, 'register_page'])->name('super.register.branch');
        Route::post('/add-branch-post', [AuthController::class, 'register_post'])->name('super.post.register.branch');


        Route::get('/all-branch-list', [BranchController::class, 'branch_list'])->name('super.branch.list');
    }
);
