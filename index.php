<?php
session_start();
use App\Services\App;
use App\Services\Page;

require_once __DIR__ . '/vendor/autoload.php';
App::start();
?>
<!DOCTYPE html>
<html lang="en">
<?php Page::part('head'); ?>

<body>
  <?php Page::part('navbar'); ?>
  <main class="container">
    <?php require_once __DIR__ . '/router/routes.php';?>
  </main>
</body>

</html>