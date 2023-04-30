<?php include("../connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
    <!-- banner part -->
    <div class="banner">
        <div class="banner-text">
            <h1>Paradise Coffee House</h1>
        </div>
    </div>
    <!-- nav part -->
    <div class="nav">
        <div class="nav-text">
            <ul>
                <li><a href="user index.html" target="_blank">HOME</a></li>
                <li><a href="user menu.html" target="_blank">MENU</a></li>
                <li><a href="user recommended.html" target="_blank">RECOMMENDED</a></li>
                <li><a href="user order.html" target="_blank">ORDER</a></li>
                <li><a href="user environment.html" target="_blank">ENVIRONMENT</a></li>
                <li><a href="user contact.php" target="_blank">CONTACT</a></li>
                <li><a href="user about.html" target="_blank">ABOUT</a></li>
            </ul>
        </div>
        <div class="login" style="position: absolute; height: 40px;
        right: 1%; top: 50%; margin-top: -20px;">
            <button><a href="../index.html" target="_self">Logout</a></button>
        </div>
    </div>
    <!-- body part -->
    <div class="contact">
        <div class="contact-w">
            <h2>Contact Us</h2>
            <p>Questions, comments or thoughts? Get in touch and we will get back with you 
                as soon as possible.</p>
            <h3>PLEASE COMPLETE THE FORM BELOW</h3>
            <form action="#" method="POST">
                <label>Name * </label>
                <input type="text" class="input" name="name" required> 
                <label>Email * </label> 
                <input type="email" class="input" name="email" required>
                <label>Subject * </label>
                <input type="text" class="input" name="subject" required>
                <label>Message * </label>
                <textarea class="input area" name="message" required></textarea>
                <input class="submit" type="submit" value="SUBMIT" name="feedback">
            </form>
        </div>
    </div>
    <!-- body part -->
    <!-- footer part -->
    <div class="footer">
        <div class="footer-text">
            <div class="footer-left">
                <p><strong>CONTACT US</strong></p>
                <ul>
                    <li>+60123456789</li>
                    <li>paradise_cafe@gmail.com</li>
                </ul>
                <div class="fb">
                    <a class="bx bxl-facebook-square" id="fb-icon" href="https://web.facebook.com/" target="_blank"></a>
                </div>
                <div class="ig">
                    <a class="bx bxl-instagram" id="ig-icon" href="https://www.instagram.com/" target="_blank"></a>
                </div>
            </div>
            <div class="footer-center">
                <p><strong>OPERATION TIME</strong></p>
                <ul>
                    <li>MON - FRI: 8AM to 8PM</li>
                    <li>SAT - SUN: 8AM to 4PM</li>
                </ul>
            </div>
            <div class="footer-right">
                <p><strong>SITEMAP</strong></p>
                <ul>
                    <li>No1, Jalan Sin Chew Kee, Bukit Bintang, <br>
                        50150 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur.</li>
                </ul>
                <p><strong>LOCATION</strong></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8150680951676!2d101.70289901470463!3d3.
                1434664977110947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49dd96b24569%3A0xe8eb90b0ca1c9ec!
                2z5LiJ5bKB5ZKW5ZWh6aaG!5e0!3m2!1szh-CN!2smy!4v1646994233947!5m2!1szh-CN!2smy" 
                allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</body>

</html>

<?php 

    if(isset($_POST['feedback']))
    {
         $name = $_POST["name"];
         $email = $_POST["email"];
         $subject = $_POST["subject"];
         $message = $_POST["message"];

         mysqli_query($connect,"INSERT INTO contacttable (name, email, subject, message) 
                         VALUES('$name', '$email', '$subject', '$message')");	             
?>

<script>
    alert("<?php echo 'Your feedback has been submitted successfully, Thank you for your feedback'; ?> ")
    window.location.href='user contact.php';
</script>

<?php
	
    }
 
?>