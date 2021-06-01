<?php

use App\Http\Controllers\aboutuscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\gallerycontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\noticecontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\LoanReqController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\LoanStatusController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MemberListController;
use App\Http\Controllers\ManageMemberController;
use App\Http\Controllers\ReportController;
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

Route::get('/', function () {
    return view('main');
});
// Route::get('/',[FrontController::class,'front'])->name('front');

Route::get('/', [homecontroller::class, 'home'])->name('home');


Route::get('/admin/about', [aboutuscontroller::class, 'about'])->name('about');

Route::get('/admin/contact', [contactcontroller::class, 'contact'])->name('contact');
Route::get('/admin/gallery', [gallerycontroller::class, 'gallery'])->name('gallery');

//notice section

Route::get('/admin/notice', [noticecontroller::class, 'notice'])->name('notice');

//User Panel


// Route::get('/User', function (){
//     return view('UserMain');
// });;

//user login
// Route::get('/admin/login',[logincontroller::class,'login'])->name('login');
Route::get('/admin/userlogin', [UserLoginController::class, 'userlogin'])->name('userlogin');
Route::post('/admin/userlogin', [UserLoginController::class, 'addlogin'])->name('userlogin');
Route::get('/admin/userlogout', [UserLoginController::class, 'userlogout'])->name('userlogout');


Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'User-auth'], function () {

        Route::get('/User/UserHome', [aboutuscontroller::class, 'User'])->name('UserHome');
        Route::get('/User/My-transaction', [aboutuscontroller::class, 'Mytransaction'])->name('My-transaction');
        Route::get('/User/profile', [aboutuscontroller::class, 'profile'])->name('profile');

        Route::get('/User/edit/{id}', [aboutuscontroller::class, 'editprofile'])->name('profile.edit');
        Route::put('/User/update/{id}', [aboutuscontroller::class, 'updateprofile'])->name('profile.update');

        Route::get('/User/change/{id}', [aboutuscontroller::class, 'changePassword'])->name('password.change');
        Route::post('/User/change_password/{id}', [aboutuscontroller::class, 'updatePassword'])-> name('update.password');


        Route::get('/User/Deposit-withdraw', [NewsController::class, 'Depositwithdraw'])->name('Deposit-withdraw');


        Route::get('/User/Balance', [contactcontroller::class, 'Balance'])->name('Balance');



        Route::post('/LoanRequest', [RequestController::class, 'loanRequest'])->name('loan.request');
        // Route::get('/User/requestview',[RequestController::class,'requestview'])->name('requestview');

    });
});

//admin panel Route



// Route::get('/Adminreg', function (){
//     return view('AdminMain');
// });;

//admin login

Route::get('/admin/login', [logincontroller::class, 'login'])->name('login');
Route::get('/admin/adminlogin', [AdminLoginController::class, 'adminlogin'])->name('adminlogin');
Route::post('/admin/adminlogin', [AdminLoginController::class, 'add'])->name('adminlogin');
Route::get('/admin/adminlogout', [AdminLoginController::class, 'addlogout'])->name('adminlogout');


//admin homepage

Route::group(['prefix' => 'Admin'], function () {
    Route::group(['middleware' => 'admin-auth'], function () {

        Route::get('/adminreg/AdminHome', [aboutuscontroller::class, 'home'])->name('AdminHome');
        Route::get('/adminreg/member', [contactcontroller::class, 'member'])->name('member');
        Route::get('/adminreg/transaction', [contactcontroller::class, 'transaction'])->name('transaction');
        Route::get('/adminreg/ManageMember', [ManageMemberController::class, 'list'])->name('ManageMember');


        Route::get('/adminreg/approval', [ApprovalController::class, 'approve'])->name('Approval');
        Route::get('/adminreg/approval/request/{id}', [ApprovalController::class, 'ApproveStatus'])->name('request.approval');
        Route::get('/adminreg/rejected/request/{id}', [ApprovalController::class, 'RejectStatus'])->name('request.rejected');
        Route::get('/adminreg/apsearch', [ApprovalController::class,'apsearch'])->name('Approval.search');

        //edit,update member
        Route::get('/adminreg/delete/{id}', [MemberListController::class, 'deleteMember'])->name('member.delete');
        Route::get('/adminreg/edit/{id}', [MemberListController::class, 'editmember'])->name('member.edit');
        Route::put('/adminreg/update/{id}', [MemberListController::class, 'updatemember'])->name('member.update');
        Route::get('/adminreg/collectmoney/{id}', [MemberListController::class, 'collectmoney'])->name('collect');
        Route::post('/adminreg/collectmoney', [MemberListController::class, 'store'])->name('money.collect');


        Route::get('/adminreg/collectinstallment/{id}', [MemberListController::class, 'collectinstallment'])->name('installment');
        Route::post('/adminreg/collectinstallment', [MemberListController::class, 'datastore'])->name('money.installment');

        Route::get('/adminreg/loan', [contactcontroller::class, 'loan'])->name('loan');
        Route::get('/adminreg/LoanRequest', [LoanReqController::class, 'LoanRequest'])->name('LoanRequest');
        Route::post('/adminreg/LoanRequest', [LoanReqController::class, 'add'])->name('loan.add');
        Route::get('/adminreg/LoanStatus', [LoanStatusController::class, 'LoanStatus'])->name('LoanStatus');
        Route::get('/adminreg/checkLoan/{id}', [LoanStatusController::class, 'checkLoan'])->name('checkLoan');
        Route::get('/adminreg/viewtransaction/{id}/{user_id}', [LoanStatusController::class, 'viewtransaction'])->name('transaction.view');
        Route::get('/adminreg/LoanStatus/{id}/{status}', [LoanStatusController::class, 'completedUpdate'])->name('completedUpdate');

        //report
        Route::get('/adminreg/report', [ReportController::class, 'report'])->name('report');

        //Add &   search Member

        Route::get('/adminreg/memberlist', [MemberListController::class, 'list'])->name('MemberList');
        Route::post('/adminreg/memberlist', [MemberListController::class, 'add'])->name('member.add');
        Route::get('/adminreg/search', [MemberListController::class, 'search'])->name('member.search');

        //notice
        Route::get('/adminreg/news', [NewsController::class, 'news'])->name('news');
        Route::post('/adminreg/news', [NewsController::class, 'news_body'])->name('news.add');
    });
});
