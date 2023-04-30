<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="css/sign up.css">
</head>

<body>
    <div class="sign-up">
        <form action="#" class="signform" method="POST">
            <h1>Welcome to Paradise Coffee House</h1>
            <input type="email" placeholder="Email" class="input" name="email" required>
            <input type="password" placeholder="Create a password" class="input" name="password" required>
            <input type="submit" value="Create Member" class="btn" name="signup">
            <a onclick="document.location='login.php'">Already a member? Log in now</a>
        </form>
    </div>
</body>

</html>

<?php 

    if(isset($_POST['signup']))
    {
         $email = $_POST["email"];
         $password = $_POST["password"];

         mysqli_query($connect,"INSERT INTO usertable (email, password) 
                         VALUES('$email', '$password')");	             
?>

<script>
    alert("<?php echo 'Register Successfully, Please Login Now!'; ?> ")
    window.location.href='login.php';
</script>

<?php
	
    }
 
?>