<?php 
session_start();
if(isset($_SESSION['usn']))
{
  $usn=$_SESSION['usn'];
  ?>

 
 
 <!DOCTYPE html>
 <html lang="en">
<head>
<style>

@media print{
  @page{
    size:landscape
  }
}
@media print {
body {-webkit-print-color-adjust: exact;}
}
  </style>
   <meta charset="utf-8">
   <title>TC</title>
   <link href="style1.css" type="text/css" rel="stylesheet">
   </head>
   <body>
    <style>

.certificate{
    background-color:whitesmoke;
    width: 1200px;
    height:1000px;
    margin-left:250px;
    margin-right:100px;
    border: 1px solid #0e0902;
    border-radius:2%;
    margin-top: 100px;
      
}
input[type="text"]{

    width: 800px;
    font-weight: 200%;
    text-allign:auto;
    margin-top:10px;
    float:right;
    margin-right:30px;
    font-size:20px;
   
  
}
h1{
    text-align: center;
}

p,h3,h2,div{
    text-align: center;
    font-size: large;
}
/*legend{
    border:1PX solid black;
    text-align: center;
}*/
.p1{
    float:left;
    margin-left: 270px;
    margin-top:20px;
    font-size: large;
}
.sign{
    float: right;
    margin-left: 450px;
    margin-right: 150px;
    margin-top:30px;
}   
.end{
    float: left;
    margin-left: 100px;
    margin-top:20px;
} 
.date{
    float:right;
    margin-right:250px ;
}
.no{
    float: left;
    margin-left: 250px;
    font-size: large;
}
fieldset{
    border: 2px solid black;
    margin-left: 250px;
    margin-right:200px;
    height:1500px;
    
}
.dist{
    float: left;
    margin-left: 500px;
}
.state{
    float: right;
    margin-right: 400px;
}
label{
   margin-left:30px;
   float:left;
   margin-top:10px;
   margin-bottom:10px;
   font-weight:bold;
  
  
}
img{
    height:100px;
    width:100px;
    margin-top:20px;
    margin-left:350px;
    position:absolute;
}
button{
   float:right;
   margin-right:40px;
   padding:10px;
   margin-top:10px;
   margin-bottom:30px;
   font-weight:bold;
   background-color:dodgerblue;
   font-size:20px;
   border:1px;
}
    </style>



    <?php
$usn = $_GET['usn'];

$conn = mysqli_connect("localhost","root","","cms");
$sql = "select * from student where usn='$usn'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

$usn = $row['usn'];
$studentname=$row['studentname'];
$date = date('d-m-y h:i:s');

$sql1 = "SELECT tcno,MAX(date) as max_date FROM tcissued";
$res1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($res1);

$date1 = $row1['max_date'];

$sql2 = "SELECT * FROM tcissued where date='$date1'";
$res2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($res2);

$tcn=$row2['tcno']+1;


?> 
<!--  <img src="IMAGES/logoc.png">-->
    <h2>S.N.J.P.S.N.M.S. TRUST'S </h2>
    <h1>COMPUTER APPLICATION SCIENCE & COMMERCE DEGREE COLLAGE</h1>
      <h2><span class="dist"> Dist:Belagum</span>NIDASOSHI-5912136<span class="state"> state:karanataka</span></h2>
      <p>(approved by govt. of karanataka university,dharwad)</p>
      <fieldset>
      
      <p>(Original/Duplicate)</p>
      <span class="no">T.C.NO:<?php echo $tcn; ?><br><br>ADM.NO:<?php echo $row['admno'];?></span>
      <span class="date">DATE:  <?php echo date('d-m-y');?> <br><br>REG.NO: <?php echo $row['usn'];?></span>
    <div class="certificate">
    
  <label>1:STUDENT NAME:</label><input type="text" value="<?php echo $row['studentname'];?>"><br><br>
  <label>2:MOTHERR NAME:</label><input type="text" name="mname" value="<?php echo $row['mothername'];?>"><br><br>
  <label>3:FATHER NAMME:</label><input type="text" name="fname" value="<?php echo $row['fathername'];?>"><br><br>
  <label>4:GENDER:</label><input type="text" name="gender" value="<?php echo $row['gender'];?>"><br><br>
  <label>5:NATIONALITY: </label><input type="text" name="nation" value="<?php echo $row['nationality'];?>"><br><br>
  <label>6:RIGION:</label><input type="text" name="religion" value="<?php echo $row['religion'];?>"><br><br>
  <label>7:DOB:</label><input type="text" name="dob" value="<?php echo $row['dob'];?>"><br><br>
  <label>8:DATEOFLEAVING:</labeL><input type="text" name="dol" value="<?php echo $row['dol'];?>"><br><br>
  <label>9:CLASS:</label><input type="text" name="class" value="<?php echo $row['class'];?>"><br><br>
  <label>10:BRANCHSTUDIED:</label><input type="text" name="fname" value="<?php echo $row['branch'];?>"><br><br>
  <label>11:MEDIUM:</label><input type="text" name="fname" value="<?php echo $row['medium'];?>"><br><br>
  <label>12:ATTENDANCE:</label> <input type="text" name="fname" value="<?php echo "satisfactory";?>"><br><br>
  <label>13:BOOK_DUE: </label><input type="text" name="fname" value="<?php echo $row['book_due'];?>"><br><br>
  <label>14:COLLAGE_DUE: </label><input type="text" name="fname" value="<?php echo $row['fees_due'];?>"><br><br>
  <label>15:DATEOFAPPLICATIONFOR T.C: </label><input type="text" name="fname" value="<?php echo date('d-m-y');?> "><br><br>
  <label>16:DATEOFISSUEOF T.C: </label><input type="text" name="fname" value="<?php echo date('d-m-y');?>"><br><br>
  <label>17:CONDUCT: </label><input type="text" name="fname" value="<?php echo "Good";?>"><br><br>
  <label>18:NO.AND DATE OF HIS/HER</label><br><br><label> ELIGIBILITY CERTIFICATE IS:</label><input type="text" name="fname" value="<?php echo "NO";?>"><br><br>
  <label>19:Forworded with compliment to :</label></label><input type="text"name="name"value=" SNJPSNMS"/><br><br><br><br>
</div>
    
    <div class="p1">
     <p>Note/Remaek   :Cmpleted <?php echo $row['branch'];?><?php echo $row['sem'];?><?php echo "Completed";?> </p>

   </div>
   <div class="sign">
     <p> PRINCIPAL</p>
     <div>S.N.J.P.S.N.M.S. TRUST'S</div>
      <div>COMPUTER APPLICATION SCIENCE & COMMERCE</div>
     <div>COLLAGE NIDSOSHI-5912136</div>
    </div>
    </fieldset>
    <button type="button" value="Print" onclick="printcertificate()">PRINT</button>
    </body>



<script>

function printcertificate()
{
  
    window.print();
    
}
 </script>
</html>
 <?php
}
else{
  header('location:../admin.php');
}

$sql = "insert into tcissued values('','$tcn','$usn','$studentname','$date')";
$res = mysqli_query($conn,$sql);
?>