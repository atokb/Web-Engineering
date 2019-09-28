<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">King FiiIV</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a href="home.php" <?php if($currentPage == 'home') echo 'bg-info'; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Efie(Home) <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a href="assignments.php" <?php if($currentPage == 'assignments') echo 'bg-info'; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Adwuma(Assignments)</a>
      </li>
    </ul>
  </div>
</nav>