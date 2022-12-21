<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {

    $tasks =Task::all();
    return view('new_dashboard', [
        'tasks' => $tasks
    ]);

})->middleware(['auth'])->name('dashboard');

Route::post('/storeTask', [TaskController::class, 'storeTasks']);

Route::post('/updateTask/{id}', [TaskController::class, 'updateTasks']);
Route::get('/deleteTask/{id}', [TaskController::class, 'deleteTasks']);

require __DIR__.'/auth.php';
