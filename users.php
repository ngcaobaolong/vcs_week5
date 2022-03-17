<!DOCTYPE html>
<?php
session_start();
require_once("head.html");
if ($_SESSION['username'] === NULL) {
  header("refresh:3;url=course-login.php");
	die("Log in first!");
}
require_once("lib/connection.php");
?>

<body class="bbPress">
  <?php include("header.php") ?>
  <section class="grey page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1>User list</h1>
        </div>
        <div class="col-md-6 text-right">
          <div class="bread">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">User list</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="white section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h4>User list</h4>
          </div>
        </div>
      </div>
      <hr class="invis">
      <div class="row">
        <div class="col-md-12">
          <div id="bbpress-forums">
            <ul class="bbp-forums">
              <li class="bbp-header">
               
                <ul class="forum-titles">
                  <li class="bbp-forum-info">User</li>
                  <li class="bbp-forum-freshness">Email</li>
                  <?php if ($_SESSION['is_admin']) {
                  echo '<li><a class="btn btn-primary" href="add-user.php"><i class="fa"></i>Add user</a></li>';
                } ?>
                </ul>
              </li>
              <!-- User list -->
              <?php
              $stmt = $conn->prepare("select * from users");
              $stmt->execute();
              $result = $stmt->get_result();
              while ($row = $result->fetch_assoc()) {
                $fullname = $row['fullname'];
                $username = $row['username'];
                $id = $row['id'];
                $email = $row['email'];
                $s = <<<EOD
                <li class="bbp-body">
                  <ul class="forum type-forum">
                    <li class="bbp-forum-info">
                      <img src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" alt="" class="alignleft img-thumbnail">
                      <a class="bbp-forum-title" href="/course-account.php?id=$id">$fullname</a>
                      <div class="bbp-forum-content">$username</div>
                    </li>
                    <li class="bbp-forum-freshness">
                      <a href="mailto:$email">$email</a>
                      <p class="bbp-topic-meta">
                      </p>
                    </li>
                  </ul>
                </li>
                EOD;
                echo $s;
              };

              $stmt->close();
              $conn->close();
              ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  </section>
  <?php require_once('footer.html'); ?>
  <script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
  <script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script>
  <script>
    eval(mod_pagespeed_gFRwwUbyVc);
  </script>
  <script>
    eval(mod_pagespeed_rQwXk4AOUN);
  </script>
  <script>
    eval(mod_pagespeed_U0OPgGhapl);
  </script>
  <script src="js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script>
  <script>
    eval(mod_pagespeed_6Ja02QZq$f);
  </script>
  <script>
    eval(mod_pagespeed_KxQMf5X6rF);
  </script>
</body>

<!-- forums40:16  -->

</html>