<?php include 'conn.php';


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = md5($_POST['password']);

    
    if($sine === $email){
        echo "some thing";
        die;
    }

    $insert = "INSERT INTO users(first_name,last_name,email,mobile,password) VALUES('$first_name','$last_name','$email','$mobile ','$password')";

    $res = mysqli_query($conn,$insert);

    if($res){
            echo "Record Inserted Successfully";
    }else 
    {
        echo "Record Can't Inserted";
    }



?>