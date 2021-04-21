<?php

use App\Http\Controllers\aboutuscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\gallerycontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\noticecontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\LoanReqController;
use App\Http\Controllers\LoanStatusController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MemberListController;
use App\Http\Controllers\ManageMemberController;



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

Route::get('/',[homecontroller::class,'home'])->name('home');


Route::get('/admin/about',[aboutuscontroller::class,'about'])->name('about');

Route::get('/admin/contact',[contactcontroller::class,'contact'])->name('contact');
Route::get('/admin/gallery',[gallerycontroller::class,'gallery'])->name('gallery');

//notice section

Route::get('/admin/notice',[noticecontroller::class,'notice'])->name('notice');

//User Panel


Route::get('/User', function (){
    return view('UserMain');
});;

Route::get('/User/UserHome',[aboutuscontroller::class,'User'])->name('UserHome');
    Route::get('/User/My-transaction',[aboutuscontroller::class,'Mytransaction'])->name('My-transaction');
    Route::get('/User/profile',[aboutuscontroller::class,'profile'])->name('profile');


    Route::get('/User/Deposit-withdraw',[NewsController::class,'Depositwithdraw'])->name('Deposit-withdraw');


    Route::get('/User/Balance',[contactcontroller::class,'Balance'])->name('Balance');

//user login
    Route::get('/admin/userlogin',[UserLoginController::class,'userlogin'])->name('userlogin');
    Route::post('/admin/userlogin',[UserLoginController::class,'addlogin'])->name('userlogin');
    Route::get('/admin/userlogout',[UserLoginController::class,'userlogout'])->name('userlogout');




//admin panel Route



    // Route::get('/Adminreg', function (){
    //     return view('AdminMain');
    // });;

//admin login

Route::get('/admin/login',[logincontroller::class,'login'])->name('login');
Route::get('/admin/adminlogin',[AdminLoginController::class,'adminlogin'])->name('adminlogin');
Route::post('/admin/adminlogin',[AdminLoginController::class,'add'])->name('adminlogin');
Route::get('/admin/adminlogout',[AdminLoginController::class,'addlogout'])->name('adminlogout');


//admin homepage
Route::group(['middleware'=>'admin-auth'],function (){

 Route::get('/adminreg/AdminHome',[aboutuscontroller::class,'home'])->name('AdminHome');
Route::get('/adminreg/member',[contactcontroller::class,'member'])->name('member');
Route::get('/adminreg/transaction',[contactcontroller::class,'transaction'])->name('transaction');
Route::get('/adminreg/memberlist',[MemberListController::class,'list'])->name('MemberList');
Route::get('/adminreg/delete/{id}',[MemberListController::class,'deleteMember'])->name('member.delete');
Route::get('/adminreg/ManageMember',[ManageMemberController::class,'list'])->name('ManageMember');


Route::get('/adminreg/loan',[contactcontroller::class,'loan'])->name('loan');
Route::get('/adminreg/LoanRequest',[LoanReqController::class,'LoanRequest'])->name('LoanRequest');
Route::post('/adminreg/LoanRequest',[LoanReqController::class,'add'])->name('loan.add');
Route::get('/adminreg/LoanStatus',[LoanStatusController::class,'LoanStatus'])->name('LoanStatus');

//Add Member
Route::post('/adminreg/memberlist',[MemberlistController::class,'add'])->name('member.add');

//notice
Route::get('/adminreg/news',[NewsController::class,'news'])->name('news');
Route::post('/adminreg/news',[NewsController::class,'news_body'])->name('news.add');
});
