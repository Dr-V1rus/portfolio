<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/admin/messages', function () {
    $messages = Contact::orderBy('created_at', 'desc')->get();
    return view('admin.messages', compact('messages'));
})->middleware('simple.auth');

Route::get('/admin/messages/{id}', function ($id) {
    $message = Contact::findOrFail($id);
    
    // Mark as read when viewed
    if (!$message->is_read) {
        $message->is_read = true;
        $message->save();
    }
    
    return view('admin.message', compact('message'));
})->middleware('simple.auth');