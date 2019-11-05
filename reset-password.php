<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: login.php");
    exit;
}
// Include config file
require_once "conn.php";
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$new_password = $confirm_password = $newpassword = "";
$new_password_err = $confirm_password_err = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }
    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
     if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password.";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Password must have atleast 6 characters.";
    } //elseif (empty($new_password_err) ) {
        //$new_password_err = "Please enter another password.";} 
    else {
        $new_password = trim($_POST["new_password"]);
    }
    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }
    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT no, username, password FROM users WHERE username = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($new_password, $hashed_password)) {
                            // Password is correct, so start a new session
          
                            // Store data in session variables
                            $new_password_err = "Input another password.";
                            // Redirect user to welcome page
                            header("location: reset-password.php");
                        } else {
	    // Check input errors before updating the database
    if (empty($new_password_err) && empty($confirm_password_err)) {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE no = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
                            // Display an error message if password is not valid
                            header("location: reset-password.php");
                        }
                    }
	} else {
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
	} else {
	        echo "Oops! Something went wrong. Please try again later.";
            	}
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SmartFX</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="fonts/icomoon/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		<link rel="stylesheet" href="css/aos.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="css/style.css">
		
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
		<div class="site-wrap" id="home-section">
			<div class="site-mobile-menu site-navbar-target">
				<div class="site-mobile-menu-header">
					<div class="site-mobile-menu-close mt-3">
						<span class="icon-close2 js-menu-toggle"></span>
					</div>
				</div>
				<div class="site-mobile-menu-body"></div>
			</div>
			<header class="site-navbar site-navbar-target" role="banner">
				<div class="container">
					<div class="row align-items-center position-relative">
						<div class="col-3 ">
							<div class="site-logo">
								<a href="index.php">SmartFX</a>
							</div>
						</div>
						<div class="col-9  text-right">
							<span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
						</div>
					</div>
				</div>
			</header>
			<div class="ftco-blocks-cover-1">
				<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
					<div class="container">
						<div class="row align-items-center justify-content-center text-center">
							<div class="col-md-7">
<center>
    <div class="wrapper">
        <h2 style="color: white;">Login</h2>
        <p>Please fill in your credentials to login.</p></br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label style="float: left;">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label style="float: left;">Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label style="float: left;">New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label style="float: left;">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p style="float: left;">Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
    </center>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</body>
</html>
