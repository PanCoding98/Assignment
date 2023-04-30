<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Admin Dashboard Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/admin dashboard.css">
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
                <a href="admin dashboard.php" class="active"> <span  class="las la-igloo"></span>
                     <span>Dashboard</span></a>
            </li>
            <li>
                <a href="manage staff.php" ><span class="las la-user-tie"></span>
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
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>

                    Dashboard
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

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>Member

                        <?php
                            require 'dbconfig.php';

                            $query = "SELECT id FROM member ORDER BY id ";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<h1> '.$row. ' </h1>';
                        ?>
                        
                        
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>Menu
                        <?php
                            require 'dbconfig.php';

                            $query = "SELECT number FROM product ORDER BY number ";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<h1> '.$row. ' </h1>';
                        ?>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>Order
                        <?php
                            require 'dbconfig.php';

                            $query = "SELECT id FROM product_order ORDER BY id ";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<h1> '.$row. ' </h1>';
                        ?>
                       
                    </div>
                    <div>
                        <span class="las la-shopping-cart"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>RM 20++</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>  
            </div>

            <div class="recent-grid">
                <div class="Orders">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Orders</h3>
                            <span class="action_btn">
                                <a href="manage order.php"><span>View All <span class="las la-arrow-right"></span>
                                </a>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"></div>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Customer's  Name</td>
                                        <td>Price</td>
                                        <td>Orders</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kuan</td>
                                        <td>RM 8</td>
                                        <td>Espresso</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>Goh</td>
                                        <td>RM 12</td>
                                        <td>Donut</td>
                                        <td>In Progress</td>
                                    </tr>
                                    <tr>
                                        <td>Chong</td>
                                        <td>RM 10</td>
                                        <td>Mocca</td>
                                        <td>In Progress</td>
                                    </tr>
                                    <tr>
                                        <td>Charles</td>
                                        <td>RM 14</td>
                                        <td>Layer Cake</td>
                                        <td>Completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Members</h3>
                            <span class="action_btn">
                                <a href="manage member.php"><span>View All <span class="las la-arrow-right"></span>
                                </a>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                <img src="images/customer image.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Kuan</h4>
                                    <small>MY</small>
                                </div>
                            </div>
                            <div class="contact">
                           <span class="las la-user-circle"></span>
                           <span class="las la-comment"></span>
                           <span class="las la-phone"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                        <img src="images/customer image.jpg" width="40px" height="40px" alt="">
                        <div>
                            <h4>Goh</h4>
                            <small>MY</small>
                        </div>
                    </div>
                    <div class="contact">
                   <span class="las la-user-circle"></span>
                   <span class="las la-comment"></span>
                   <span class="las la-phone"></span>
                </div>
            </div>
            <div class="customer">
                <div class="info">
                <img src="images/customer image.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Chong</h4>
                    <small>MY</small>
                </div>
            </div>
            <div class="contact">
           <span class="las la-user-circle"></span>
           <span class="las la-comment"></span>
           <span class="las la-phone"></span>
        </div>
    </div>
    <div class="customer">
        <div class="info">
        <img src="images/customer image.jpg" width="40px" height="40px" alt="">
        <div>
            <h4>Charles</h4>
            <small>MY</small>
        </div>
    </div>
    <div class="contact">
   <span class="las la-user-circle"></span>
   <span class="las la-comment"></span>
   <span class="las la-phone"></span>
</div>
</div>
    
                </div>
            </div>
        </main>
    </div>

</body>
</html>