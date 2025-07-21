<?php


use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SDashboardController;
use App\Http\Controllers\SAuthController;
use App\Http\Controllers\SProfileController;
use App\Http\Controllers\EmployeeController;

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


Route::get('/', [IndexController::class, 'index'])->name('home');


Route::get('/super_admin', [SAuthController::class, 'login_page'])->name('super.login');
Route::post('/super_admin', [SAuthController::class, 'check_login'])->name('super.post.login');
Route::get('/super_admin/register', [SAuthController::class, 'register_page'])->name('super.register');
Route::post('/super_admin/register', [SAuthController::class, 'register_post'])->name('super.post.register');

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
        Route::get('/logout', [SAuthController::class, 'logout'])->name('super.logout');
        Route::get('/dashboard', [SDashboardController::class, 'dashboard'])->name('super.dashboard');

        Route::get('/profile', [SProfileController::class, 'profile'])->name('super.profile');


        Route::get('/add-branch', [AuthController::class, 'register_page'])->name('super.register.branch');
        Route::post('/add-branch-post', [AuthController::class, 'register_post'])->name('super.post.register.branch');


        Route::get('/all-branch-list', [BranchController::class, 'branch_list'])->name('super.branch.list');
    }
);
