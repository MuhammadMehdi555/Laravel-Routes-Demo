# 🚀 Laravel Routes Demo

A clean and simple Laravel project demonstrating **Simple Routes**, **Named Routes**, and **Group Routes** with views.  
Perfect for beginners learning Laravel routing fundamentals.

## 📌 Project Description
This repository contains basic examples of Laravel routes and how they interact with views.

## 📁 Routes Code Example
```php
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
```

## 📘 Routes Explanation

### 🔹 Simple Route
```php
Route::get('/', function () {
    return view('home');
});
```

### 🔹 Static View Route
```php
Route::view('simpleRoute', 'simple');
```

### 🔹 Named Route
```php
Route::view('named', 'named')->name('namedRoute');
```

### 🔹 Group Route
```php
Route::prefix('admin')->group(function () {
    Route::view('groupsRoute', 'group')->name('groups');
});
```

## 🎥 Demo Video
👉 LinkedIn Video:  
https://www.linkedin.com/posts/muhammad-mehdi-7a487435a_laravel-php-webdevelopment-activity-7402078164971319296-AASG

## 🎯 Purpose
- Demonstrate Laravel routing basics
- Help beginners understand route types
- Provide clean practice examples

## 👨‍💻 Author
**Azad**  
GitHub: https://github.com/Azad
