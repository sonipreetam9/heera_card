<?php


use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SDashboardController;
use App\Http\Controllers\SSAuthcontroller;
use App\Http\Controllers\SProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SearchCardController;
use App\Http\Controllers\SettingController;
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
Route::get('/terms-and-conditions', [IndexController::class, 'termIndex'])->name('terms.conditions');


Route::get('/super_admin', [SSAuthcontroller::class, 'login_page'])->name('super.login');
Route::post('/super_admin', [SSAuthcontroller::class, 'check_login'])->name('super.post.login');
Route::get('/super_admin/register', [SSAuthcontroller::class, 'register_page'])->name('super.register');
Route::post('/super_admin/register', [SSAuthcontroller::class, 'register_post'])->name('super.post.register');

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
    // Route::get('/edit-employee/{empTag}', [EmployeeController::class, 'edit_employee'])->name('edit.employee');
    // Route::post('/edit-employee-post/{empTag}', [EmployeeController::class, 'edit_employee_post'])->name('edit.register.employee');
    // Route::get('/delete-employee/{empTag}', [EmployeeController::class, 'delete_employee'])->name('delete.register.employee');
    Route::get('/all-employee-list', [EmployeeController::class, 'employee_list'])->name('employee.list');
    Route::get('/card-search', [SearchCardController::class, 'index'])->name('card.index');
    Route::post('/card-live-search', [SearchCardController::class, 'liveSearch'])->name('card.liveSearch');
    Route::get('/print-employee-id-card/{empTag}', [EmployeeController::class, 'employee_card_print'])->name('print.employee.id.card');
});

Route::group(
    ['prefix' => 'super_admin', 'middleware' => ['admin']],
    function () {
        Route::get('/logout', [SSAuthcontroller::class, 'logout'])->name('super.logout');
        Route::get('/dashboard', [SDashboardController::class, 'dashboard'])->name('super.dashboard');
        Route::get('/all-candidates', [SSAuthcontroller::class, 'all_candidates'])->name('super.all.candidates');
        Route::get('/today-employee', [SSAuthcontroller::class, 'today_employee'])->name('super.today.employee');
        Route::get('/profile', [SProfileController::class, 'profile'])->name('super.profile');



        Route::get('/add-branch', [Authcontroller::class, 'register_page'])->name('super.register.branch');
        Route::post('/add-branch-post', [Authcontroller::class, 'register_post'])->name('super.post.register.branch');
        Route::get('/edit-branch/{branch_code}', [SSAuthcontroller::class, 'edit_branch'])->name('super.edit.branch');
        Route::post('/edit-branch-post/{branch_code}', [SSAuthcontroller::class, 'edit_branch_post'])->name('super.post.edit.branch');
        Route::get('/delete-branch/{id}', [BranchController::class, 'delete_branch'])->name('super.delete.branch');

        Route::get('/all-branch-list', [BranchController::class, 'branch_list'])->name('super.branch.list');

        Route::get('/branch-candidate-list/{branch_code}', [BranchController::class, 'branch_list_candidate'])->name('super.branch.candidate.list');

        Route::get('/edit-employee/{empTag}', [SSAuthcontroller::class, 'edit_employee'])->name('super.edit.employee');

        Route::post('/edit-employee-post/{empTag}', [SSAuthcontroller::class, 'edit_employee_post'])->name('super.edit.register.employee');
        Route::get('/delete-employee/{empTag}', [SSAuthcontroller::class, 'delete_employee'])->name('super.delete.register.employee');

        Route::get('/super-print-employee-id-card/{empTag}', [SSAuthcontroller::class, 'super_employee_card_print'])->name('super.print.employee.id.card');

        Route::get('/edit-profile/{empTag}', [SProfileController::class, 'edit_profile'])->name('super.edit.profile');
        Route::post('/edit-profile/{empTag}', [SProfileController::class, 'edit_profile_post'])->name('super.edit.profile.post');

        Route::get('/edit-setting', [SettingController::class, 'edit_setting_index'])->name('super.edit.setting');
        Route::post('/edit-setting/{id}', [SettingController::class, 'edit_setting_post'])->name('super.edit.setting.post');

        Route::get('/renew-card', [SSAuthcontroller::class, 'renew_card_index'])->name('super.renew.card');
        Route::post('/card-live-search', [SSAuthcontroller::class, 'super_liveSearch'])->name('super.card.liveSearch');

        Route::get('/show-employee-detail/{empTag}', [SSAuthcontroller::class, 'show_employee_detail'])->name('super.show.employee.detail');
        Route::post('/renew-card-post/{empTag}', [SSAuthcontroller::class, 'renew_card_post'])->name('super.renew.card.post');
    }
);
