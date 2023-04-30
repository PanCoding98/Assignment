<?php include "connection.php"; 

if(isset($_POST['email']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data =htmlspecialchars($data);
        return $data;
    }
  
    $email=validate($_POST['email']);
    $password=validate($_POST['password']);

    if(empty($email))
    {
       header("Location:index.php? error=User Name is required ");
       exit();
    }
    else if(empty($password))
    {
     header("Location:index.php? error=password is required ");
     exit();
    } 
    else
    {
      $sql="SELECT * FROM admintable WHERE email='$email' AND password='$password'";

      $result = mysqli_query($conn, $sql);
      $count=mysqli_num_rows($result);
      if($count === 1)
      {
         $row =mysqli_fetch_assoc($result);
         if($row['email'] === $email && $row['password'] === $password) ;
         {
           $SESSION['email'] = $row['email'];
           $SESSION['username'] = $row['username'];
           $SESSION['id'] = $row['id'];
           header("Location: admin dashboard.php");
           exit();
         }
          
      }
      else
      {
         header("location: index.php?error=Incorrect User name or Password");
         exit();
      }
    }
}
else
{
    header("Location: index.php");
    exit();
}
?>
