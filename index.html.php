<?php
$conn= mysqli_connect("localhost","root","","cms");
?>

<html>

<head>
  <title>CMS</title>
  <!--
Setting logo for title bar and image size should be 50X50.
-->
  <link rel="shortcut icon" href="IMAGES/logoK.jpg" type="image/x-icon">

  <!-- 
viewport to make your website look good on all devices.
width=device-width:Depending on width of the device it takes width.
initial-scale=1.0:sets the initial zoom level when the page is first loaded by the browser.
-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 
Linking Externall css file and 
media=all :Used for all media type devices.
-->
  <link href="style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <!--header-->
  <header>
    <a href="index1.html" class="logo">
      <img src="IMAGES/modify2.png" style="height:70px;width:70px;border-radius:20px;"></img>
    </a>
    <div class="navbar">
      <a class="active" href="#home"><i class="fas fa-home"></i> Home</a>
      <a href="about.php"><i class="fas fa-user"></i>  About-us</a>
      <a href="contact.php"><i class="fas fa-users"></i>  Contact-us</a>

      <div class="dropdown">
        <button class="dropbtn">Sign-In</button>
        <div class="dropdown-content">
          <a href="User.php">User Sign-In</a>
          <a href="Admin.php">Admin Sign-In</a>
        </div>
      </div>
    </div>
    <!-- <div class="header-right">
      <a>Email ID:sjpn@gmail.com<br>
      Contact No:9019991378</a>
  </div> -->
  </header>
  <!-- end of header-->

  <!--menu/navigation bar-->
  <!--end of menu/navigation bar-->
  <!--start of slider css -->

    <div class="img">
      <img src="IMAGES/fav (2).jpeg" ; />
      <div class="text1">
        <h1>GET YOUR CERTIFICATE HERE!</h1>
      </div>
    </div>
    <div class="text">
      At <b>SNJPSNMS Degree College Nidasoshi</b>,
     <p>  we are committed to providing  our students with the 
             best possible learning experience and
      ensuring that their achievements are recognized and celebrated. Our College E-Certificates Management System is
      designed to streamline the process of issuing and managing electronic certificates for our students, making it
      convenient and efficient for both students and staff.
    </p>
    <p>
      We invite all our students to explore the convenience and benefits of our College E-Certificates Management
      System. By embracing digital certificates, we aim to empower you with easy access to your accomplishments and
      facilitate a seamless transition into your professional or academic pursuits.
    </p>
    <p>
      If you have any questions or need assistance, our support team is available to help.
      Contact us at [contact information] or visit our FAQs section for more information.
    </p>
    At <b>SNJPSNMS Degree College Nidasoshi</b>, we are committed to providing our students with the best possible
    learning experience and
    ensuring that their achievements are recognized and celebrated. Our College E-Certificates Management System is
    designed to streamline the process of issuing and managing electronic certificates for our students, making it
    convenient and efficient for both students and staff.
  </p>
  <p>
    We invite all our students to explore the convenience and benefits of our College E-Certificates Management
    System. By embracing digital certificates, we aim to empower you with easy access to your accomplishments and
    facilitate a seamless transition into your professional or academic pursuits.
  </p>
  <p>
    If you have any questions or need assistance, our support team is available to help.
    Contact us at [contact information] or visit our FAQs section for more information.
  </p>
  At <b>SNJPSNMS Degree College Nidasoshi</b>, we are committed to providing our students with the best possible
  learning experience and
  ensuring that their achievements are recognized and celebrated. Our College E-Certificates Management System is
  designed to streamline the process of issuing and managing electronic certificates for our students, making it
  convenient and efficient for both students and staff.
</p>
<p>
  We invite all our students to explore the convenience and benefits of our College E-Certificates Management
  System. By embracing digital certificates, we aim to empower you with easy access to your accomplishments and
  facilitate a seamless transition into your professional or academic pursuits.
</p>
<p>
  If you have any questions or need assistance, our support team is available to help.
  Contact us at [contact information] or visit our FAQs section for more information.
</p>
    </div>
  
  <!--end of slider css -->

  <!--start of about us -->
  <section>
    <h1>About Us Page</h1>
    <p>Hii Welcome to Your college.</p>
    <p>we made easy to get your certificates.</p>
  </section>
  <!--end of about us -->
  <br /><br /><br />


  <!--start of footer -->
  <footer>
    <p>&copy; 2023. All rights reserved | Design by komal & prajyota(Mob-9019991378).</p>
  </footer>


  <!--end of footer -->
</body>

</html>