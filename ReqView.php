<?php 
session_start();
ob_start();
$conn= mysqli_connect("localhost","root","","cms");
if(isset($_SESSION['username']))
{
  $username=$_SESSION['username'];
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
  <script src="jsb/sweetalert.min.js"></script>
  <link href="style1.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  </head>
  <body>
    <div class="side-bar">
    <div class="profile">
    <img src="IMAGES/prajyota3.jpg" style="height: 100px;width:100px;border-radius:50%;"  />
      <span style="font-size: larger;color: antiquewhite;text-align: center; margin-left:40px;margin-bottom: 20px;"><?php echo $username; ?></span>
      
    </div>
    <hr style="height: 10px;background-color:rgb(183, 180, 180);margin-top: 30px;margin-bottom: 0px;">
    <div class="item"><a href="db.php"><i class="fas fa-home"></i>&nbsp;Home</a></div> 
    <div class="item"><a class="dropdown-toggle"><i class="fas fa-user"></i>&nbsp;Student <i style="float:right;"class="fas fa-chevron-down"></i></a>
       <ul class="dropdown">
        <li><a class="item" href="stdAdd.php" style="padding-top: 0%;">add</li></a>
         <li><a class="item" href="stdView.php" style="padding-top: 3px;">view</li> </a>  
         <li><a class="item" href="query.php" style="padding-top: 3px;">view Query</li> </a>
    </ul>
  </div>
    <div class="item"><a class="dropdown-toggle"><i class="fas fa-graduation-cap"></i>Certificate <i style="float:right;"class="fas fa-chevron-down"></i></a>
      <ul class="dropdown">
        <li><a class="item1"  href="CertAdd.php" style="padding-top: 0%;">Issued Certificates</li></a>
         <li><a class="item1"href="ViewCt.php" style="padding-top: 3px;">view certificate</li></a>   
    </ul>
    
    </div>
    <div class="item"><a class="dropdown-toggle"><i class="fas fa-user-check"></i>&nbsp;Request <i style="float:right;"class="fas fa-chevron-down"></i></a>
    <ul class="dropdown">
      <li><a class="item1" href="ReqView.php" style="padding-top: 0%;">view</li></a>
         
  </ul></div>
    <div class="item"><a class="dropdown-toggle"><i class="fas fa-address-card"></i>&nbsp;Feedback <i style="float:right;"class="fas fa-chevron-down"></i></a>
    <ul class="dropdown">
    
       <li><a class="item1" href="Feedbackview.php" style="padding-top: 0px;">view</li></a>   
  </ul></div>
  <div class="item"><a href="changepass.php"><i class="fas fa-key"></i>&nbsp;Chage &nbsp;&nbsp;&nbsp;&nbsp;password</a></div>

  <div class="item"><a href="../logout.php"><i class="fas fa-home"></i>&nbsp;Logout</a></div>
    </div>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"/></script>
	
	<script>
	$(document).ready(function() 
	{
            $('.dropdown-toggle').click(function() 
            { 
                $(this).next('.dropdown').slideToggle();
           });
       });
	
	</script>
<!--REQUEST VIEW TABLE STARTS HERE-->
<table class="req" border="1">
  <tr>
    <th>S.N</th>
    <th>USN NO</th>
    <th>certificate type</th>
     <th>STUDENT NAME</th>
    <th>FATHER NAME</th>
    <th>MOTHER NAME</th>
    <th>DOB</th>
    <th>DOA</th>
    <th>DOL</th>

    <th>CLASS</th>
    <th>BRANCH</th>


    <th>VERIFY</th>
 
    <th>STATUS</th>
  </tr>
  <?php
 $sql="select * from req";
 $res=mysqli_query($conn,$sql);
 $rows=mysqli_num_rows($res);
 if($rows<1)
 {
   echo "<tr>";
   echo "<td colspan='13'>No records found</td>";
   echo "</tr>";
 }
 else
 {
   $slno=1;
   while($row=mysqli_fetch_array($res))
   {
 

 ?>
  <tr style="height:10px;">
  <form method="POST">
    <input type="hidden" name="req_id" value="<?php echo $row['req_id']?>"  />
    <input type="hidden" name="usn" value="<?php echo $row['usn']?>" />
    
      <td><?php echo $slno; ?></td>
      <td><?php echo $row['usn']; ?></td>
      <td><?php echo $row['certificatetype']; ?></td>
      <td><?php echo $row['studentname']; ?></td>
     <td><?php echo $row['fathername']; ?></td>
     <td><?php echo $row['mothername']; ?></td>
     <td><?php echo $row['dob']; ?></td>
     <td><?php echo $row['doa']; ?></td>
     <td><?php echo $row['dol']; ?></td>
     <td><?php echo $row['class']; ?></td>
     <td><?php echo $row['branch']; ?></td>
     <td><input type="submit" name="verify" value="VERIFY" style="margin:auto;"/></td>
    
     <td><?php echo $row['verify_status']; ?></td>
     </form>
     </tr>
     
      <?php
  $slno=$slno+1;
   }
 }
 ?> 
      </table >


    <div class="footer">
         <h3>&copy; 2023. All rights reserved | Design by komal & prajyota(Mob-9019991378).</h3>
    </div>
    <div class="header">
      <p> REQUEST VIEW </p>
    </div>
    </body>
</html>

<?php
}
else{
  header('location:../admin.php');
}
?>
<?php
if(isset($_POST['verify']))

{
  
  $req_id=$_POST['req_id'];
  $usn=$_POST['usn'];
  $sql="update req set verify_status='Verified' where req_id='$req_id'";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
    echo "<script>";
    echo "swal('good','success')";
    echo "</script>";
    header('Refresh:1');
  }
  else{
    echo "<script>";
    echo "swal('good','error')";
    echo "</script>";
  }
  
}

?>