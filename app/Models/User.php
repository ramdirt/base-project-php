<?php

namespace App\Models;
use App\Services\Router;

Class User {
  
  public static function getInfo() {
    $id = $_SESSION['user']['id'];
    $user = \R::findOne('users', 'id = ?', [$id]);
    return $user;
  }

  public static function setInfo($data) {
    $id = $_SESSION['user']['id'];
    $user = \R::findOne('users', 'id = ?', [$id]);
    $user->name = $data['name'];
    $user->surname = $data['surname'];
    $user->email = $data['email'];
    $user->phone = $data['phone'];
    \R::store($user);

    Router::redirect('../profile');
  }
}