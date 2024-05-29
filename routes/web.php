<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/** Jenis Method HTTP:
 * 1. GET= menampilkan halaman
 * 2. POST= mengirim data
 * 3. PUT= meng-update data
 * 4. DELETE= menghapus data
 */
//route baru untuk menampilkan teks 
Route::get('/Hallo/{nama}', function($nama){
    return "Assalamualaikum...$nama";
});


Route::get('admin/Dashboard', [DashboardController::class, 'index']);

Route::get('admin/student', [studentController::class, 'index']);

Route::get('admin/course', [CourseController::class, 'index']);

Route::get('admin/student/create', [studentController::class, 'create']);

//untuk mengirim data
Route::post('admin/student/store', [studentController::class, 'store']);

    
//route::get("Profile", function(){
    //return view("Profile");
//});