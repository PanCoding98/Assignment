<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Manage Staff Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/manage staff.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script type="text/javascript">

            function confirmation()
                {
	                answer = confirm("Do you want to delete this product?");
	                return answer;
                }

        </script>
        
       
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
                        <a href="manage staff.php"class="active" ><span class="las la-user-tie"></span>
                            <span>Staffs</span></a>
                    </li>
                    <li>    
                        <a href="manage member.php"> <span class="las la-users"></span>
                            <span>Members</span></a>
                    </li>
                    <li>
                        <a href="manage product.php" ><span class="las la-clipboard-list"></span>
                            <span>Menu</span></a>
                    </li>
                    <li>
                        <a href="manage product category.php" ><span class="las la-clipboard-list"></span>
                            <span>Categories</span></a>
                    </li>
                    <li>
                        <a href="manage order.php" ><span class="las la-shopping-cart"></span>
                            <span>Orders</span></a>
                    </li>
                    <li>
                        <a href="sale report.php" ><span class="las la-receipt"></span>
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
    
                        Staff
                    </h2>
    
                    <div class="search-wrapper">
                        <span class="las la-search"></span>
                        <input type="search" placeholder="Search here" />
                    </div>
    
                    <div class="user-wrapper">
                    <li><a href="logout.php">Logout<span class="las la-sign-out-alt "></span></a></li>
                      <a href=""><img src="images/admin image.png" width="40px" height="40px" alt=""></a>
                        <div>
                            <h4>PANG</h4>
                            <small>Admin</small>
                        </div>
                    </div>

            </header>
            <div class="modal fade" id="addadmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" >Add Staff</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="staff.php" method="POST" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                <label> Upload Images </label>
                                <input type="file" name="image" id="staff_image" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label> Staff Name </label>
                                <input type="username" name="username" class="form-control" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <label> Contact Number </label>
                                <input type="contactnumber" name="contactnumber" class="form-control" placeholder="Enter Contact Number" required>
                            </div>
                            <div class="form-group">
                                <label> State </label>
                                <input type="state" name="state" class="form-control" placeholder="Enter State" required>
                            </div>
                            <div class="form-group">
                                <label> Email </label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="register_btn" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
            <main>

            <span class="add_btn">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addadmin" style="color:white";>
                    <span class="las la-plus"></span>Add Staff
                </button>
            </span>

                <span class="view_btn">
                    <a href="#"><span>View All Staff</span><span class="las la-caret-right"></span></a>
                
                
                    <?php
                    if(isset($_SESSION['success']) && $_SESSION['success'] !='')    
                    {
                        echo '<h2 class="bg-primary text-white> '.$_SESSION['success']. '</h2>';
                        unset($_SESSION['success']);
                    }

                    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'], '</h2>';
                        unset($_SESSION['status']);
                    }
                    ?>  
                <div class="table_responsive">
                    <?php
                        $connection = mysqli_connect("localhost","root","","crud");
                        $query = "SELECT * FROM admin";
                        $query_run = mysqli_query($connection, $query);
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Staff ID</th>
                                <th>Staff Images</th>
                                <th>Staff Name</th>
                                <th>Contact Number</th>
                                <th>State</th>
                                <th>Email</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                            ?>

                                  
                            <tr>
                                <td><?php echo $row['id']; ?> </td>
                                <td><?php echo '<img src="images/'.$row['image'].' " width="100px;" height="100px;" alt="Images">'?> </td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                
                                <td>
                                    
                                    <form action="staff_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>" >
                                        <button type = "submit" name="edit_button" class="btn btn-success">EDIT</button>
                                    </form>
                                </td>
                                <td>    
                                    <form action="staff.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'];  ?>">
                                        <button type = "submit" name= "delete_button" class="btn btn-danger" onclick="return confirmation();">DELETE</button>
                                    </form>
                                    
                                </td>
                                
                            </tr>
                            <?php
                                }
                            }
                            else{
                                echo "No Record Found";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>      
        </div>
    </body>
</html>