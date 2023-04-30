<?php
session_start();
$connection = mysqli_connect("localhost","root","","crud");

/*manage staff*/
if(isset($_POST['register_btn']))
{
    $username = $_POST['username'];
    $image = $_FILES["image"]['name'];
    $phone = $_POST['contactnumber'];
    $state = $_POST['state'];
    $email = $_POST['email'];

    $query = "INSERT INTO admin (image,name,phone,state,email) VALUES ('$image','$username','$phone','$state','$email')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Member Profile Added";
        header("Location: manage staff.php");
    }
    else
    {
        $_SESSION['status'] = "Member Profile Not Added";
        header("Location: manage staff.php");
    }

}

if(isset($_POST['update_button']))
{
    $id = $_POST['edit_id'];
    $edit_staff_image = $_FILES["image"]['name'];
    $username = $_POST['edit_staffname'];
    $phone = $_POST['edit_contactnumber'];
    $state = $_POST['edit_state'];
    $email = $_POST['edit_email'];
    
    $query = "UPDATE admin SET image='$edit_staff_image' , name='$username', phone='$phone', state='$state', email='$email' WHERE id=$id ";
    $query_run = mysqli_query($connection, $query);
   
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: manage staff.php'); 
        
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: manage staff.php');
        
    }
}

if(isset($_POST['delete_button']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header("Location: manage staff.php");
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header("Location: manage staff.php");
    }
}

?>