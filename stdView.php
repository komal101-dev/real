<?php 
ob_start();
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



<!--STUDENT VIEW STARTS HERE-->
<table class="std" border="1">
  <tr>
    <th>USN NO</th>
    <th>STUDENT NAME</th>
    <th>MOTHER NAME</th>
    <th>FATHER NAME</th>
    <th>GENDER</th>
    <th>NATIONALITY</th>
    <th>RELIGION</th>
    <th>DOB</th>
    <th>ADMISSION DATE</th>
    <th>DATE OF LEAVE</th>
    <th>CLASS</th>
    <th>BRANCH</th>
    <th>MEDIUM</th>
    <th>book_due</th>
    <th>fees_due</th>
    <th  colspan="2">ACTION</th>
  </tr>
  <?php
      $sql="select * from student";
      $res=mysqli_query($conn,$sql);
      $rows=mysqli_num_rows($res);
    
        if($rows<1)
   {
     echo "<tr>";
     echo "<td colspan='6'>No records found</td>";
     echo "</tr>";
   }
   else
   {
        while($row=mysqli_fetch_array($res))
        {
           $usn = $row['usn'];
      ?>
     
  
  <tr>
    <form method="POST">
    <input type="text" name="usn" value="<?php echo $row['usn'];?>" hidden>
    <td><?php echo $row['usn'];?></td>
    <td><?php echo $row['studentname'];?></td>
    <td><?php echo $row['mothername'];?></td>
    <td><?php echo $row['fathername'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['nationality'];?></td>
    <td><?php echo $row['religion'];?></td>
    <td><?php echo $row['dob'];?></td>
    <td><?php echo $row['doa'];?></td>
    <td><?php echo $row['dol'];?></td>
    <td><?php echo $row['class'];?></td>
    <td><?php echo $row['branch'];?></td>
    <td><?php echo $row['medium'];?></td>
    <td><input type="text" name="book_due" value="<?php echo $row['book_due'];?>"></td>
    <td><input type="text" name="fees_due" value="<?php echo $row['fees_due'];?>"></td>
    <td><input type="submit" name="update" value="Update" style="margin:auto;" ></a></td>
    <td><input  type="submit" name="delete" value="delete" style="margin:auto;"/></td>
        </form>
        <?php
        }
      }
  
  
  
      
      if(isset($_POST['update']))
      {
         $usn = $_POST['usn'];
         $book_due=$_POST['book_due'];
         $fees_due=$_POST['fees_due'];
  
         $sql = "update student set book_due='$book_due',fees_due='$fees_due' where usn='$usn'";
        $res = mysqli_query($conn,$sql);
        if($res)
        {
            echo "<script>";
            echo "swal('Student record updated','success');";
            echo "</script>";
           header('Refresh:1');
  
        }
        else{
          echo "<script>";
            echo "swal('Student record not updated','error');";
            echo "</script>";
        }
  
      }
      if(isset($_POST['delete']))
      {
         $usn = $_POST['usn'];
         $sql = "delete from givef  where usn='$usn'";
         $res = mysqli_query($conn,$sql);
         $sql = "delete from req where usn='$usn'";
         $res = mysqli_query($conn,$sql);
         
  
         $sql = "delete from student  where usn='$usn'";
        $res = mysqli_query($conn,$sql);
        if($res)
        {
            echo "<script>";
            echo "swal('Student record deleted','success');";
            echo "</script>";
           header('Refresh:4');
  
        }
        else{
          echo "<script>";
            echo "swal('Student record not deleted','error');";
            echo "</script>";
        }
  
      }
  
  
  
  
  
  
       if(isset($_POST['delete']))
       {
        
        $usn=$_POST['usn'];
  
           $sql="delete from student  where usn='$usn'";
          $res= mysqli_query($conn,$sql);
  
  
       }
       ?>
  
      
         
  
  
  </tr>
  
  <?php
       
        
  
      ?> 
  
  
  </table>


















<div class="footer">
         <h3>&copy; 2023. All rights reserved | Design by komal & prajyota(Mob-9019991378).</h3>
    </div>
    <div class="header">
    <P> STUDENTVIEW </p>
    </div>
    </body>
</html>
<?php
}
else{
  header('location:../admin.php');
}
?>
