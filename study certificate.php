<?php 
session_start();
$conn=mysqli_connect('localhost','root','','cms');
if(isset($_SESSION['usn']))
{
  $usn=$_SESSION['usn'];
  ?>



<html>
    <head><title>Certificate</title>
  
  
  <style>

 
    </style>
  
  </head>
    <body>
    <style>


    div
    {
    height:600;
    width:964;
    border:4px;
    border-color:black;
    background-color:rgb(242, 242, 41);
    
    
    
    }
    .p1{
    text-align:center;
    display: inline-end;
    margin-top:0px;
    }


    /*.P2{
    font-weight:bold;
    line-height:25px;
    text-align:center;
    font-size:30px;
    margin-bottom:0px;
    margin-top:0px;
    
    }*/
    .p2{
      margin-left:300px;
      font-weight:bold;
      font-size:30px;
    margin-bottom:0px;
    margin-top:0px;
 
    }
    /*
    .P3{
    font-weight:bold;
    line-height:25px;
    text-align:center;
    
    font-size:30px;
    margin-top:2px;
    margin-bottom:0px;
    }*/
  
      /*.P3{
    font-weight:bold;
    line-height:25px;
    margin-left:300px;
    }*/
    .p4{
    font-size:24px;
    margin-top:20px;
    text-align:center;
    margin-bottom:0px;
    
    
    }
    .p3{
    font-size:30px;
    margin-top:0px;
    text-align:center;
    margin-bottom:0px;
    font-weight:bold;
    
    }
    .p5{
      text-align:center;
    font-size:24px;
    margin-top:0px;
    }
    .p6
    {
    text-align:left;
    margin-left:20px;
    
    }
    .p7
    {
    text-align:right;
    margin-right:20px;
    
    }
    .div2{
    width:450px;
    height:50px;
    display:inline-block;
    
    
    }
    .div3{
    width:450px;
    height:50px;
    float:right;
    
    }
    .p8{
    text-align:center;
    font-weight:bold;
    font-size:25px;
    margin-top:2px;
    margin-bottom:1px;
    
    }
    .div4{
    width:450px;
    height:50px;
    display:inline-block;
    
    
    }
    .div5{
    width:450px;
    height:50px;
    float:right;
    
  }
    .p10{
      font-weight:bold;
      text-align:right;
    }
    .bca{
    font-weight:bold;
    }
    .p11{
    margin-top:20px;
    font-size:25px;
    line-height:40px;
    margin-left:50px;
    }
    .div6{
    width:450px;
    height:50px;
    display:inline-block;
    margin-top:120px;
    
    
    }
    .div7{
    width:450px;
    height:50px;
    float:right;
    margin-top:120px;

    }
    .p13,.p14{
    
    
    }
    .p13{
      float:right;
      margin-right:60px;
      font-size:25px;
    }
    .p14{
      float:right;
      margin-right:200px;
      font-size:25px;
    }
    .p12{
      font-weight:bold;

      margin left:200px;
      margin-top:20px;
    }
    
    button{
      float:right;
      margin-top: 30px;
      margin-right:30px;
      padding-left:20px;
      padding-right:20px;
      padding-top:10px;
      padding-bottom:10px;
      font-weight:bold;
      background-color:dodgerblue;

    }
    .note{
      text-align:center;
      bottom:0px;
      
      margin-bottom:10px;
      margin-top:60px;
      
    }
    /*.sign1{
      height:100px;
      width:100px;
      margin-top:7px;
      margin-left:50px;
    }*/
    </style>
<?php

?>


   <div>
   <!--<img src="IMAGES/logoC.png" alt="LOGO">-->
    <p class="p1">Sriman Niranjan Jagadguru Pancham shri Nijalingeshwar Mahaswamigal Trust's</p>
    <p class="p2">COMPUTER APPLICATIONS,SCIENCE & COMMERCE </p>
    <p class="p3"> DEGREE COLLEGE,NIDASOSHI</p>
    <p class="p4">(Recognised by Govt. of Karnataka & approved by Rani Channamma Univercity Belagavi)</p>
    <p class="p5">Pin:591236 Tal.Hukkeri Dist.Belagavi Karnataka State :08333-278346</p>
  
    <div class="div2"><p class="p6">E_mail:sjpnbca4287new@gmail.com</p></div>
    <div class="div3"><p class="p7">Website:www.sjpndegreends.org</p></div>
    <p class="p8">STUDY CERTIFICATE</p>
    <div class="div4"><p class="P9">&nbsp; &nbsp; &nbsp; Ref.No.:NDS/DEGREE/ADM/ /</P></div>
    <div class="div5"><p class="P10" style="text-align:right;margin-right:20px;">DATE:<?php echo date('d-m-y');?></P></div>
    <p  class="p11"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that Mr./Miss<span><i><b>&nbsp;&nbsp;&nbsp;<?php echo $row['studentname'];  ?>&nbsp;&nbsp;&nbsp;</b><i></span>is/was
    a bonafide student of our <span class="bca">BCA/B.Sc/B.Com.Course </span> He/She/is/has studying/studied<span><i><b>&nbsp;&nbsp;&nbsp;<?php echo $row['branch'];  ?>&nbsp;&nbsp;&nbsp;</b><i></span>
    sem.during the year<span><i><b>&nbsp;&nbsp;&nbsp;<?php echo $date;  ?>&nbsp;&nbsp;&nbsp;</b><i></span></p>
    <p class="p12" style="margin-left:80px;font-size:20px;">He/She has good moral character & conduct</p>
    <img >
    <div class="div6"><p class="p13">Office Superientendent</p></div>
    <div class="div7"><p class="p14">principal</p></div>
    <p class="note">NOTE:This Certificate is digitally generated by College </p>
    </div>
   
    </body>



    </html>

    <?php
$usn = $row['usn'];
    
$sql = "select * from student where usn='$usn'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

$usn = $row['usn'];
$studentname=$row['studentname'];
$sql2 = "insert into bonofied values('','$usn','$studentname')";
$res2 = mysqli_query($conn,$sql2);
}
else
{
  header('location:../admin.php');
}



?>

