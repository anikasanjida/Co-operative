<?php

use App\Http\Controllers\aboutuscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\gallerycontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\noticecontroller;
use App\Http\Controllers\contactcontroller;
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
Route::get('/adminreg/AdminHome',[aboutuscontroller::class,'home'])->name('AdminHome');


Route::get('/admin/gallery',[gallerycontroller::class,'gallery'])->name('gallery');

//notice section

Route::get('/admin/notice',[noticecontroller::class,'notice'])->name('notice');
Route::post('/adminreg/notice',[noticecontroller::class,'add'])->name('notice.add');


//admin homepage

Route::get('/admin/contact',[contactcontroller::class,'contact'])->name('contact');
Route::get('/adminreg/member',[contactcontroller::class,'member'])->name('member');
Route::get('/adminreg/transaction',[contactcontroller::class,'transaction'])->name('transaction');
Route::get('/adminreg/memberlist',[MemberListController::class,'list'])->name('MemberList');
Route::get('/adminreg/ManageMember',[ManageMemberController::class,'list'])->name('ManageMember');




//Add Member
Route::post('/adminreg/memberlist',[MemberlistController::class,'add'])->name('member.add');





//admin login
Route::get('/admin/login',[logincontroller::class,'login'])->name('login');
Route::post('/admin/login',[logincontroller::class,'adminlogin'])->name('adminlogin');





// Route::get('/adminreg', function (){
//     return view('AdminMain');
// });;

Route::get('/Adminreg', function (){
    return view('AdminMain');
});;
