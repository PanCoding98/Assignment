<?php
session_start();
$connection = mysqli_connect("localhost","root","","crud");

/*manage member*/ 
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $phone = $_POST['contactnumber'];
    $state = $_POST['state'];
    $email = $_POST['email'];

    $query = "INSERT INTO member (username,phone,state,email) VALUES ('$username','$phone','$state','$email')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Member Profile Added";
        $_SESSION['status_code'] = "success";
        header("Location: manage member.php");
    }
    else
    {
        $_SESSION['status'] = "Member Profile Not Added";
        $_SESSION['status_code'] = "error";
        header("Location: manage member.php");
    }

}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $phone = $_POST['edit_contactnumber'];
    $state = $_POST['edit_state'];
    $email = $_POST['edit_email'];
    
    $query = "UPDATE member SET username='$username', phone='$phone', state='$state', email='$email' WHERE id=$id ";
    $query_run = mysqli_query($connection, $query);
   
    if($query_run)
    {
        $_SESSION['status'] = "Your Data Is Added";
        $_SESSION['status_code'] = "success";
        header('Location: manage member.php'); 
        
    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: manage member.php');
        
    }
}

if(isset($_POST['deletebtn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM member WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header("Location: manage member.php");
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header("Location: manage member.php");
    }
}

?>
