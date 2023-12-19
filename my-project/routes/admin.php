<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnatController;
use App\Http\Controllers\Admin\CentresController;
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
        // Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

        Route::get('/admin_view', [AdminController::class, 'adminView'])->name('admin_view'); // retorna a la vista de admin

        //Rutas Alumnat CRUD
        Route::get('/getAlumnat', [AlumnatController::class, 'index'])->name('getAlumnat');//muestran todos los alumnos de la bbdd
        Route::get('/formAlumnat', [AlumnatController::class, 'create'])->name('createAlumnat');//es el form
        Route::post('/insertAlumnat', [AlumnatController::class, 'store'])->name('insertAlumnat');//gestiona formulario
        Route::get('/alumnat/{id}/edit',  [AlumnatController::class, 'edit'])->name('editAlumnat');//es el form
        Route::put('/updateAlumnat/{id}', [AlumnatController::class, 'update'])->name('updateAlumnat');//gestiona el formulario
        Route::delete('/deleteAlumnat/{id}', [AlumnatController::class, 'destroy'])->name('destroyAlumnat');
        Route::get('/alumnat/{id}', [AlumnatController::class, 'show'])->name('showAlumnat'); //muestra 1 alumno por id


        /*  Rutas CRUD de Centres */
        Route::get('/getCentres', [CentresController::class, 'index'])->name('getCentres');  // obté tots els centres
        Route::get('/formCentres', [CentresController::class, 'create'])->name('formCentres'); // mostra el formulari de registre   
        Route::post('/insertCentres', [CentresController::class, 'store'])->name('insertCentres'); // ruta de registre
        Route::get('/centres/{id}', [CentresController::class, 'show'])->name('showCentre'); // mostra un centre per id
        Route::get('/centres/{id}/edit', [CentresController::class, 'edit'])->name('editCentres'); // mostra el formulari de edició
        Route::put('/updateCentres/{id}', [CentresController::class, 'update'])->name('updateCentres'); // actualitza centre
        Route::delete('/deleteCentres/{id}', [CentresController::class, 'destroy'])->name('deleteCentres'); // elimina centre

        
        //professorat
         Route::get('/GetProfessorat', [ProfessoratController::class, 'index'])->name('getProfessorat'); //retorna todos los profesores de bbdd
         Route::get('/formProfessorat', [ProfessoratController::class, 'create'])->name('createProfessorat'); // muestra el form de registro
         Route::post('/InsertProfessorat', [ProfessoratController::class, 'store'])->name('insertProfessorat'); // hace el insert a la bbdd
         Route::get('/professorat/{id}/edit', [ProfessoratController::class, 'edit'])->name('editProfessorat'); //muestra el form para editar un registro
         Route::put('/UpdateProfessorat/{id}', [ProfessoratController::class, 'update'])->name('updateProfessorat'); // realiza el update a la bbdd
         Route::delete('/DeleteProfessorat/{id}', [ProfessoratController::class, 'destroy'])->name('destroyProfessorat'); // elimina el registro de la bbdd
         Route::get('/professorat/{id}', [ProfessoratController::class, 'show'])->name('showProfessorat'); //muestra el registro seleccionado
       
    });
