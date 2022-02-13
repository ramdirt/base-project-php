<?php


namespace App\Controllers;

use App\Services\Router;

class Auth {

  public function login($data) {
    $email = $data["email"];
    $password = $data["password"];

    $user = \R::findOne('users', 'email = ?', [$email]);

    if (!$user) {
      die('User not found');
    }

    if (password_verify($password, $user->password)) {
      session_start();
      $_SESSION['user'] = [
        "id" => $user->id,
        "group" => $user->group,
      ];

      Router::redirect('../profile');
    }
  }

  public function logout() {
    unset($_SESSION['user']);
    Router::redirect('../login');
  }

  public function signup($data, $files) {
    $name = $data['name'];
    $surname = $data['surname'];
    $avatar = $files['avatar'];
    $email = $data['email'];
    $phone = $data['phone'];
    $password = $data['password'];
    $password_confirm = $data['password_confirm'];

    if ($password !== $password_confirm) {
      Router::error(500);
      die();
    }


    $files_name = time() . '_' . $avatar['name'];
    $path = "uploads/avatars/" . $files_name;
    if(move_uploaded_file($avatar['tmp_name'], $path)) {
      $user = \R::dispense('users');
      $user->name = $name;
      $user->surname = $surname;
      $user->email = $email;
      $user->phone = $phone;
      $user->group = 1;
      $user->avatar = '/' . $files_name;
      $user->password = password_hash($password, PASSWORD_DEFAULT);
      \R::store($user);
      Router::redirect('../login');

    } else {
      Router::error(500);
    }
  }
}