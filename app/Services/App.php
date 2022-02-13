<?php

namespace App\Services;

class App {
  public static function start() {
    self::libs();
    self::db();
  }

  public static function libs() {
    $config = require_once "config/app.php";
    foreach ($config['libs'] as $lib) {
      require_once "libs/" . $lib . ".php";
    }
  }

  public static function db() {
    $config = require_once "config/db.php";

    if($config['enable']) {

      \R::setup( 'mysql:host=localhost;dbname=base_project', 'root', '' ); //for both mysql or mariaDB

      if (!\R::testConnection()) {
        die ('Error database connect');
      }

    }
  }
}