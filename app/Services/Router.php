<?php

namespace App\Services;

class Router {
  private static $list = [];

  /**
   * Метод регистрирует роут для обычной страницы
   * @param $url
   * @param $page_name
  */

  public static function post($url, $class, $method, $data = false, $files = false) {
    self::$list[] = [
      "url" => $url,
      "class" => $class,
      "method" => $method,
      "post" => true,
      "data" => $data,
      "files" => $files,
    ];
  }


  public static function page($url, $page_name) {
    self::$list[] = [
      "url" => $url,
      "page" => $page_name
    ];
  }

  public static function enable() {
      @$query = $_GET['path'];

      foreach (self::$list as $route) {
        if ($route['url'] === '/' . $query) {
          if (@$route['post'] == true && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $action = new $route['class'];
            $method = $route['method'];
            if ($route['data'] && $route['files']) {
              $action->$method($_POST, $_FILES);
            } elseif ($route['data'] && !$route['files']) {
              $action->$method($_POST);
            } else {
              $action->$method();
            }
            die();
          } else {
            require_once "views/pages/" . $route['page'] . ".php";
            die();
          }
        }
      }

      self::error(404);
  }

  public static function error($error) {
    require_once "views/errors/{$error}.php";
  }

  public static function redirect($page) {
    header('location: ' . $page);
  }

}