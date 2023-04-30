<?php
session_start();
$connection = mysqli_connect("localhost","root","","crud");

if(isset($_POST['savebtn']))
{
    $image = $_FILES["image"]['name'];
    $pname = $_POST['productname'];
    $price = $_POST['price'];

    $query = "INSERT INTO product(image,name,price) VALUES ('$image','$pname','$price')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Product Added";
        header("Location: manage product.php");
    }
    else
    {
        $_SESSION['status'] = "Product Not Added";
        header("Location: manage product.php");
    }

}

if(isset($_POST['update_btn']))
{
    $edit_product_image = $_FILES["image"]['name'];
    $number = $_POST['edit_number'];
    $name = $_POST['edit_productname'];
    $price = $_POST['edit_price'];
   
    $query = "UPDATE product SET image='$edit_product_image' , name='$name', price='$price' WHERE number=$number ";
    $query_run = mysqli_query($connection, $query);
   
    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "Product Added";
        header("Location: manage product.php");
    }
    else
    {
        $_SESSION['status'] = "Product Not Added";
        header("Location: manage product.php");
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_number'];

    $query = "DELETE FROM product WHERE number='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header("Location: manage product.php");
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header("Location: manage product.php");
    }
}

?>