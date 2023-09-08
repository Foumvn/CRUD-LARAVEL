<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
/*Http\Control\EtudiantControllerl
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/delete-etudiant/{id}',[EtudiantController::class, 'delete_etudiant']);
Route::get('/liste',[EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter',[EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);
