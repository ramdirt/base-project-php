<?php
use App\Models\User;
$user = User::getInfo();
?>

<h2>Change info</h2>
<form class="col-sm-12 col-md-8 col-lg-6" method="post" action="user/change">

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $user->name; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Surname</label>
    <input type="text" name="surname" class="form-control" value="<?php echo $user->surname; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="phone" name="phone" class="form-control" value="<?php echo $user->phone; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>