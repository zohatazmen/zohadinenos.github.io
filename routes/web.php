<?php

use App\Http\Controllers\backend\AdminContactManagementController;
use App\Http\Controllers\backend\AdminFaqController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\Backend\AdminMenuManagementController;
use App\Http\Controllers\backend\AdminOrdersController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\AdminReservationController;
use App\Http\Controllers\Backend\AdminReservationFormManagementController;
use App\Http\Controllers\backend\AdminTeamMemberController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MeetChefController;
use App\Http\Controllers\frontend\MenuController;
use App\Http\Controllers\frontend\OurChefController;
use App\Http\Controllers\frontend\ReservationController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\ShopDetailsController;
use Illuminate\Support\Facades\Route;

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

//Frontend Routes

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::post('/', [HomeController::class, 'submitMessage']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog-details', [BlogDetailsController::class, 'index']);

// Cart routes
Route::get('/cart', [CartController::class, 'index']);

Route::get('account', [AccountController::class, 'index'])->name('account');
Route::get('account', [AccountController::class, 'index'])->name('account');

Route::post('login', [AccountController::class, 'login'])->name('login');
Route::post('register', [AccountController::class, 'register'])->name('register');
Route::post('logout', [AccountController::class, 'logout'])->name('logout');
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/meet-the-chef', [MeetChefController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/our-chef', [OurChefController::class, 'index']);
Route::get('/reservation', [ReservationController::class, 'index']);
Route::post('/reservation', [ReservationController::class, 'submitMessage'])->name('reservation.submit');
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop-details/{id}', [ShopController::class, 'show']);
Route::get('/shop-details', [ShopDetailsController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitMessage']);
// Backend
//Login Page
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/login', function () {
    if (session()->has('email')) {
        return redirect('/admin');
    } else {
        return view('backend.login');
    }
});
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin', [AdminHomeController::class, 'index']);

Route::get('/admin/register', [AdminHomeController::class, 'registerAdmin'])->name('admin.create');
Route::post('/admin/register', [AdminHomeController::class, 'submitAdminRecord']);
Route::get('/admin/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('admin.show');
Route::delete('/admin/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('admin.delete');
Route::get('/admin/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('admin.update');

// Team Management
Route::get('/admin/team', [AdminTeamMemberController::class, 'index'])->name('team.show');
Route::get('/admin/team-member-details/{id}', [AdminTeamMemberController::class, 'showTeamMember'])->name('team.details');
Route::get('/admin/team-add', [AdminTeamMemberController::class, 'registerTeam'])->name('team.add');
Route::post('/admin/team-add', [AdminTeamMemberController::class, 'submitTeamRecord']);
Route::get('/admin/team-edit/{id}', [AdminTeamMemberController::class, 'editTeam'])->name('team.edit');
Route::put('/admin/team-edit/{id}', [AdminTeamMemberController::class, 'updateTeam'])->name('team.update');
Route::delete('/admin/team-delete/{id}', [AdminTeamMemberController::class, 'deleteTeam'])->name('team.delete');

// order Management
Route::get('/admin/orders', [AdminOrdersController::class, 'index'])->name('order.add');
Route::get('/admin/order-add', [AdminOrdersController::class, 'addorder'])->name('order.add');
Route::post('/admin/order-add', [AdminOrdersController::class, 'submitorderRecord']);
Route::get('/admin/order-edit/{id}', [AdminOrdersController::class, 'editorder'])->name('order.edit');
Route::put('/admin/order-edit/{id}', [AdminOrdersController::class, 'updateorder'])->name('order.update');
Route::delete('/admin/order-delete/{id}', [AdminOrdersController::class, 'deleteorder'])->name('order.delete');

//reservation managemenet
Route::prefix('admin')->group(function () {
    Route::get('/reservations', [AdminReservationController::class, 'index'])->name('admin.reservations.index');
    Route::get('/reservations/create', [AdminReservationController::class, 'create'])->name('admin.reservations.create');
    Route::post('/reservations/store', [AdminReservationController::class, 'store'])->name('admin.reservations.store');
    Route::get('/reservations/{id}/edit', [AdminReservationController::class, 'edit'])->name('admin.reservations.edit');
    Route::put('/reservations/{id}/update', [AdminReservationController::class, 'update'])->name('admin.reservations.update');
    Route::delete('/reservations/{id}/delete', [AdminReservationController::class, 'destroy'])->name('admin.reservations.destroy');
    Route::get('/reservations/{id}', [AdminReservationController::class, 'show'])->name('admin.reservations.show');
});

// Project Management
Route::get('/admin/projects', [AdminProjectsController::class, 'index'])->name('project.add');
Route::get('/admin/project-add', [AdminProjectsController::class, 'addProject'])->name('project.add');
Route::post('/admin/project-add', [AdminProjectsController::class, 'submitProjectRecord']);
Route::get('/admin/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
Route::put('/admin/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');
Route::delete('/admin/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('project.delete');

// FAQs Management
Route::get('/admin/faqs', [AdminFaqController::class, 'index'])->name('faq.show');
Route::get('/admin/faq-add', [AdminFaqController::class, 'addFAQ'])->name('faq.add');
Route::post('/admin/faq-add', [AdminFaqController::class, 'submitFaqRecord']);
Route::get('/admin/faq-edit/{id}', [AdminFaqController::class, 'editFAQ'])->name('faq.edit');
Route::put('/admin/faq-edit/{id}', [AdminFaqController::class, 'updateFAQ'])->name('faq.update');
Route::delete('/admin/faq-delete/{id}', [AdminFaqController::class, 'deleteFAQ'])->name('faq.delete');

Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin/reservationformmanagement', [AdminReservationFormManagementController::class, 'index'])->name('admin.reservation.index');
Route::delete('/admin/reservationformmanagement/{id}', [AdminReservationFormManagementController::class, 'destroy'])->name('admin.reservation.destroy');

Route::get('/admin/menus', [AdminMenuManagementController::class, 'index'])->name('admin.menus.index');
Route::get('/admin/menus/add', [AdminMenuManagementController::class, 'addMenu'])->name('admin.menus.add');
Route::post('/admin/menus/submit', [AdminMenuManagementController::class, 'submitMenuRecord'])->name('admin.menus.submit');
Route::get('/admin/menus/edit/{id}', [AdminMenuManagementController::class, 'editMenu'])->name('admin.menus.edit');
Route::put('/admin/menus/update/{id}', [AdminMenuManagementController::class, 'updateMenu'])->name('admin.menus.update');
Route::delete('/admin/menus/delete/{id}', [AdminMenuManagementController::class, 'deleteMenu'])->name('admin.menus.delete');

Route::get('/admin/contactmanagement', [AdminContactManagementController::class, 'index'])->name('admin.contact.index');
Route::delete('/admin/contactmanagement/{id}', [AdminContactManagementController::class, 'destroy'])->name('admin.contact.destroy');
Route::get('admin/logout', function () {
    if (session()->has('email')) {
        session()->pull('id', null);
        session()->pull('first_name', null);
        session()->pull('last_name', null);
        session()->pull('email', null);
    }

    return redirect('/admin/login');
});
