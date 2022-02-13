<?php

use App\Services\Router;
use App\Controllers\Auth;

Router::page('/login', 'login');
Router::page('/signup', 'signup');
Router::page('/', 'home');
Router::page('/profile', 'profile');

Router::post('/auth/signup', Auth::class, 'signup', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::post('/auth/logout', Auth::class, 'logout');

Router::enable();