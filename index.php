<?php
$email_error="";
    require 'server.php';
    if(isset($_POST['fname']))
    {

        $sql="SELECT email from user WHERE email='".$_POST['email']."';";
        $result = $conn->query($sql);

        $a=$result->fetch_assoc();
        if($a)
        {
            $email_error="Email already exists";
        }
        else{
			$password = $_POST['pass'];
			$password_hash = md5($_POST['pass']);
            $sql="INSERT INTO user (firstname, lastname, email, password) VALUES ( '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$password_hash."');";

            if ($conn->query($sql) === FALSE)
            {
                echo "Database error". $conn->error;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<img src="iiitn.jpg" class="img-responsive img-thumbnail" style="border:0;">
		<hr class="my-4">

		<div class="container">
			<div class="row">
				<div class="col-sm jumbotron border">
                    <h1 class="display-6">New Application(New User)</h1>
                    <p class="lead">Fill in the form below:</p>
                    <p style="background-color: #ff0010;"><?php echo $email_error?></p>
                    <hr class="my-4">
					<form method="post" action="">
						<div class="form-group">
							<label for="fname">First Name*</label>
							<input type="text" class="form-control" id="fname" name="fname" required>
						</div>
						<div class="form-group">
							<label for="lname">Last Name*</label>
							<input type="text" class="form-control" id="lname" name="lname" required>
						</div>
						<div class="form-group">
							<label for="email">Email Address*</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>

                        <div class="form-group">
                            <label for="pass">Password*</label>
                            <input type="password" class="form-control" id="pass"  name="pass" required>
                        </div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>

				<div class="col-sm jumbotron border">
                    <h1 class="display-6">Login to our Application Portal</h1>
                    <p class="lead">Enter email id and password to log in:</p>
                    <hr class="my-4">
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="lemail">Email ID</label>
							<input type="email" class="form-control" id="lemail" name="lemail" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="lpass">Password</label>
							<input type="password" class="form-control" id="lpass" name="lpass" placeholder="Password">
						</div>
						<?php
							$class = '';
							if(isset($_GET['invalid'])) {
								if($_GET['invalid'] == True) {
									$class = 'Invalid Email-Id or Password';
								}
							}
						?>
						<p class=""><?php echo $class;?></p>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>