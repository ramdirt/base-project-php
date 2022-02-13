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
      <h2>Sign up</h2>
      <form class="col-sm-12 col-md-8 col-lg-6" method="post" action="auth/signup" enctype="multipart/form-data">

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Surname</label>
          <input type="text" name="surname" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Avatar</label>
          <input type="file" name="avatar" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="phone" name="phone" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Password confirm</label>
          <input type="password" name="password_confirm" class="form-control">
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" >
          <label class="form-check-label">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </main>
  </div>
</body>

</html>