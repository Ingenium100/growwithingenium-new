<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PostController; 

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

Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about']);

Route::get('/services', [PageController::class, 'services']);

Route::get('/portfolio', [PageController::class, 'portfolio']);

Route::get('/academy', [PageController::class, 'academy']);

Route::get('/updates', [PageController::class, 'updates']);

Route::get('/gallery', [PageController::class, 'gallery']);

Route::get('/NCSI-2023-report-presentation-in-2024', [PageController::class, 'ncsi']);

Route::get('/CX_transformatio_nsummit_pictures', [PageController::class, 'cxtransformation']);

Route::get('/us-center', [PageController::class, 'uscenter']);

Route::get('/contact-us', [PageController::class, 'contact']);

Route::post('/send-contact', [PostController::class, 'savecontact']);