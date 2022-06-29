<html>
<head>
<title>Student Registration Fom</title>
<style>
    
h2{
  font-family: Sans-serif; 
  font-size: 24px;         
  font-style: normal; 
  font-weight: bold; 
  color: white;
  text-align: center; 
  text-decoration: underline
}
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-image:url(./images/tk2.jpeg);
  
    
    }
table{
  
  color:white; 
  font-size: 16px; 
  font-style: normal;
  
  
  
 
  
}
table.inner{
  border: 10px
}
input[type=text], input[type=email], input[type=number]{
  width: 50%;
  padding: 6px 12px;
  margin: 5px 0;
  box-sizing: border-box;
}
input[type=submit], input[type=reset]{
  width: 15%;
  padding: 8px 12px;
  margin: 5px 0;
  box-sizing: border-box;
}

</style>
</head>
<body>
    <div class="header" id="topheader">
    <center><h2>Student Registration Form </h3></center>
    <table align="center" cellpadding = "10">
      <form action="" method="post" enctype="multipart/form-data">
    <!--------------------- First Name ------------------------------------------>
    <tr>
    <td>First Name</td>
    <td><input type="text" name="FirstName" maxlength="50" Required/>
    (Max 50 Characters Allowed)
    </td>
    </tr>
    <!------------------------ Last Name --------------------------------------->
    <tr>
    <td>Last Name</td>
    <td><input type="text" name="LastName" maxlength="50" Required/>
    (Max 50 Characters Allowed)
    </td>
    </tr>
    <!-------------------------- Email ID ------------------------------------->
    <tr>
    <td>Email ID</td>
    <td><input type="email" name="EmailID" maxlength="100" Required /></td>
    </tr>
    <!-------------------------- Mobile Number ------------------------------------->
    <tr>
    <td>Mobile Number</td>
    <td>
    <input type="text" name="MobileNumber" maxlength="10" Required  />
    (12 Digits Allowed)
    </td>
    </tr>

    <!-------------------------- password ------------------------------------->
    <tr>
      <td>Password</td>
      <td>
      <input type="Password" name="password" maxlength="20" Required  />
      </td>
      </tr>
    <!---------------------- Gender ------------------------------------->
    <tr>
    <td>Gender</td>
    <td>
    <input type="radio" name="Gender" value="Male" Required />
    Male
    <input type="radio" name="Gender" value="Female" Required />
    Female
    </td>
    </tr>
    <!--------------------------Date Of Birth----------------------------------->
    <tr>
    <td>Date of Birth(DOB)</td>
    <td>
    <input type="date" name="Date" Required />
</td>
</tr>
<!------------------------- Address ---------------------------------->
<tr>
<td>Address<br /><br /><br /></td>
<td><textarea name="Address" rows="10" cols="50" Required ></textarea></td>
</tr>
<!-------------------------- City ------------------------------------->
<tr>
    <td>City</td>
    <td><input type="text" name="City" maxlength="50" Required />
    (Max 50 Characters Allowed)
    </td>
    </tr>
    <!----- -------------------- Pin Code-------------------------------------->
    <tr>
    <td>Pin Code</td>
    <td><input type="Number" name="PinCode" maxlength="6" Required />
    (Max 6 Numbers Allowed)
    </td>
    </tr>
    <!---------------------------- State ----------------------------------->
    <tr>
    <td>State</td>
    <td><input type="text" name="State" maxlength="50" Required />
    (Max 50 Characters Allowed)
    </td>
    </tr>
    <!------------------------------ Country --------------------------------->
    <tr>
    <td>Country</td>
    <td><input type="text" name="Country" Required /></td>
    </tr>
    <!------------------------- Hobbies -------------------------------------->
    <tr>
    <td>Hobbies <br /><br /><br /></td>
    <td>
    <input type="text" name="Hobby" maxlength="50" Required  />
    (Max 50 Characters Allowed)
    </td>
    </tr>
    <!-----------------------Qualification---------------------------------------->
    <tr>
    <td>Qualification <br /><br /><br /></td>
    <td>
    <br/>
    <input type="checkbox" name="HighSchool[]" value="High School"  />
    High School(10th)<br>
    <input type="checkbox" name="HighSchool[]" value="Higher School"  />
    Higher School(12th)<br/>
    <input type="checkbox" name="HighSchool[]" value="Graduation" />
    Graduation(Bachelors)<br/>
    <input type="checkbox" name="HighSchool[]" value="Post Graduation"  />
    Post Graduation(Masters)<br/>
</td>
</tr>
<tr>
    <td>department<br /><br /><br /></td>

    <td>
    <select name="department" id="department">
  <option value="computer_science">computer science</option>
  <option value="mechanical">mechanical</option>
  <option value="chemical_engineer">chemical engineer</option>
  <option value="civil_engineering">civil engineering</option>
</select>
</td>
</tr>


<tr>
    <td>Profile<br /><br /><br /></td>
    <td><input type="file" name="profile" value="Post Graduation"  />
</td>
</tr>





<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Register"/>



</td>
</tr>
</table>
</form>
</div>
</body>
</html>        

<?php



if(isset($_POST['submit'])){
//Database connection
$servername="localhost";
$username="root";
$pass="";
$table="student_performance";
$conn=new mysqli($servername,$username,$pass,$table);
if(!$conn){
    die('connection faild:'.mysqli_connect_error());
}else{
$file=$_FILES['profile'];
$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];
if($fileerror==0){
  $destinationfile = 'uploadedimages/'.$filename;
  move_uploaded_file($filepath,$destinationfile);
}

  $Department=$_POST['department'];
  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $Email=$_POST['EmailID'];
  $password=$_POST['password'];
  $MobileNumber=$_POST['MobileNumber'];
  $Address=$_POST['Address'];
  $City=$_POST['City'];
  $Pin_Code=$_POST['PinCode'];
  $State=$_POST['State'];
  $country=$_POST['Country'];
  $Gender=$_POST['Gender'];
  $birthday=$_POST['Date'];
  $Hobby=$_POST['Hobby'];
  $brands = $_POST['HighSchool'];
  $items='';
  if(sizeof($brands)){ 
    foreach($brands as $item){
     $items=$items.$item;
 }}else{
  ?>
  <script>
    alert("select Qualification")
  </script>
  <?php
 } 
  if((strlen($FirstName)<2)){
    ?>
    <script>
      alert("intervalid Firstname")
    </script>
    <?php
  }

  elseif((strlen($LastName)<2)){
    ?>
    <script>
      alert("intervalid Lastname")
    </script>
    <?php
  }
  

  elseif((strlen($Email)<2)){
    ?>
    <script>
      alert("intervalid Email")
    </script>
    <?php
  }

  elseif((strlen($password)<2)){
    ?>
    <script>
      alert("intervalid Password")
    </script>
    <?php
  }
  
  elseif((strlen($MobileNumber)<2)){
    ?>
    <script>
      alert("intervalid Mobile no")
    </script>
    <?php
  }

  
  elseif((strlen($Address)<2)){
    ?>
    <script>
      alert("intervalid Address")
    </script>
    <?php
  }


  elseif((strlen($City)<2)){
    ?>
    <script>
      alert("intervalid City")
    </script>
    <?php
  }
  
  elseif((strlen($Pin_Code)<2)){
    ?>
    <script>
      alert("intervalid pincode")
    </script>
    <?php
  }

  elseif((strlen($State)<2)){
    ?>
    <script>
      alert("intervalid State")
    </script>
    <?php
  }


  elseif((strlen($country)<2)){
    ?>
    <script>
      alert("intervalid Country")
    </script>
    <?php
  }

  

  elseif((strlen($Gender)<2)){
    ?>
    <script>
      alert("intervalid Gender")
    </script>
    <?php
  }

  

  elseif((strlen($birthday)<2)){
    ?>
    <script>
      alert("intervalid Birthday")
    </script>
    <?php
  }

  
  elseif((strlen($Hobby)<2)){
    ?>
    <script>
      alert("intervalid Hobby")
    </script>
    <?php
    echo"$destinationfile";
  }

  else{


   
    $stmt ="INSERT INTO registration(img,department,Fname,Lname,bdate,mail,pass,phone,
    gender1,addr,city1,pin,state1,country1,hobby1,SSC,HSC,Graduation,POSTGraduation)
    values('$destinationfile','$Department','$FirstName','$LastName','$birthday','$Email',
    '$password','$MobileNumber','$Gender','$Address','$City','$Pin_Code','$State','$country','$Hobby','$item[0]','$item[1]','$item[2]','$item[3]')";
     $result = mysqli_query($conn, $stmt);
     echo $result. mysqli_error($conn);
     if($result){
      ?>
      <script>
      alert("Data is inserted")
    </script>
      <?php
echo "<script>window.location.href='login.php'</script>";
     }else{
      ?>
      <script>
      alert("Data is not inserted". mysqli_error($con))
    </script>
      <?php
      mysqli_close($conn);
     }
  }


  }
}
 ?>