<?php

use App\Models\TugasAdmin;
use App\Http\Middleware\MustPeserta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TugasAdminController;
use App\Http\Controllers\AbsenPesertaController;
use App\Http\Controllers\UserController;

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
    return view('home');
});


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/contact', function () {
    return view('contact');
});

// AUTH

Route::middleware('auth')->group(function(){


    // Route::get('/admin', function(){
    //     return view('admin.index');
    // })->middleware('must-admin');


    Route::get('/welcome', function(){
        return view('absen-peserta.welcome');
    })->name('welcome')->middleware('user-page');


    Route::get('/home', function () {
        return view('Home');

    });

        Route::middleware('must-admin')->group(function(){
            Route::get('admin', [AdminController::class, 'dashboard'])->name('admin');

            Route::get('/token', [AdminController::class, 'token'])->name('token.index');
            Route::post('/token/activate/{id}', [AdminController::class, 'tokenAktivasi'])->name('token.activate');
        });

        Route::middleware('must-admin')->group(function(){
            Route::get('admin/absen', [AbsenController::class, 'index']);
        });

        Route::middleware('must-peserta')->group(function(){
            Route::get('/user', function () {
                return view('peserta.home');
            });
            Route::get('peserta', [AbsenPesertaController::class, 'index']);
            Route::get('peserta/day/{day}', [AbsenPesertaController::class, 'day']);
            Route::post('peserta/absen/{day}', [AbsenPesertaController::class, 'submitAbsen']);
            Route::post('peserta/tugas/{day}', [AbsenPesertaController::class, 'submitTugas']);
            Route::get('peserta/final-project', function(){
                return view('final-project.index');
            });
        });


    Route::prefix('/Materi')->middleware('must-admin')->group(function(){
        Route::get('Admin/Index', [MateriController::class, 'index'])->name('Materi.Index');
        Route::get('Admin/BuatMateri', [MateriController::class, 'create'])->name('Materi.Create');
        Route::post('Admin/Store', [MateriController::class, 'store'])->name('Materi.Store');
        Route::get('Admin/Edit/{id}', [MateriController::class, 'edit'])->name('Materi.Edit');
        Route::put('Admin/Update/{id}', [MateriController::class, 'update'])->name('Materi.Update');
        Route::delete('Admin/Delete/{id}', [MateriController::class, 'delete'])->name('Materi.Delete');

        Route::get('/upload-bukti', [PesertaController::class, 'showUploadForm'])->name('upload.form');
        Route::post('/upload-bukti', [PesertaController::class, 'uploadImage'])->name('upload.image');

    });

    Route::prefix('/TugasAdmin')->middleware('must-admin')->group(function(){
        Route::get('Index', [TugasAdminController::class, 'index'])->name('TugasAdmin.Index');
        Route::get('BuatTugas', [TugasAdminController::class, 'create'])->name('TugasAdmin.Create');
        Route::post('Store', [TugasAdminController::class, 'store'])->name('TugasAdmin.Store');
        Route::get('Edit/{id}', [TugasAdminController::class, 'edit'])->name('TugasAdmin.Edit');
        Route::put('Update/{id}', [TugasAdminController::class, 'update'])->name('TugasAdmin.Update');
        Route::delete('Delete/{id}', [TugasAdminController::class, 'delete'])->name('TugasAdmin.Delete');
    });



    Route::middleware('must-admin')->group(function(){
        Route::get('admin/absen', [AbsenController::class, 'index']);
    });

    Route::middleware('must-peserta')->group(function(){
        Route::get('peserta/absen', [AbsenPesertaController::class, 'index']);
        Route::get('peserta/absen/submit', [AbsenPesertaController::class, 'submit']);
    });
});




// NEW ROUTES

Route::prefix('users')->middleware('auth')->group(function(){

});

Route::prefix('auth')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::get('/login', [SessionController::class, 'index'])->name('auth.login.view');
        Route::post('/login', [SessionController::class, 'loginFunc'])->name('auth.login');
        Route::get('/register', [SessionController::class, 'registerView'])->name('auth.register.view');
        Route::post('/register', [SessionController::class, 'registerFunc'])->name('auth.register');
        Route::post('/forgot-password', [SessionController::class, 'ForgotPassword'])->name('auth.forgot');
    });

    Route::middleware('auth')->group(function(){
        Route::post('/logout', [SessionController::class, 'logout'])->name('auth.logout');
    });
});

Route::prefix('admin')->middleware('must-admin')->group(function(){
    Route::prefix('materials')->group(function(){
        Route::get('', [MateriController::class, 'index'])->name('materi.view');
        Route::get('/create', [MateriController::class, 'create'])->name('materi.create.view');
        Route::post('/create', [MateriController::class, 'store'])->name('materi.create');
        Route::get('/update/{id}', [MateriController::class, 'edit'])->name('materi.update.view');
        Route::put('/update/{id}', [MateriController::class, 'update'])->name('materi.update');
        Route::delete('/delete/{id}', [MateriController::class, 'delete'])->name('materi.delete');
    });

    Route::prefix('tasks')->group(function(){
        Route::get('', [TugasAdminController::class, 'index'])->name('tasks.index');
        Route::get('/create', [TugasAdminController::class, 'create'])->name('tasks.create.view');
        Route::post('/create', [TugasAdminController::class, 'store'])->name('tasks.create');
        Route::get('/update/{id}', [TugasAdminController::class, 'edit'])->name('tasks.update.view');
        Route::put('/update/{id}', [TugasAdminController::class, 'update'])->name('tasks.update');
        Route::delete('/delete/{id}', [TugasAdminController::class, 'delete'])->name('tasks.delete');
    });

    Route::prefix('groups')->group(function(){

    });

    Route::prefix('users')->group(function(){
        Route::get('', [UserController::class, 'index'])->name('users.view');
        Route::get('export-users', [UserController::class, 'export'])->name('users.export');
        Route::put('verification/{id}', [UserController::class, 'verification'])->name('users.verification');
        Route::put('unverification/{id}', [UserController::class, 'unverification'])->name('users.unverification');
    });

    Route::prefix('absences')->group(function(){

    });
});

// Route::get('admin/absen', [AbsenController::class, 'index']);
// Route::get('peserta/absen', [AbsenPesertaController::class, 'index']);
// Route::get('peserta/absen/submit', [AbsenPesertaController::class, 'submit']);
