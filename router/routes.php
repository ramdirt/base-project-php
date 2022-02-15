<?php

use App\Services\Router;
use App\Controllers\Auth;
use App\Models\User;

Router::page('/login', 'login');
Router::page('/signup', 'signup');
Router::page('/', 'home');
Router::page('/profile', 'profile');
Router::page('/change_user', 'change_user');
Router::page('/blog', 'blog');

Router::post('/auth/signup', Auth::class, 'signup', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::post('/auth/logout', Auth::class, 'logout');
Router::post('/user/change', User::class, 'setInfo', true);

Router::enable();