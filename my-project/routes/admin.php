<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CentresController;

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

        /*  Rutas CRUD de Centres */
        Route::get('/getCentres', [CentresController::class, 'index'])->name('getCentres');  // obté tots els centres
        Route::get('/formCentres', [CentresController::class, 'create'])->name('formCentres'); // mostra el formulari de registre   
        Route::post('/insertCentres', [CentresController::class, 'store'])->name('insertCentres'); // ruta de registre
        Route::get('/centres/{id}', [CentresController::class, 'show'])->name('showCentre'); // mostra un centre per id
        Route::get('/centres/{id}/edit', [CentresController::class, 'edit'])->name('editCentres'); // mostra el formulari de edició
        Route::put('/updateCentres/{id}', [CentresController::class, 'update'])->name('updateCentres'); // actualitza centre
        Route::delete('/deleteCentres/{id}', [CentresController::class, 'destroy'])->name('deleteCentres'); // elimina centre
    });