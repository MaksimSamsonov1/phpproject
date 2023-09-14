<nav class="py-2 bg-body-tertiary border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
          <li class="nav-item"><a href="index.php" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link link-body-emphasis px-2">Contact</a></li>
        </ul>
        <ul class="nav">
          <?php 
            if($_COOKIE['user'] == 'true'):
          ?>
          <li class="nav-item"><a href="auth.php" class="nav-link link-body-emphasis px-2">Log out</a></li>
          <?php else: ?>
          <li class="nav-item"><a href="auth.php" class="nav-link link-body-emphasis px-2">Sign up</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>