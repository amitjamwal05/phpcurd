<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'links.php'?>


</head>
<body>
<div class="signup-form">
    <form action="" method="post" id="userForm">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input id="email" type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
      		<div class="form-group">
            <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile" required="required">
        </div>  
		<div class="form-group">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
      

		<div class="form-group">
            <input type="submit" name="submit" id="submit" value="Register Now" 
            class="btn btn-success btn-lg btn-block">
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="#">Sign in</a></div>
</div>

    <script>
        $(document).on('submit','#userForm',function(e){
            e.preventDefault();
            var form = $(this).serialize();
            $.ajax({
                method:"POST",
                url: "insert.php",
                data: form,
                success: function(data){
                    console.log(data);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        
    </script>
   

</body>
</html>