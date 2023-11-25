<?php 
session_start();
ob_start();
$conn= mysqli_connect("localhost","root","","cms");

 /* if($conn)
  {
    echo"connected";
}*/
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
  <script src="jsb/sweetalert.min.js"></script>
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
        <li><a class="item" href="stdAdd.php" style="padding-top: 0%;">Add</li></a>
         <li><a class="item" href="stdView.php" style="padding-top: 3px;">View</li> </a>  
         <li><a class="item" href="query.php" style="padding-top:0px;padding-bottom:0px;">View Query</li> </a>
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
      <li><a class="item1" href="ReqView.php" style="padding-top: 0%;">View</li></a>
         
  </ul></div>
    <div class="item"><a class="dropdown-toggle"><i class="fas fa-address-card"></i>&nbsp;Feedback <i style="float:right;"class="fas fa-chevron-down"></i></a>
    <ul class="dropdown">
    
       <li><a class="item1" href="Feedbackview.php" style="padding-top: 0px;">View</li></a>   
  </ul></div>
  <div class="item"><a href="changepass.php"><i class="fas fa-key"></i>&nbsp;Chage &nbsp;&nbsp;&nbsp;&nbsp;password</a></div>

  <div class="item"><a href="../logout.php"><i class="fas fa-home"></i>&nbsp;Logout</a></div>
    </div>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	
	<script>
	$(document).ready(function() 
	{
            $('.dropdown-toggle').click(function() 
            { 
                $(this).next('.dropdown').slideToggle();
           });
       });
	
	</script>
  
  <script>
    function formValidation()
      {
        var adm = document.getElementById("adm").value;
        var usn = document.getElementById("usn").value;
        var mname = document.getElementById("mname").value;
        var sname = document.getElementById("sname").value;
        var fname = document.getElementById("fname").value;
        var nation = document.getElementById("nation").value;
        var religion = document.getElementById("religion").value;
        var mobile = document.getElementById("mobile").value;
        var dob = document.getElementById("dob").value;
        var doa = document.getElementById("doa").value;



  //validation for date of leaving      
var date = document.getElementById("dol").value;
var varDate = new Date(date); //dd-mm-YYYY

var today = new Date();
var today1 = new Date(today.toDateString());

if(varDate >= today1)
 {
//Do something..
alert("please enter valid date");
return false;
}
 //validation for date of BIRTH      
 var date = document.getElementById("dob").value;
var varDate = new Date(date); //dd-mm-YYYY

var today = new Date();
var today1 = new Date(today.toDateString());

if(varDate >= today1)
 {
//Do something..
alert("please enter valid date of birth");
return false;
}
 //validation for date of ADMISSION     
 var date = document.getElementById("doa").value;
var varDate = new Date(date); //dd-mm-YYYY

var today = new Date();
var today1 = new Date(today.toDateString());

if(varDate >= today1)
 {
//Do something..
alert("please enter valid date of admission");
return false;
}




//validation for mobile number
var mobileRegex = /^[0-9]+$/;
    if (!mobileRegex.test(mobile)) {
        alert("Enter only numbers.");
        document.myForm.mobile.focus();
		document.myForm.mobile.style.border="solid 4px red";
        return false;
    }
    else if(mobile==" " || mobile.length<10)
	{
		alert( "Please provide valid mobile number" );
        document.myForm.mobile.focus();
		document.myForm.mobile.style.border="solid 4px red";
        return false;
	}
    else {
        document.myForm.mobile.focus();
		document.myForm.mobile.style.border="none"; 
    }


		//gender validation or radio button validation
		/*var valid=false;
		
		for(var i=0; i<gender.length; i++)
		{
			if(gender[i].checked)
			{
				valid=true;
				break;
			}
		}
		if(valid==false)
		{
			alert( "Please select Gender");
            return false;
		}*/
    
		//gender validation or radio button validation
		var valid=false;
		
		for(var i=0; i<gender.length; i++)
		{
			if(gender[i].checked)
			{
				valid=true;
				break;
			}
		}
		if(valid==false)
		{
			alert( "Please select Gender");
            return false;
		}
    //gender validation or radio button validation
		var valid=false;
		
		for(var i=0; i<fees.length; i++)
		{
			if(fees[i].checked)
			{
				valid=true;
				break;
			}
		}
		if(valid==false)
		{
			alert( "Please select Fees Due");
            return false;
		}
    //book-due validation or radio button validation
		var valid=false;
		
		for(var i=0; i<book.length; i++)
		{
			if(book[i].checked)
			{
				valid=true;
				break;
			}
		}
		if(valid==false)
		{
			alert( "Please select Book Due");
            return false;
		}
        //Validation for usn
    var usnRegex = /^[A-Z][0-9]{6,20}$/;
    if (!usnRegex.test(usn)) {
        alert("USN must be 6-20 characters long and contain Capital letters.");
        document.myForm.usn.focus();
		document.myForm.usn.style.border="solid 4px red";
        return false;
    }
    else {
        document.myForm.fname.focus();
		document.myForm.fname.style.border="none"; 
    }

   // Validation for admission number
   var admRegex = /^[0-9]+$/;
    if (!admRegex.test(adm)) {
        alert("Enter valid number.");
        document.myForm.adm.focus();
		document.myForm.adm.style.border="solid 4px red";
        return false;
    }
    else if(adm==" " || adm.length<6)
	{
		alert( "Please provide valid admission number" );
        document.myForm.adm.focus();
		document.myForm.adm.style.border="solid 4px red";
        return false;
	}
    else {
        document.myForm.adm.focus();
		document.myForm.adm.style.border="none"; 
    }
    //Validation for Mother name

    var mnameRegex = /^[a-zA-Z\s]{3,20}$/;
    if (!mnameRegex.test(mname)) {
        alert("Mother name must be 3-20 characters long and contain only letters.");
        document.myForm.mname.focus();
		document.myForm.mname.style.border="solid 4px red";
        return false;
    }
    else {
        document.myForm.mname.focus();
		document.myForm.mname.style.border="none"; 
    }
    //Validation for Student name

    var snameRegex = /^[a-zA-Z\s]{3,20}$/;
    if (!snameRegex.test(sname)) {
        alert("Student name must be 3-20 characters long and contain only letters.");
        document.myForm.sname.focus();
		document.myForm.sname.style.border="solid 4px red";
        return false;
    }
    else {
        document.myForm.sname.focus();
		document.myForm.sname.style.border="none"; 
    }

    //Validation for Father name

    var fnameRegex = /^[a-zA-Z\s]{3,20}$/;
    if (!fnameRegex.test(fname)) {
        alert("Father name must be 3-20 characters long and contain only letters.");
        document.myForm.fname.focus();
		document.myForm.fname.style.border="solid 4px red";
        return false;
    }
    else {
        document.myForm.fname.focus();
		document.myForm.fname.style.border="none"; 
    }
//Validation for Nation name

var nationRegex = /^[a-zA-Z]{3,20}$/;
    if (!nationRegex.test(nation)) {
        alert(" nation must be 3-20 characters long and contain only letters.");
        document.myForm.nation.focus();
		document.myForm.nation.style.border="solid 4px red";
        return false;
    }
    else {
        document.myForm.nation.focus();
		document.myForm.nation.style.border="none"; 
    }
//Validation for Religion name

var religionRegex = /^[a-zA-Z]{3,20}$/;
    if (!religionRegex.test(religion)) {
        alert(" Religion must be 3-20 characters long and contain only letters.");
        document.myForm.religion.focus();
		document.myForm.religion.style.border="solid 4px red";
        return false;
    }
    else {
        document.myForm.religion.focus();
		document.myForm.religion.style.border="none"; 
    }
    // validation for date of birth
    // Regular expression to validate date format (YYYY-MM-DD or MM/DD/YYYY)
    var dateRegex = /^(19|20)\d\d[- /.](0[1-9]|1[0-2])[- /.](0[1-9]|[12][0-9]|3[01])$|(0[1-9]|1[0-2])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d$/;

    // Split the date into components (year, month, day)
    var dateComponents = dob.split(/[-/ ]/);
    var year = parseInt(dateComponents[0]);
    var month = parseInt(dateComponents[1]);
    var day = parseInt(dateComponents[2]);

    if (!dateRegex.test(dob)) {
        alert("Please enter a valid date of birth in the format DD/MM/YYYY.");
        document.myForm.dob.focus();
		document.myForm.dob.style.border="solid 3px red";
        return false;
    }
    /* Validate the year, month, and day
    else if (year < 1900 || year > new Date().getFullYear() || month < 1 || month > 12 || day < 1 || day > 31) {
        alert("Please enter a valid date of birth.");
        document.myForm.dob.focus();
		document.myForm.dob.style.border="solid 3px red";
        return false;
    }
    */
    else {
        document.myForm.dob.focus();
		document.myForm.dob.style.border="none"; 
    }

      }
    </script>
    <div class="footer">
         <h3>&copy; 2023. All rights reserved | Design by komal & prajyota(Mob-9019991378).</h3>
    </div>
    <div class="header">
      <p style="text-align:center;">STUDENT ADD</p>
    </div>
    <div class="Student" style="margin-left:300px;">
  <fieldset>
    <legend>STUDENT INFORMATION</legend>
    
  <div class="student1">

			<form method="POST" onsubmit="return formValidation()" name="myForm">
      <label>ADM NO</label><input type="text" name="adm" id="adm"/><br><br><br>
    
    <label>USN NO</label><input type="text" name="usn" id="usn"/><br><br><br>
    <label>STUDENT NAME</label><input type="text" name="sname" id="sname"  /><br><br><br>
    <label>MOTHER NAME</label><input type="text" name="mname"  id="mname"/><br><br><br>
    <label>FATHER NAME</label><input type="text" name="fname" id="fname"/><br><br><br>
    <label>MOBILE NO</label><input type="text" name="mobile" id="mobile" value=""></input><br><br>
    <label>GENDER</label>

    <label class="male">Male</label>
    <input type="radio" name="gender" id="gender"value="male" >
    <label class="male">Female</label>
    <input type="radio" name="gender" id="gender" value="female" /><br><br>
    <label>NATIONALITY</label><input type="text" name="nation" id="nation"/><br><br><br>
    <label>RELIGION</label><input type="text" name="religion" id="religion"/><br><br><br>
    <label>D-O-B</label><input type="date" name="dob" id="dob"/><br><br><br>
    <label>DATE OF ADMISSION</label><input type="date" name="doa" id="doa"/><br><br><br>
    
      
    </div>
   
    <div class="student2">
    
    <label>DATE OF LEAVE</label><input type="date" name="dol" id="dol"/><br><br><br>
      <label>CLASS</label><input type="text" name="class" /><br><br><br>
      <label>SEM</label><input type="text" name="sem" /><br><br><br>
      <label>BRANCH</label><input type="text" name="branch" /><br><br><br>
      <label>MEDIAM</label><input type="text" name="medium" /><br><br><br>
    <label>She/he has no book</label><br>
    <label>belongs to this college</label><br>
    <label>in his possesion</label><label class="male">YES</label>
    <input type="radio" name="book-due" value="NO" id="book" ></input><label class="male">NO</label>
    <input type="radio" name="book-due" value="YES" id="book" ></input><br><br>
    <label>no thing is owing/by</label><br>
    <label>him/her on account of</label><br>
    <label>collage dues</label><label class="male">YES</label>
    <input type="radio" name="fees-due" value="YES" id="fees"></input><label class="male">NO</label>
    <input type="radio" name="fees-due" value="NO" id="fees"></input><br><br>
    
      <input type="submit" name="add" value="ADD" style="background-color: rgb(138, 43, 226);
    float: right;
    margin-right: 30px;
    margin-top:30px;
    width:80px;
    height:30px;
    font-weight:bold;
    "/>
      <input type="reset" name="clear" value="CLEAR"    style="background-color: rgb(138, 43, 226);
    float: right;
    margin-right: 30px;
    margin-left:30px;
    margin-top:30px;
    width:80px;
    height:30px;
    font-weight:bold;"/>
      </div>
      </form>
      </fieldset>
      </div>
      <?php
if(isset($_POST['add']))
{
  $adm=$_POST['adm'];
  $usn=$_POST['usn'];
  $studentname=$_POST['sname'];
  $fathername=$_POST['fname'];
  $mothername=$_POST['mname'];
  $mobile=$_POST['mobile'];
  $gender=$_POST['gender'];
  $nation=$_POST['nation'];
  $religion=$_POST['religion'];
  $dob=$_POST['dob'];
  $doa=$_POST['doa'];
  $dol=$_POST['dol'];
  $class=$_POST['class'];
  $sem=$_POST['sem'];
  $branch=$_POST['branch'];
  $medium=$_POST['medium'];
  $book=$_POST['book-due'];
  $due=$_POST['fees-due'];

  
  $sql="insert into student  values('$adm','$usn','$studentname','$mothername','$fathername',
  '$mobile','$gender','$nation','$religion','$dob','$doa','$dol','$class',
  '$sem','$branch','$medium','$book','$due','Welcome@123')";
  $result=mysqli_query($conn,$sql);
   if($result)
   {
    echo "<script>";
    echo "swal('good','Student data inserted successfully','success');";
    echo "</script>";
   }
  else{
     echo"<script>";
     echo "swal('Sorry!!','student data not inserted','error');";
     echo "</script>";
  }

}
?>

				
 <?php
}
else{
  header('location:../admin.php');
}
?>
  </body>
</html>