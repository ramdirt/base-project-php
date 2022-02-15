<header
  class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container">
  <a href="./" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    Project
  </a>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-start mb-md-0">
    <li><a href="./" class="nav-link px-2 link-secondary">Home</a></li>
    <li><a href="./" class="nav-link px-2 link-secondary">List</a></li>
    <li><a href="./" class="nav-link px-2 link-secondary">About</a></li>
    <li><a href="./blog" class="nav-link px-2 link-secondary">Blog</a></li>
  </ul>


  <div class="col-md-5 text-end">
    <?php if (empty($_SESSION['user'])): ?>
    <a href="./login" class="btn btn-outline-primary me-2">Login</a>
    <a href="./signup" class="btn btn-primary">Sign-up</a>
    <?php else: ?>
    <ul class="nav mb-2 justify-content-end mb-md-0">
      <li class="mx-2"><a href="./profile" class="btn btn-primary">Profile</a></li>
      <form action="auth/logout" method="post">
        <button class="btn btn-outline-primary ml-2">Logout</button>
      </form>
    </ul>

    <?php endif; ?>
  </div>
</header>