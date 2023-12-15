<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnatController;

    // Ambits de rutes de admin_db
    Route::middleware(['admin_db'])->group(function() {
        // Funcionalitat usuaris amb mètode POST
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');
        
        // Funcionalitat centres amb GET que utilitza la funció del controlador que mostrarà els centres
        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');
        
        // Funcionalitat professorat que utilitza la funció 'professorat' del controlador
        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');
        
        // Funcionalitat alumnat que utilitza la funció 'alumnat' del controlador
        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

        Route::get('/admin_view', [AdminController::class, 'adminView'])->name('admin_view'); // retorna a la vista de admin
    
        //Rutas Alumnat CRUD
        Route::get('/getAlumnat', [AlumnatController::class, 'index'])->name('getAlumnat');
        Route::get('/formAlumnat', [AlumnatController::class, 'create'])->name('createAlumnat');
        Route::post('/insertAlumnat', [AlumnatController::class, 'store'])->name('insertAlumnat');//formulario
        Route::get('/alumnat/{id}/edit',  [AlumnatController::class, 'edit'])->name('editAlumnat');
        Route::put('/updateAlumnat/{id}', [AlumnatController::class, 'update'])->name('updateAlumnat');//formulario
        Route::delete('/deleteAlumnat/{id}', [AlumnatController::class, 'destroy'])->name('destroyAlumnat');

    });