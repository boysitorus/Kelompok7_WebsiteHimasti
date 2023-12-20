<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/berita/{id}', [DashboardController::class, 'getDetail'])->name('detailBerita');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::prefix('kegiatan')->group(function () {
    Route::get('/', [KegiatanController::class, 'index'])->name('kegiatan');
    Route::get('/detail/{id}', [KegiatanController::class, 'getDetail'])->name('detailKegiatan');
});

Route::prefix('kepengurusan')->group(function () {
    Route::get('/', [KepengurusanController::class, 'index'])->name('kepengurusan');
    Route::get('/detail/{tahun}/{divisi}', [KepengurusanController::class, 'getDetail'])->name('detailkepengurusan');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
    Route::get('/logout', [AuthController::class,'getLogout'])->name("logout");
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');
        
        Route::prefix('berita')->group(function () {
            Route::get('/', [AdminController::class, 'getBerita'])->name('admin.berita');
            Route::post('/create', [AdminController::class, 'createBerita'])->name('admin.berita.create');
            Route::post('/update', [AdminController::class, 'updateBerita'])->name('admin.berita.update');
            Route::post('/delete', [AdminController::class, 'deleteBerita'])->name('admin.berita.delete');
        });

        Route::prefix('kepengurusan')->group(function () {
            Route::get('/', [AdminController::class, 'getKepengurusan'])->name('admin.kepengurusan');
            Route::post('/create', [AdminController::class, 'createKepengurusan'])->name('admin.kepengurusan.create');
            Route::post('/delete', [AdminController::class, 'deleteKepengurusan'])->name('admin.kepengurusan.delete');

            Route::prefix('/divisi')->group(function () {
                Route::get('/{year}', [AdminController::class, 'getDetailKepengurusan'])->name('admin.kepengurusan.detail');
                Route::post('/create', [AdminController::class, 'createDivisi'])->name('admin.kepengurusan.divisi.create');
                Route::post('/delete', [AdminController::class, 'deleteDivisi'])->name('admin.kepengurusan.divisi.delete');

                Route::prefix('/detail')->group(function () {
                    Route::get('/{tahun}/{divisi}', [AdminController::class, 'getDetailDivisi'])->name('admin.kepengurusan.divisi.detail');
                    Route::prefix('/keanggotaan')->group(function() {
                       Route::get('/{tahun}/{divisi}', [AdminController::class, 'getKeanggotaan'])->name('admin.kepengurusan.divisi.keanggotaan');
                       Route::post('/create', [AdminController::class, 'createMember'])->name('admin.kepengurusan.divisi.keanggotaan.create');
                       Route::post('/update', [AdminController::class, 'updateMember'])->name('admin.kepengurusan.divisi.keanggotaan.update');
                       Route::post('/delete', [AdminController::class, 'deleteMember'])->name('admin.kepengurusan.divisi.keanggotaan.delete');
                    });
                    Route::prefix('/proker')->group(function() {
                        Route::get('/{tahun}/{divisi}', [AdminController::class, 'getProker'])->name('admin.kepengurusan.divisi.proker');
                        Route::post('/create', [AdminController::class, 'createProker'])->name('admin.kepengurusan.divisi.proker.create');
                        Route::post('/delete', [AdminController::class, 'deleteProker'])->name('admin.kepengurusan.divisi.proker.delete');
                    });

                });
                
            });
        });

        Route::prefix('kegiatan')->group(function () {
            Route::prefix('/notdone')->group(function () {
                Route::get('/', [AdminController::class, 'getNotDone'])->name('admin.kegiatan.notdone');
                Route::post('/update', [AdminController::class, 'updateNotDone'])->name('admin.kegiatan.notdone.update');
            });
            
            Route::prefix('/done')->group(function () {
                Route::get('/', [AdminController::class, 'getDone'])->name('admin.kegiatan.done');
                Route::post('/update', [AdminController::class, 'updateDone'])->name('admin.kegiatan.done.update');
            });
            
        });
    });
});




