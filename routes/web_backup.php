<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get("/", [WelcomeController::class, "welcome"])->name("welcome");

// --- Note ---

// Route::get("/note", [NoteController::class, 'index'])->name("note.index");
// Route::get("/note/{id}", [NoteController::class, 'show'])->name('note.show');
// Route::get("/note/create", [NoteController::class, 'create'])->name("note.create"); 
// Route::get("/note/{id}/edit", [NoteController::class, 'edit'])->name('note.edit');
// Route::post("/note", [NoteController::class, 'store'])->name("note.store");
// Route::put("/note/{id}", [NoteController::class, 'update'])->name('note.update');
// Route::delete("/note/{id}", [NoteController::class, 'destroy'])->name('note.destroy');

// Does all the above in a single line
Route::resource('note', NoteController::class);


