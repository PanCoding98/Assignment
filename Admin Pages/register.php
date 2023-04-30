<?php

include 'connection.php';

error_reporting(0);

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password == $cpassword)
    {
        $sql="SELECT * FROM admintable WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        if(!$result -> num_rows > 0){
          $sql="INSERT INTO admintable (username,email,password) VALUES('$username','$email','$password')";
              $result= mysqli_query($conn,$sql);
               if($result){
                echo"<script>alert('Wow! User Registration Successfully.'); window.location.href='index.php';</script>";
                 $username="";
                 $email="";
                 $_POST['password']="";
                 $_POST['cpassword']="";  
              }else{
                  echo"<script>alert('Woops! Something wrong went.')</script>";
               }
               
        } else{ 
          echo"<script>alert('Woops! Email Already Exits.')</script>";
       }
         
        
    }else{
        echo"<script>alert('Password Not Matched.')</script>";
        }   
               
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Register Page</title>
        <link rel="stylesheet" href="css/register.css">
    </head>

    <body>
         

        <div class="container">
            <form action="" method="POST" class="login-email">
                 <h1>Register</h1>

                 <div class="txt_field">
                 <input type="text"  name="username"  value="<?php echo $username; ?>" required>
                 <span></span>
                 <label>Username</label>
                 </div>
                
                 <div class="txt_field">
                    <input type="email"  name="email"  value="<?php echo $email; ?>" required>
                    <span></span>
                    <label>Email</label>
                 </div>

                 <div class="txt_field">
                 <input type="password" name="password"  value="<?php echo $_POST['password']; ?>" required>
                 <span></span>
                 <label>Password</label>
                 </div>

                 <div class="txt_field">
                 <input type="password" name="cpassword"  value="<?php echo $_POST['cpassword']; ?>" required>
                 <span></span>
                 <label>Confirm Password</label>
                 </div>

                 <input type="submit"  name="submit"value="Register">
                 <div class="signup_link">An admin?<a href="index.php"> Login Here</a>
                 </div>
            </form>
        </div>
    </body>
</html>
