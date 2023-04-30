<?php
session_start();
$connection = mysqli_connect("localhost","root","","crud");

if(isset($_POST['savebtn']))
{
    $pname = $_POST['productname'];
    $price = $_POST['price'];

    $query = "INSERT INTO product_order(name,price) VALUES ('$pname','$price')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Order Added";
        header("Location: manage order.php");
    }
    else
    {
        $_SESSION['status'] = "Order Not Added";
        header("Location: manage order.php");
    }

}

if(isset($_POST['update_btn']))
{
    $edit_product_image = $_FILES["image"]['name'];
    $number = $_POST['edit_id'];
    $name = $_POST['edit_productname'];
    $price = $_POST['edit_price'];
   
    $query = "UPDATE product_order SET name='$name', price='$price' WHERE id=$number ";
    $query_run = mysqli_query($connection, $query);
   
    if($query_run)
    {
        $_SESSION['success'] = "Order Added";
        header("Location: manage order.php");
    }
    else
    {
        $_SESSION['status'] = "Order Not Added";
        header("Location: manage order.php");
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM product_order WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header("Location: manage order.php");
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header("Location: manage order.php");
    }
}

?>