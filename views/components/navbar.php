<header
  class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <a href="./" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    Проект
  </a>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="./" class="nav-link px-2 link-secondary">Home</a></li>
  </ul>

  <?php if (empty($_SESSION['user'])): ?>
    <div class="col-md-3 text-end">
      <a href="./login" class="btn btn-outline-primary me-2">Login</a>
      <a href="./signup" class="btn btn-primary">Sign-up</a>
    </div>
  <?php else: ?>
    <div class="col-md-3 text-end">
      
      <form action="auth/logout" method="post">
        <button class="btn btn-outline-primary me-2">Logout</button>
      </form>
    </div>
  <?php endif; ?>
</header>