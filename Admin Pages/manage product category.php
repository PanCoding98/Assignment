<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Manage Product Category Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/manage product category.css">
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
                    <a href="manage product category.php" class="active"><span class="las la-clipboard-list"></span>
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

                    Category
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

                <span class="add_btn">
                    <a href="#"><span class="las la-plus"></span>
                        <span>Add Category</span></a>

                        <span class="view_btn">
                            <a href="#"><span>View All Categories</span><span class="las la-caret-right"></span></a>
                           
                               
                            
                                   
                <div class="table_responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Class Code</th>
                                <th>Food/ Beverage</th>
                                <th>Category</th>
                                <th>Products</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                            
                        <tbody>
                            <tr>
                                <td>A</td>
                                <td>
                                    <img src="images/americano.jpg" alt="">
                                </td>
                                <td>Coffee</td>
                                <td>4</td>
                                
                                <td>
                                    <span class="action_btn">
                                        <a href="#"><span class="las la-edit"></span>
                                            <span>Edit</span></a>
                                        <a href="#"><span class="las la-edit">  
                                            <span>Delete</span></a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>B</td>
                                <td>
                                    <img src="images/black tea.jpeg" alt="">
                                </td>
                                <td>Tea</td>
                                <td>4</td>
                                
                                <td>
                                    <span class="action_btn">
                                        <a href="#"><span class="las la-edit"></span>
                                            <span>Edit</span></a>
                                        <a href="#"><span class="las la-edit">  
                                            <span>Delete</span></a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>C</td>
                                <td>
                                    <img src="images/chiffon cake.jpg" alt="">
                                </td>
                                <td>Cake</td>
                                <td>4</td>
                            
                                <td>
                                    <span class="action_btn">
                                        <a href="#"><span class="las la-edit"></span>
                                            <span>Edit</span></a>
                                        <a href="#"><span class="las la-edit">  
                                            <span>Delete</span></a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>D</td>
                                <td>
                                    <img src="images/croissant.jpg" alt="">
                                </td>
                                <td>Bread</td>
                                <td>4</td>
                            
                                <td>
                                    <span class="action_btn">
                                        <a href="#"><span class="las la-edit"></span>
                                            <span>Edit</span></a>
                                        <a href="#"><span class="las la-edit">  
                                            <span>Delete</span></a>
                                    </span>
                                </td>
                            </tr>
                           
                        </tbody>
                           
                    </table>
                </div>      
        </div>
    </body>
</html>