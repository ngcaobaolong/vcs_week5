<header class="header">
  <div class="container">
    <div class="hovermenu ttmenu">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown ttmenu-half"><a href="/index.php">Home</a></li>
            <li><a href="users.php">User list</a></li>
            <li><a href="course-quiz.php">Quiz</a></li>
            <li><a href="course-homework.php">Homework</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['username'] === NULL) {
              echo '<li><a class="btn btn-primary" href="course-login.php"><i class="fa fa-sign-in"></i>Login/Register</a></li>';
            } else {
              echo '<li><a class="btn btn-primary" href="course-account.php?id=' . $_SESSION['id'] . '"><i class="fa"></i>Hello, ' . $_SESSION['username'] . '</a></li>';
              echo '<li><a class="btn btn-primary" href="logout.php"><i class="fa"></i>Logout</a></li>';
            } ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</header>