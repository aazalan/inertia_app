<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;

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

Route::get('/', function () {
    return Inertia::render('Home');
});


Route::get('/users', function (Request $request) {
    return Inertia::render('Users/Index', [
        'users' => User::query()
            ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        'filters' => $request->only('search')
    ]);
});


Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});


Route::post('/users', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required',
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => 'required',
    ]);

    User::create($validated);
    
    return redirect('/users');
});


Route::get('/settings', function () {
    return Inertia::render('Settings');
});


Route::post('/logout', function (Request $request) {
    dd($request->testData);
});