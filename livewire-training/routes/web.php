<?php
use App\Livewire\Todos;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;
use App\Livewire\EditProfile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', EditProfile::class);
// Route::get('/', Todos::class);
// Route::get('/posts', ShowPosts::class);
// Route::get('/create-post', CreatePost::class);
// Route::get('/edit-profile', EditProfile::class);
