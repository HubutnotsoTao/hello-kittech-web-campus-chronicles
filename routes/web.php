<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login')->name('login');
Route::view('/login', 'auth.login');
Route::view('/signup', 'auth.signup')->name('signup');
Route::view('/forgot-password', 'auth.forgot')->name('forgot');

Route::view('/dashboard', 'dashboard.index')->name('dashboard');
Route::view('/events', 'events.index')->name('events');
Route::view('/create-post', 'posts.create')->name('posts.create');
Route::view('/story', 'posts.story')->name('story');
Route::view('/admin', 'admin.index')->name('admin');
Route::view('/quick-access', 'dashboard.quick')->name('quick');
Route::view('/institutes', 'institutes.index')->name('institutes');
Route::view('/institutes/ics', 'institutes.show', ['institute' => [
    'name' => 'Institute of Computing Science',
    'code' => 'ICS',
    'description' => 'Computing innovation, software, technology and digital research.',
]]);
Route::view('/institutes/ibe', 'institutes.show', ['institute' => [
    'name' => 'Institute of Business Education',
    'code' => 'IBE',
    'description' => 'Business education for leaders, entrepreneurs and future professionals.',
]]);
Route::view('/institutes/ias', 'institutes.show', ['institute' => [
    'name' => 'Institute of Arts and Science',
    'code' => 'IAS',
    'description' => 'Liberal arts, sciences, creative inquiry and interdisciplinary learning.',
]]);
Route::view('/institutes/ite', 'institutes.show', ['institute' => [
    'name' => 'Institute of Teacher Education',
    'code' => 'ITE',
    'description' => 'Teacher training, education practice and future school leadership.',
]]);
Route::view('/institutes/ihtm', 'institutes.show', ['institute' => [
    'name' => 'Institute of Hospitality and Tourism Management',
    'code' => 'IHTM',
    'description' => 'Hospitality, tourism, service leadership and industry experiences.',
]]);
Route::view('/institutes/jpia', 'institutes.show', ['institute' => [
    'name' => 'Junior Philippine Institute of Accountants',
    'code' => 'JPIA',
    'description' => 'Student organization for accounting education, professional development and leadership.',
]]);

Route::view('/profile', 'profile.index')->name('profile');
Route::view('/settings', 'profile.settings')->name('settings');
