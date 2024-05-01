<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
//Controllers - Handle Requests
//model - handle data logic and interactions with Database (DataBase)
//views - what should be shown to the user (HTML, CSS, Blade Files)
/*
 Route::get('/', function() {
    return view ('welcome');}
); 

Route::get('/profile', function() {
    return view ('profile');}
);

Route::get('/feed', function() {
    return view ('feed');}
);

Route::get('/profile', function() {
    return view ('users.profile');} //accesssing a blade subfolder
);

we dismiss the use of this method of using routes because if we want to do some complicated logic (ie getting something 
from a DB and perfome some logic on it and render it, doing this using the above form will make the routes very crowded
and hard to work with, thats why we use Controllers.) So what we do instead is instead of returning our view inside our routes file,
we are going to send it(the return view) inside our controller and let our controller decide what its going to do for that Request.

*/


Route::get('/', [DashboardController::class,'index']
);

Route::post('/idea', [DashboardController::class,'index']
)->name('idea.create');

Route::get ('/profile',[ProfileController::class, 'index']);

Route::get('/terms', function() {
    return view ('terms');}
);
