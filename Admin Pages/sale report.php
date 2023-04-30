<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sale Report Page</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sale report.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <style>
            progress
            {
              width: 1000px;
              height: 40px;
            border-radius: 0px;
            float: left;
             }
             
             body
             {
                 background-image: url(background\ image.jpg);
             }
          </style>
    </head>
    <body>

        <input type="checkbox" id="nav-toggle">
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
                    <a href="manage product category.php" ><span class="las la-clipboard-list"></span>
                        <span>Categories</span></a>
                </li>
                <li>
                    <a href="manage order.php" ><span class="las la-shopping-cart"></span>
                        <span>Orders</span></a>
                </li>
                <li>
                    <a href="sale report.php" class="active"><span class="las la-receipt"></span>
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
    
                        Sales Report
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
            <h2 style="margin-left:0px"><input type="submit" value="Monthly Sales Report(JAN 2022)"></h2>
  <div style="border: 1px solid grey;width: 1150px;height: 800px;margin: 0% auto;background-color: white;">
    
    <br>
    <br>
    <div>
        <h3 style="margin-left: 500px;">MOCCA</h3> 
        <span><progress id="file" max="100" value="1"></progress></span><div>1 cup</div> 
    </div>
    <br>
    <br>
    <div>
        <h3 style="margin-left: 500px;">GREEN TEA</h3> 
        <span><progress id="file" max="100" value="1"></progress></span><div>1 cup</div> 
    </div>
    <br>
    <br>
    <div>
        <h3 style="margin-left: 500px;">LAYER CAKE</h3>
        <span><progress id="file" max="100" value="2"></progress></span><div>2 pieces</div> 
    </div>
    <br>
    <br>
    <div>
        <h3 style="margin-left: 500px;">DONUT</h3> 
        <span><progress id="file" max="100" value="1"></progress></span><div>1 piece</div> 
    </div>
    <br>
    <br>
    
    <span><button style="margin-left: 40%;">previous month</button> </span><span><button >next month</button></span>
  </div>
  
</main>
         

                        
               
                    
        </div>
    </body>
</html>