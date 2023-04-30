<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Manage Member Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/manage staff.css">
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
                <a href="admin dashboard.html" > <span  class="las la-igloo"></span>
                 <span>Dashboard</span></a>
            </li>
            <li>
                <a href="manage staff.php" class="active"><span class="las la-user-tie"></span>
                <span>Staffs</span></a>
            </li>
            <li>    
                <a href="manage member.html" > <span class="las la-users"></span>
                <span>Members</span></a>
            </li>
            <li>
                <a href="manage product.html" ><span class="las la-clipboard-list"></span>
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

            Member
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
                <h6 class="m-0 font-weight-bold text-primary">EDIT Admin Profile</h6>
            </div>
        
            <div class="card-body">
            <?php
            session_start();
            $connection = mysqli_connect("localhost","root","","crud");

            if(isset($_POST['edit_button']))
            {
                $id = $_POST['edit_id'];
    
                $query = "SELECT * FROM admin WHERE id = '$id'";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                <form action="staff.php" method="POST" enctype="multipart/form-data" >

                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" > 

                    <div class="form-group">
                        <label> Staff image </label><br>
                        <input type="file" name="image" id="staff_image" value="<?php echo $row["image"] ?>" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label> Staff Name </label><br>
                        <input type="text" name="edit_staffname" value="<?php echo $row["name"] ?>" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label> Contact Number </label><br>
                        <input type="text" name="edit_contactnumber" value="<?php echo $row["phone"] ?>" class="form-control" placeholder="Enter Contact Number">
                    </div>
                    <div class="form-group">
                        <label> State </label><br>
                        <input type="text" name="edit_state" value="<?php echo $row["state"] ?>" class="form-control" placeholder="Enter State">
                    </div>
                    <div class="form-group">
                        <label> Email </label><br>
                        <input type="text" name="edit_email" value="<?php echo $row["email"] ?>" class="form-control" placeholder="Enter Email">
                    </div>

                    <a href="manage staff.php" class="btn btn-danger"> CANCEL </a>
                    <button type="submit" name="update_button" class="btn btn-primary"> Update </button>
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