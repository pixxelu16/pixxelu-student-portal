<?php

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

Route::get('/', function () {
    return view('auth/login');
});

Route::group(['middleware' => 'auth'], function(){ 
    //Super_Admin Only 
    Route::group(['middleware' => 'Super_Admin'], function(){ 
        //Super_Admin dashboard  
        Route::get('superadmin/dashboard', [App\Http\Controllers\SuperAdmin\DashboardController::class, 'dashboard']);
    });

    //Admin Only 
    Route::group(['middleware' => 'Admin'], function(){ 
        //Admin dashboard
        Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard']);
        //Students 
        Route::get('admin/all-students-list', [App\Http\Controllers\Admin\StudentController::class, 'all_students']);
        Route::get('admin/add-new-student', [App\Http\Controllers\Admin\StudentController::class, 'add_student']);
        Route::post('admin/submit-student', [App\Http\Controllers\Admin\StudentController::class, 'submit_student'])->name('admin.submit.student');
        Route::get('admin/edit-student/{id}', [App\Http\Controllers\Admin\StudentController::class, 'edit_student']);
        Route::post('admin/update-student/{id}', [App\Http\Controllers\Admin\StudentController::class, 'update_student'])->name('admin.update.student');
        Route::get('admin/delete-student/{id}', [App\Http\Controllers\Admin\StudentController::class, 'delete_student']);
    });

    //Student Only 
    Route::group(['middleware' => 'Student'], function(){ 
        //Student dashboard
        Route::get('student/dashboard', [App\Http\Controllers\Student\DashboardController::class, 'dashboard']);
       
    });

    //Employee Only 
    Route::group(['middleware' => 'Employee'], function(){ 
        //Employee dashboard
        Route::get('employee/dashboard', [App\Http\Controllers\Employee\DashboardController::class, 'dashboard']);
       
    });

    //Subscriber Only 
    Route::group(['middleware' => 'Subscriber'], function(){ 
        //Subscriber dashboard
         Route::get('subscriber/dashboard', [App\Http\Controllers\Subscriber\DashboardController::class, 'dashboard']);
           
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
