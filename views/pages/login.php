<?php
use App\Services\Page;
?>
<!DOCTYPE html>
<html lang="en">
<?php Page::part('head'); ?>
<body>
  <div class="container">
    <?php Page::part('navbar'); ?>
    <main>
      <h2>Login</h2>
      <form class="col-5" method="post" action="auth/login">

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </main>
  </div>
</body>

</html>