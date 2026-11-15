
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AssetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssetMutationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;

// Halaman utama
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Login dan Register
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.process');
});

// Semua halaman yang wajib login
Route::middleware('auth')->group(function () {

    // Halaman aplikasi wajib disetujui Admin
    Route::middleware('approved')->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Admin dan Petugas
        Route::middleware('role:admin,petugas')->group(function () {

            // Laporan
            Route::get('/reports', [ReportController::class, 'index'])
                ->name('reports.index');

            Route::get('/reports/export', [ReportController::class, 'export'])
                ->name('reports.export');

            // Tambah aset
            Route::get('/assets/create', [AssetController::class, 'create'])
                ->name('assets.create');

            Route::post('/assets', [AssetController::class, 'store'])
                ->name('assets.store');

            // Edit aset
            Route::get('/assets/{asset}/edit', [AssetController::class, 'edit'])
                ->whereNumber('asset')
                ->name('assets.edit');

            Route::put('/assets/{asset}', [AssetController::class, 'update'])
                ->whereNumber('asset')
                ->name('assets.update');

            // Kategori
            Route::get('/categories', [CategoryController::class, 'index'])
                ->name('categories.index');

            Route::post('/categories', [CategoryController::class, 'store'])
                ->name('categories.store');

            Route::put('/categories/{category}', [CategoryController::class, 'update'])
                ->name('categories.update');

            Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
                ->name('categories.destroy');

            Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
                ->name('categories.edit');

            // Ruangan
            Route::get('/rooms', [RoomController::class, 'index'])
                ->name('rooms.index');

            Route::post('/rooms', [RoomController::class, 'store'])
                ->name('rooms.store');

            Route::put('/rooms/{room}', [RoomController::class, 'update'])
                ->name('rooms.update');

            Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])
                ->name('rooms.destroy');

            Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])
                ->name('rooms.edit');

            // Pegawai
            Route::get('/employees', [EmployeeController::class, 'index'])
                ->name('employees.index');

            Route::post('/employees', [EmployeeController::class, 'store'])
                ->name('employees.store');

            Route::put('/employees/{employee}', [EmployeeController::class, 'update'])
                ->name('employees.update');

            Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])
                ->name('employees.destroy');

            Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])
                ->name('employees.edit');

            // Mutasi aset
            Route::resource('mutations', AssetMutationController::class)
                ->only(['index', 'create', 'store', 'destroy']);
        });

        // Semua peran boleh melihat aset
        Route::middleware('role:admin,petugas,siswa')->group(function () {

            Route::get('/assets', [AssetController::class, 'index'])
                ->name('assets.index');

            Route::get('/assets/{asset}', [AssetController::class, 'show'])
                ->whereNumber('asset')
                ->name('assets.show');
        });

        // Hanya Admin
        Route::middleware('role:admin')->group(function () {

            // Hapus aset
            Route::delete('/assets/{asset}', [AssetController::class, 'destroy'])
                ->whereNumber('asset')
                ->name('assets.destroy');

            // Setujui pendaftaran
            Route::post('/users/{user}/approve', [UserController::class, 'approve'])
                ->name('users.approve');

            // Tolak pendaftaran
            Route::post('/users/{user}/reject', [UserController::class, 'reject'])
                ->name('users.reject');

            // Manajemen pengguna
            Route::resource('users', UserController::class)
                ->except(['show']);
        });
    });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
