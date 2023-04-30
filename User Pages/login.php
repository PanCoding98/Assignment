<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
 
</head>

<body>
    <div class="login">
        <form action="#" class="logform" method="POST">
            <h1 class="title">Welcome to Paradise Coffee House</h1>
            <input type="email" placeholder="Email" name="email" class="input" required>
            <input type="password" placeholder="Password" name="password" class="input" required>
            <input type="submit" value="Login" name="login" class="btn">
            <a onclick="document.location='sign up.php'">Need an account? Sign up now</a>
        </form>
    </div>

</body>

</html>
<?php
    if (isset($_POST['login'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($connect,"SELECT * from usertable where email= '$email' and password = '$password'" );
        $count=mysqli_num_rows($result);

    if ($count != 0)
    {
        ?>
		    <script>
                window.location.href='member/user index.html';
		    </script>
	    <?php
    }
    
	else
	{
	
        ?>
		    <script type="text/javascript">
		    	alert("Incorrect email or password!");
                window.location.href='login.php';
		    </script>
	    <?php
	
	}

    }
 
?>