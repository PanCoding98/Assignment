<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Manage Member Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/manage product.css">
        <link rel="stylesheet" href="css/sidebar.css">
       
    </head>


<body>
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span> <i class="fa fa-coffee" ></i>
        </span> Paradise Coffee House </h2>

    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="admin dashboard.php" > <span  class="las la-igloo"></span>
                 <span>Dashboard</span></a>
            </li>
            <li>
                <a href="manage staff.html" ><span class="las la-user-tie"></span>
                <span>Staffs</span></a>
            </li>
            <li>    
                <a href="manage member.php" > <span class="las la-users"></span>
                <span>Members</span></a>
            </li>
            <li>
                <a href="manage product.php" class="active"><span class="las la-clipboard-list"></span>
                <span>Menu</span></a>
            </li>
            <li>
                <a href="manage product category.html" ><span class="las la-clipboard-list"></span>
                <span>Categories</span></a>
            </li>
            <li>
                <a href="manage order.html" ><span class="las la-shopping-cart"></span>
                <span>Orders</span></a>
            </li>
            <li>
                <a href="sale report.html" ><span class="las la-receipt"></span>
                <span>Sale Reports</span></a>
            </li>
        </ul>
    </div>
</div>   
<div class="main-content">
    <header>
        <h2>
            <label for="">
                <span class="las la-bars"></span>
            </label>

            Product
        </h2>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here" />
        </div>

        <div class="user-wrapper">
            <a href=""><img src="images/admin image.png" width="40px" height="40px" alt=""></a>
        <div>
            <h4>PANG</h4>
            <small>Admin</small>
            </div>
         </div>
    </header>

    <main>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDIT PRODUCT</h6>
            </div>
        
            <div class="card-body">
            <?php
            session_start();
            $connection = mysqli_connect("localhost","root","","crud");

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_number'];
    
                $query = "SELECT * FROM product WHERE number = '$id'";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                <form action="product.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="edit_number" value="<?php echo $row['number'] ?>" >
                    
                    <div class="form-group">
                        <label> Product image </label><br>
                        <input type="file" name="image" id="product_image" value="<?php echo $row["image"] ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label> Product Name </label><br>
                        <input type="text" name="edit_productname" value="<?php echo $row["name"] ?>" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label> Price </label><br>
                        <input type="text" name="edit_price" value="<?php echo $row["price"] ?>" class="form-control" placeholder="Enter Price">
                    </div>
                    
                    <a href="manage product.php" class="btn btn-danger"> CANCEL </a>
                    <button type="submit" name="update_btn" class="btn btn-primary"> Update </button>
                </form>  
                <?php
                }
            }
            ?>
            </div>

        </div>
    </main>    

</div>

</body>
</html>