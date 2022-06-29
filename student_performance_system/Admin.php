
 <?php
$email=$_POST['email'];
$pswd=$_POST['pswd'];

//Database connection
$servername="localhost";
$username="root";
$pass="";
$table="register";
$conn=new mysqli($servername,$username,$pass,$table);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}
  

if(strlen($email)>0 && strlen($pswd)>0){
  $sql = "SELECT * FROM admin where Email='$email' and Password='$pswd'";
if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) == 1){
    header("Location: //localhost/student_performance_system/adminview.html");
    exit();
  }
  if(mysqli_num_rows($result) == 2){
    echo "<script>alert('duplicate records');</script>";
  }
  else{
    //echo "<h1> login unsuccessfull</h1>";  
    echo "<script>alert('login unsuccessfull');</script>";
  }
  }
}
else{
  //echo "<h1> login unsuccessfull</h1>";
  echo "<script>alert('login unsuccessfull');</script>";
}
 ?> 