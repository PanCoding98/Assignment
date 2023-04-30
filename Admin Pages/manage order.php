<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
        <title>Manage Order Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/manage product.css">
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
            <h2><span> <i class="fa fa-coffee"></i>
                </span> Paradise Coffee House </h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin dashboard.php"> <span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="manage staff.php"><span class="las la-user-tie"></span>
                        <span>Staffs</span></a>
                </li>
                <li>
                    <a href="manage member.php"> <span class="las la-users"></span>
                        <span>Members</span></a>
                </li>
                <li>
                    <a href="manage product.php"><span class="las la-clipboard-list"></span>
                        <span>Menu</span></a>
                </li>
                <li>
                    <a href="manage product category.php"><span class="las la-clipboard-list"></span>
                        <span>Categories</span></a>
                </li>
                <li>
                    <a href="manage order.php" class="active"><span class="las la-shopping-cart"></span>
                        <span>Orders</span></a>
                </li>
                <li>
                    <a href="sale report.php"><span class="las la-receipt"></span>
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

                Orders
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
        <div class="modal fade" id="addorder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="order.php" method="POST" >
                        <div class="modal-body">
                            
                            <div class="form-group">
                                <label> Name </label>
                                <input type="text" name="productname" class="form-control" placeholder="Enter Product Name" required>
                            </div>
                            <div class="form-group">
                                <label> Price </label>
                                <input type="price" name="price" class="form-control" placeholder="Enter Price" required>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="savebtn" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
        <main>

        <span class="add_btn">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addorder" style="color:white";>
                    <span class="las la-plus"></span>Add Order
                </button>
            </span>

                <span class="view_btn">
                    <a href="#"><span>View All Orders</span><span class="las la-caret-right"></span></a>




                    <div class="table_responsive">
                        <?php
                            $connection = mysqli_connect("localhost","root","","crud");
                            $query = "SELECT * FROM product_order";
                            $query_run = mysqli_query($connection, $query);
                        ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Menu Number</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th colspan="2">Action</th>

                                </tr>
                            </thead>
                                <?php
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($query_run))
                                        {
                                ?>

                            <tbody>      
                                <tr>
                                    <td><?php echo $row['id']; ?> </td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                 
                                
                                    <td>
                                    
                                        <form action="order_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>" >
                                            <button type = "submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="order.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id'];  ?>">
                                            <button type = "submit" name= "delete_btn" class="btn btn-danger" onclick="return confirmation();">DELETE</button>
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
        </main>
    </div>
</body>

</html>