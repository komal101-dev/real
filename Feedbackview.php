<?php 
session_start();
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
  <link href="style1.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <script src="jsb/sweetalert.min.js">
   </script>
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
  <div class="feedback" style="margin:auto;margin-top:200px;">
  <table class="f-table" border="2";>
<tr>
  <th>S.NO</th>
  <th>NAME</th>
  <th>MOB NO</th>
  <th>MESSAGE</th>
  <th>REPLY</th>
  <th>Action</th>
  </tr>
  <?php
 $sql="select * from givef";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_num_rows($res);
 if($row<1)
 {
   echo "<tr>";
   echo "<td colspan='6'>No records found</td>";
   echo "</tr>";
 }
 else{
   $slno=1;
   while($row=mysqli_fetch_array($res))
   {
 

 ?>
 <tr>
  <form method="POST">
    <input type="text" name="f_id" value="<?php echo $row['f_id']?>" hidden/>
   <td><?php echo $slno; ?></td>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['usn']; ?></td>
  <td><?php echo $row['message']; ?></td>
  <td><input type="text" name="reply"/></td>
  <td><input type="submit" name="send" value="SEND" style="margin:auto;"/></td>
  </form> 
</tr>

  <?php
  $slno=$slno+1;
   }
 }
 ?> 
      
  </table>

</div>

    <div class="footer">
         <h3>&copy; 2023. All rights reserved | Design by komal & prajyota(Mob-9019991378).</h3>
    </div>
    <div class="header">
      <p>VIEW feedback</p>
    </div>
    </body>
</html>

<?php
}
else{
  header('location:../admin.php');
}
if(isset($_POST['send']))

{
  $reply=$_POST['reply'];
  $f_id=$_POST['f_id'];
  $sql="update givef set reply='$reply' where f_id='$f_id'";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
    echo "<script>";
    echo "swal('good','success')";
    echo "</script>";
  }
  else{
    echo "<script>";
    echo "swal('good','error')";
    echo "</script>";
  }
  
}

?>