<?php  session_start();

?>
<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'links.php'?>


</head>
<body>
<div class="signup-form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post" id="userForm">
		<h2>Login</h2>
        <div class="form-group">
        	<input id="email" type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
      

		<div class="form-group">
            <input type="submit" name="submit" id="submit" value="Login" 
            class="btn btn-success btn-lg btn-block">
        </div>
    </form>
</div>
</body>
</html>