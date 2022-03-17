<!DOCTYPE html>
<?php
session_start();
require_once("head.html");
require_once("lib/connection.php");
if ($_SESSION['username'] === NULL) {
  header("refresh:3;url=course-login.php");
  die("Log in first!");
}
function path2url($file)
{
  return '/' . str_replace($_SERVER['DOCUMENT_ROOT'], '', $file);
}
if (isset($_FILES["quiz"]) && $_FILES['quiz']['name'] !== "" && $_SESSION['is_admin'] && isset($_POST['hint']) && $_POST['hint'] !== "") {
  $filepath = $_FILES['quiz']['tmp_name'];
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
    'text/plain' => 'txt'
  ];
  if (!in_array($filetype, array_keys($allowedTypes))) {
    header("refresh:3;url=course-account.php");
    die("File not allowed.");
  }
  $filename = explode(".", $_FILES['quiz']['name'])[0];
  $extension = $allowedTypes[$filetype];
  $targetDirectory = __DIR__ . "/upload/quiz";
  $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;
  if (!copy($filepath, $newFilepath)) {
    header("refresh:3;url=course-account.php");
    die("Can't move file." . $newFilepath);
  }
  unlink($filepath);
  echo ("quiz uploaded successfully to " . path2url($newFilepath));
  $stmt = $conn->prepare("INSERT INTO week5.quiz (uploader_id, hint, hashed_answer, file_path) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("isss", $_SESSION['id'], $_POST['hint'], md5($filename), $newFilepath);
  var_dump($stmt->execute());
  $stmt->close();
}
?>

<body>
  <?php include("header.php") ?>
  <section class="grey page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1>Course Quiz Page</h1>
          <?php
          $s = <<<EOD
          <form method="post" role="form" enctype="multipart/form-data">
          <label>Upload quiz</label>
          <input type="text" name="hint"/>
            <input type="file" name="quiz" class="btn btn-primary">
            <button type="submit" class="btn btn-primary" formmethod="post">Add quiz</button>
          </form>
          EOD;
          if ($_SESSION['is_admin']) echo $s;
          ?>
        </div>
        <div class="col-md-6 text-right">
          <div class="bread">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li class="active">Course Quiz Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="white section">
    <div class="container">
      <div class="row">
        <div id="course-content" class="col-md-8">
          <div class="course-description">
            <h3 class="course-title">Quiz</h3>
            <div class="quiz-wrapper">
              <h4>Guess the Litery</h4>
              <?php
              if (isset($_POST["answer"]) && $_POST['answer'] !== "" && isset($_POST["quiz_id"]) && $_POST['quiz_id'] !== "") {
                $stmt = $conn->prepare("SELECT * FROM week5.quiz WHERE quiz.hashed_answer = ? AND quiz.id = ?");
                $stmt->bind_param("si", md5($_POST["answer"]), $_POST["quiz_id"]);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows == 1) {
                  $row = $result->fetch_assoc();
                  $myfile = fopen($row['file_path'], "r") or die("Unable to open file!");
                  $content = fread($myfile, filesize($row['file_path']));
                  fclose($myfile);
                  $s = <<<EOD
                  <div class="correct">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Correct!\n$content</strong>
                  </div>
                EOD;
                  echo $s;
                } else {
                  $s = <<<EOD
                  <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Incorrect!</strong>
                  </div>  
                EOD;
                  echo $s;
                }
                $stmt->close();
              }
              $stmt = $conn->prepare("SELECT * FROM week5.quiz");
              $stmt->execute();
              $result = $stmt->get_result();
              while ($row = $result->fetch_assoc()) {
                $hint = $row['hint'];
                $id = $row['id'];
                $s = <<<EOD
                    <h5>Hint: $hint </h5>
                    <div class="row">
                      <div class="col-md-12">
                        <form method="post" role="form" enctype="multipart/form-data">
                          <input type="hidden" name="quiz_id" value="$id" />
                          <textarea type="text" name="answer" id="answer" class="form-control" placeholder="Type your answer in here"></textarea>
                          <button type="submit" class="btn btn-primary" formmethod="post">Send answer</button>
                        </form>
                        <hr class="invis">
                      </div>
                    </div>
                    EOD;
                echo $s;
              }
              $stmt->close();
              $conn->close();
              ?>
            </div>
            <hr class="invis">
          </div>
          <hr class="invis">
        </div>
      </div>
  </section>
  <?php include('footer.html'); ?>
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

<!-- course-quiz40:10  -->

</html>