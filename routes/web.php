<?php

use App\Http\Controllers\StudentInformationController;
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
route::get('/', [StudentInformationController::class, "index"])->name("home");
route::post('/', [StudentInformationController::class, "create"])->name("create");
route::get('edit/{student_id}', [StudentInformationController::class, "edit"])->name("edit");
route::put('edit/{student_id}', [StudentInformationController::class, "update"])->name("update");
route::get('delete/{student_id}', [StudentInformationController::class, "destroy"])->name("delete");

