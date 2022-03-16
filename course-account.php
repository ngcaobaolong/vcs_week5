<?php
session_start();
if ($_SESSION['username'] === NULL) {
  header('Location: index.php');
  die("Login first!");
}
require_once("lib/connection.php");

function path2url($file) {
  return '/'.str_replace($_SERVER['DOCUMENT_ROOT'], '', $file);
}

$stmt = $conn->prepare("select * from users where id = ? ");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows == 1) {
  $this_row = $result->fetch_assoc();
  $this_username = $this_row['username'];
  $this_fullname = $this_row['fullname'];
  $this_email = $this_row['email'];
  $this_phone = $this_row['phone'];
}
$stmt->close();

if (isset($_POST['action']) && $_POST['action'] === "alter") {
  if (isset($_GET['id'])) {
    $stmt = $conn->prepare("select * from users where id = ? ");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $id = $_GET['id'];
      if ((strval($row['id']) !== $id) && (!$_SESSION['is_admin'])) {
        header("refresh:3;url=course-account.php?id=" . $_SESSION['id']);
        die("Not admin or not your profile! Your id is");
      }
      if (isset($_POST['username']) && $_SESSION['is_admin']) {
        $username = $_POST["username"];
        $stmt = $conn->prepare("select * from users where username = ? ");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
          header("refresh:3;url=course-account.php");
          die("Username is not available!");
        }
      } else $username = $row['username'];
      if (isset($_POST['new_password']) && ($_POST['new_password'] !== "") && isset($_POST['old_password']) && ($_POST['old_password'] !== "") && $row['password'] === $_POST['old_password']) $password = $_POST["new_password"];
      else $password = $row['password'];
      if (isset($_POST['email']) && ($_POST['email'] !== "")) $email = $_POST["email"];
      else $email = $row['email'];
      if (isset($_POST['fullname']) && $_SESSION['is_admin'] && ($_POST['fullname'] !== "")) $fullname = $_POST["fullname"];
      else $fullname = $row['fullname'];
      if (isset($_POST['phone']) && ($_POST['phone'] !== "")) $phone = $_POST["phone"];
      else $phone = $row['phone'];
      if (isset($_FILES["avatar"]) && $_FILES['avatar']['name'] !== "") {


        $filepath = $_FILES['avatar']['tmp_name'];
        $fileSize = filesize($filepath);
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $filetype = finfo_file($fileinfo, $filepath);
        if ($fileSize === 0) {
          header("refresh:3;url=course-account.php");
          die("The file is empty.");
        }
        if ($fileSize > 31457280) {
          header("refresh:3;url=course-account.php");
          die("The file is too large");
        }
        $allowedTypes = [
          'image/png' => 'png',
          'image/jpeg' => 'jpg'
        ];
        if (!in_array($filetype, array_keys($allowedTypes))) {
          header("refresh:3;url=course-account.php");
          die("File not allowed.");
        }
        $filename = basename($filepath);
        $extension = $allowedTypes[$filetype];
        $targetDirectory = __DIR__ . "/upload";
        $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;
        if (!copy($filepath, $newFilepath)) {
          header("refresh:3;url=course-account.php");
          die("Can't move file." . $newFilepath);
        }
        unlink($filepath);
        header("refresh:3;url=add-user.php");
        echo("Avatar uploaded successfully to " . path2url($newFilepath));
      }
      $stmt = $conn->prepare("UPDATE `users` SET `username` = ?, `password` = ?, `fullname` = ?, `email` = ?, `phone` = ?, `is_admin` = 0, `avatar` = ? WHERE `users`.`id` = $id");
      $stmt->bind_param("sssssis", $username, $password, $fullname, $email, $phone, path2url($newFilepath));
      $stmt->execute();
      $stmt->close();
      $conn->close();
    }
  } else {
    header("refresh:3;url=add-user.php");
    die("Id not found!");
  }
}
?>
<!DOCTYPE html>
<?php require_once("head.html") ?>

<body>
  <?php include("header.php") ?>
  <section class="grey page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1>Your account</h1>
        </div>
        <div class="col-md-6 text-right">
          <div class="bread">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li class="active">Your account</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="white section">
    <div class="container">
      <div class="row">
        <div id="course-left-sidebar" class="col-md-3">
          <div class="course-image-widget">
            <img src="upload/xstudent_06.png.pagespeed.ic.M4STWuf1XS.png" alt="" class="img-responsive">
          </div>
          <div class="course-meta">
            <p><?php echo $this_username ?></p>

          </div>
        </div>
        <div id="course-content" class="col-md-9">
          <div class="course-description">
            <h3 class="course-title">Edit Profile</h3>
            <div class="edit-profile">
              <form action="#" method="post" role="form" enctype="multipart/form-data">
                <input type="hidden" name="action" value="alter" />
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="<?php echo $this_username ?>" <?php if (!$_SESSION['is_admin']) echo "disabled" ?>>
                </div>
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="fullname" id="fullname" class="form-control" placeholder="<?php echo $this_fullname ?>" <?php if (!$_SESSION['is_admin']) echo "disabled" ?>>
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo $this_email ?>" <?php echo strval($_SESSION['id']) === $_GET['id'];
                                                                                                                            if (!$_SESSION['is_admin'] && !(strval($_SESSION['id']) === $_GET['id'])) echo "disabled" ?>>
                </div>
                <div class="form-group">
                  <label>Phone number</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="<?php echo $this_phone ?>" <?php if (!$_SESSION['is_admin'] && !(strval($_SESSION['id']) === $_GET['id'])) echo "disabled" ?>>
                </div>
                <?php
                $s = <<<EOD
                <div class="form-group">
                  <label>Old Password</label>
                  <input type="password" name="old_password" id="old_password" class="form-control" placeholder="************"
                </div>
                EOD;
                if (!$_SESSION['is_admin'] && strval($_SESSION['id']) === $_GET['id']) echo $s;
                $x = <<<EOD
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="new_password" id="new_pasword" class="form-control" placeholder="************">
                </div>
                EOD;
                if ($_SESSION['is_admin'] || (strval($_SESSION['id']) === $_GET['id'])) echo $x;
                ?>
                <div class="form-group">
                  <label>Send a message</label>
                  <textarea type="text" class="form-control" placeholder="Type your message in here"></textarea>
                </div>
                <div class="form-group">
                  <label>Upload Avatar</label>
                  <input type="file" name="avatar" class="btn btn-primary">
                </div>
                <button type="submit" class="btn btn-primary" formmethod="post">Submit Changes</button>
              </form>
            </div>
          </div>
          <hr class="invis">
          <div class="other-courses">
            <img src="images/xothers.png.pagespeed.ic.BLyi2PaMRC.png" alt="" class="">
          </div>
        </div>
      </div>
      <hr class="invis">
    </div>
  </section>
  <?php include('footer.html'); ?>
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
        </div>
        <div class="col-md-6 text-right">
          <ul class="list-inline">
            <li><a href="#">Terms of Usage</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  </div>
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

</html>