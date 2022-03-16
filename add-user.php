<?php
session_start();
if ($_SESSION['is_admin']) {
    require_once("lib/connection.php");
    if ($_POST['action'] === "add") {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['fullname']) && isset($_POST['phone'])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $fullname = $_POST["fullname"];
            $phone = $_POST["phone"];
            
            if ($username === "" || $password === "" || $email === "" || $fullname === "" || $phone === "") {
                die("Missing information!");
            } else {
                $stmt = $conn->prepare("select * from users where username = ? ");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows == 0) {
                    $stmt = $conn->prepare("INSERT INTO `users` (`username`, `password`, `fullname`, `email`, `phone`, `is_admin`) VALUES (?, ?, ?, ?, ?, 0)");
                    $stmt->bind_param("sssss", $username, $password, $fullname, $email, $phone);
                    $stmt->execute();
                    $stmt->close();
                    $conn->close();
                    header("refresh:3;url=add-user.php");
                    die("Add user success, please login!");
                } else {
                    header("refresh:3;url=add-user.php");
                    die("Username is not available!");
                }
            }
        } else {
            header("refresh:3;url=add-user.php");
            die("Add user failed!");
        }
    }
    if ($_POST['action'] === "alter") {
        if (isset($_POST['id'])) {
            $stmt = $conn->prepare("select * from users where id = ? ");
            $stmt->bind_param("s", $_POST['id']);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $id = $_POST['id'];
                if (isset($_POST['username'])) {
                    $username = $_POST["username"];
                    $stmt = $conn->prepare("select * from users where username = ? ");
                    $stmt->bind_param("s", $username);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        header("refresh:3;url=add-user.php");
                        die("Username is not available!");
                    }
                }
                else $username = $row['username'];
                if (isset($_POST['password'])) $password = $_POST["password"];
                else $password = $row['password'];
                if (isset($_POST['email'])) $email = $_POST["email"];
                else $email = $row['email'];
                if (isset($_POST['fullname'])) $fullname = $_POST["fullname"];
                else $fullname = $row['fullname'];
                if (isset($_POST['phone'])) $phone = $_POST["phone"];
                else $phone = $row['phone'];
                if (isset($_POST['is_admin'])) $is_admin = $_POST["is_admin"];
                else $is_admin = $row['is_admin'];
                $stmt = $conn->prepare("UPDATE `users` SET `username` = ?, `password` = ?, `fullname` = ?, `email` = ?, `phone` = ?, `is_admin` = ? WHERE `users`.`id` = $id");
                $stmt->bind_param("sssssi", $username, $password, $fullname, $email, $phone, $is_admin);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
        } else {
            header("refresh:3;url=add-user.php");
            die("Id not found!");
        }
    } 
} else {
    header("refresh:3;url=index.php");
    die("Not admin!");
}

?>
<!DOCTYPE html>
<?php require_once("head.html") ?>

<body class="login">
    <div id="loader">
        <div class="loader-container">
            <img src="images/site.gif" alt="" class="loader-site">
        </div>
    </div>
    <div id="wrapper">
        <div class="container">
            <div class="row login-wrapper">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6" style= "width: 100%" >
                                    <a class="active" id="register-form-link">Add user</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="register-form" action="#" method="post" role="form">
                                        <input type="hidden" name="action" value="add" />
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="fullname" id="fullname" tabindex="1" class="form-control" placeholder="Full name" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" tabindex="2" class="form-control" placeholder="Phone number">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="form-control btn btn-default btn-block">Add an Account</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<!-- course-login40:17  -->

</html>