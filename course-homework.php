<!DOCTYPE html>
<?php
session_start();
require_once("head.html");
require_once("lib/connection.php");
function path2url($file)
{
  return '/' . str_replace($_SERVER['DOCUMENT_ROOT'], '', $file);
}
if (isset($_FILES["answer"]) && $_FILES['answer']['name'] !== "" && isset($_POST["question_id"]) && $_POST["question_id"] !== "") {
  $stmt = $conn->prepare("SELECT * FROM week5.homeworks WHERE homeworks.question_id = ?");
  $stmt->bind_param("i", $_POST["question_id"]);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows == 1) {
    $filepath = $_FILES['answer']['tmp_name'];
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
    $filename = basename($filepath);
    $extension = $allowedTypes[$filetype];
    $targetDirectory = __DIR__ . "/upload";
    $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;
    if (!copy($filepath, $newFilepath)) {
      header("refresh:3;url=course-account.php");
      die("Can't move file." . $newFilepath);
    }
    unlink($filepath);
    echo ("answer uploaded successfully to " . path2url($newFilepath));
    var_dump($_SESSION['id'], $newFilepath, $_POST['question_id']);
    $stmt = $conn->prepare("INSERT INTO week5.answers (`uploader_id`, `file_path`, `question_id`) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $_SESSION['id'], path2url($newFilepath), $_POST['question_id']);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  } else echo ("No question with that id!");
}

?>

<body>
  <?php include("header.php") ?>
  <section class="grey page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1>Homework</h1>
        </div>
        <div class="col-md-6 text-right">
          <div class="bread">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li class="active">Homework</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="white section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-6">
          <?php

          $stmt = $conn->prepare("SELECT * FROM week5.homeworks INNER JOIN week5.users ON users.id = homeworks.uploader_id");
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) {
            $homework_name = $row['homework_name'];
            $uploader = $row['username'];
            $file_url = $row['file_url'];
            $filename = basename($file_url);
            $question_id = $row['question_id'];
            $s = <<<EOD
           <div class="shop-list-desc">
            <h4><a>$homework_name</a></h4>
            <div class="shopmeta">
              <p>Uploaded by: $uploader</p>
              <a href="$file_url" download="$filename" class="btn btn-default"><i class="fa"></i>Download homework</a>
              <form method="post" role="form" enctype="multipart/form-data">
                <label>Upload Answer</label>
                <input type="hidden" name="question_id" value="$question_id" />
                <input type="file" name="answer" class="btn btn-primary">
                <button type="submit" class="btn btn-primary" formmethod="post">Submit answer</button>
              </form>
          </div> 
          EOD;
            echo $s;
            if ($_SESSION['is_admin']) {
              $stmt2 = $conn->prepare("SELECT * FROM week5.answers INNER JOIN week5.homeworks ON homeworks.question_id = answers.question_id INNER JOIN week5.users ON users.id = answers.uploader_id WHERE homeworks.question_id = $question_id");
              $stmt2->execute();
              $result2 = $stmt2->get_result();
              while ($row2 = $result2->fetch_assoc()) {
                $username = $row2['username'];
                $file_path = $row2['file_path'];
                $filename = basename($file_path);
                $x = <<<EOD
            <p>Submited answer by: $username </p><a href="$file_path" download="$filename" class="btn btn-default"></i>Download answer</a>
            EOD;
                echo $x;
              }
            }
            echo "<hr/>";
          }
          ?>
        </div>
      </div>

    </div>
  </section>
  <?php include('footer.html'); ?>
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