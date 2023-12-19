<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfessoratController;

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
        

        //professorat
         Route::get('/GetProfessorat', [ProfessoratController::class, 'index'])->name('getProfessorat');
         Route::get('/formProfessorat', [ProfessoratController::class, 'create'])->name('createProfessorat');
         Route::post('/InsertProfessorat', [ProfessoratController::class, 'store'])->name('insertProfessorat');
         Route::get('/professorat/{id}/edit', [ProfessoratController::class, 'edit'])->name('editProfessorat');
         Route::put('/UpdateProfessorat/{id}', [ProfessoratController::class, 'update'])->name('updateProfessorat');
         Route::delete('/DeleteProfessorat/{id}', [ProfessoratController::class, 'destroy'])->name('destroyProfessorat');
         Route::get('/professorat/{id}', [ProfessoratController::class, 'show'])->name('showProfessorat');
        }); 