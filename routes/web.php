<?php


use App\Models\Meal;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// })->name('homepage');
Route::get('/', function () {
    return view('welcome')->with('meals', Meal::all());
})->name('welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/', [MealController::class, 'index'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [MealController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [MealController::class, 'create'])->name('dashboard');
    Route::post('/dashboard', [MealController::class, 'store'])->name('dashboard');
    Route::patch('/update', [MealController::class, 'update'])->name('update');
});
// Route::get('/welcome', [MealController::class, 'index'])->name('welcome');

Route::resource('meals', MealController::class);

require __DIR__.'/auth.php';
