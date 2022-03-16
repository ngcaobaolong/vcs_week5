<?php
session_start();
if ($_SESSION['username'] === NULL) {
	//require connection to sql database
	require_once("lib/connection.php");
	// if user attemps to login
	if ($_POST['action'] === "login") {
		if (isset($_POST['username']) && isset($_POST['password'])) {
			// get user data from post
			$username = $_POST["username"];
			$password = $_POST["password"];
			if ($username === "" || $password === "") {
				header("refresh:3;url=course-login.php");
				die("Username or password is empty!");
			} else {
				$stmt = $conn->prepare("select * from users where username = ? and password = ?");
				$stmt->bind_param("ss", $username, $password);
				$stmt->execute();
				$result = $stmt->get_result();
				if ($result->num_rows == 0) {
					header("refresh:3;url=course-login.php");
					die("Username or password mismatch!");
				} else {
					//save username to session
					$row = $result->fetch_assoc();
					$_SESSION['username'] = $username;
					$_SESSION['is_admin'] = $row['is_admin'];
					$_SESSION['fullname'] = $row['fullname'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
					header("refresh:3;url=index.php");
					die("Logged in!");
				}
				$stmt->close();
				$conn->close();
			}
		} else {
			header("refresh:3;url=course-login.php");
			die("Log in failed!");
		}
	} elseif ($_POST['action'] === "register") {
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
					header("refresh:3;url=course-login.php");
					die("Registration success, please login!");
				} else {
					header("refresh:3;url=course-login.php");
					die("Username is not available!");
				}
			}
		} else {
			header("refresh:3;url=course-login.php");
			die("Register failed!");
		}
	}
} else {
	header("refresh:3;url=index.php");
	die("Already logged in!");
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
								<div class="col-xs-6">
									<a href="#" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form id="login-form" action="#" method="post" role="form" style="display: block;">
										<input type="hidden" name="action" value="login" />
										<div class="form-group">
											<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<button type="submit" formmethod="post" class="form-control btn btn-default">Login Account</button>
												</div>
											</div>
										</div>
									</form>
									<form id="register-form" action="#" method="post" role="form" style="display: none;">
										<input type="hidden" name="action" value="register" />
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
													<button type="submit" class="form-control btn btn-default btn-block">Register an Account</button>
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