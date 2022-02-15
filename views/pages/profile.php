<?php
use App\Services\Page;
use App\Models\User;

$user = User::getInfo();
?>
<div class="row d-flex justify-content-center">
  <div class="col-4">
    <img class="img-fluid img-thumbnail" src="./uploads/avatars/<?php echo $user->avatar; ?>" alt="">
  </div>
  <div class="col-4">
    <h2 class="fw-bold lh-1"><?php echo $user->name; ?> <?php echo $user->surname; ?></h2>
    <ul>
      <li><?php echo $user->email; ?></li>
      <li><?php echo $user->phone ?></li>
    </ul>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
      <a href="./change_user" type="button" class="btn btn-outline-secondary btn-sm px-4 me-md-2 fw-bold">Change</a>
    </div>
  </div>
</div>