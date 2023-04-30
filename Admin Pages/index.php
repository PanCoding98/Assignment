<?php include "connection.php"; 

session_start();
error_reporting(0);
if(isset($_SESSION['email'])){
    header("Location:welcome.php");
}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql= "SELECT *FROM admintable WHERE  AND email='$email' AND password='$password' ";
    $result= mysqli_query($conn,$sql);

    if(!$result -> num_rows > 0){
        $row= mysqli_fetch_assoc($result);
       
        $_SESSION['email']=$row['email'];
        header("Location:admin dashboard.php");
    }
    else
    {
        echo"<script>alert('Woops! Email or Password is Wrong.')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="center">
            <h1>Admin Login</h1>
            <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            <form action="login.php" method='POST'>
                 <div class="txt_field">
                 <input type="email" name="email" value="<?php echo $email; ?>" >
                 <span></span>
                 <label>Email</label>
                 </div>

                 <div class="txt_field">
                 <input type="password" name="password"  value="<?php echo $_POST['password']; ?>" >
                 <span></span>
                 <label>Password</label>
                 </div>

                 <input type="submit" name="submit" value="Login">
                 <div class="signup_link">Not an admin?<a href="register.php"> Register Here</a>
                 </div>
            </form>
        </div>
    </body>
</html>