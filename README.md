Laravel Routes Demo — Simple, Named & Group Routes

This project demonstrates the basic routing techniques in Laravel.
It includes:

Simple Route

Named Route

Group Routes with Prefix

All routes return simple views to make the concept easy to understand.

🔗 Routes Used in This Project
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('simpleRoute', 'simple');

Route::view('named', 'named')->name('namedRoute');

Route::prefix('admin')->group(function () {
    Route::view('groupsRoute', 'group')->name('groups');
});

📝 Explanation
1️⃣ Simple Route
Route::get('/', function () {
    return view('home');
});

2️⃣ Simple Route using Route::view
Route::view('simpleRoute', 'simple');

3️⃣ Named Route
Route::view('named', 'named')->name('namedRoute');

4️⃣ Group Routes with Prefix
Route::prefix('admin')->group(function () {
    Route::view('groupsRoute', 'group')->name('groups');
});

🎬 Short Demo Video

A short demo video is available where only:

Routes code is shown

Views functionality is shown

No voice-over

Only developers with Laravel basics can understand quickly

👉 Watch the short video here:
🔗 (https://www.linkedin.com/posts/muhammad-mehdi-7a487435a_laravel-php-webdevelopment-activity-7402078164971319296-AASG?utm_source=social_share_send&utm_medium=member_desktop_web&rcm=ACoAAFl5FmwBG0gH4rLFAQEfqtqk_UWTI2EQNXU)

🎯 Purpose

This repository is created for practice and explanation of Laravel routing concepts.
Helpful for beginners who want to understand:

simple routes

named routes

grouped routes

prefix structure

👤 Author

Muhammad Mehdi
GitHub: github.com/MuhammadMehdi555