
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="css/userlogin.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

</head>

<body id="body">
  <div id="login-card" class="card">
    <div class="card-body">
      <h2 class="text-center">Student login</h2>
      <br>
      <form action=" " method="post">
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="email" placeholder="Enter password" name="password">
        </div>

       <button type="submit" class="btn btn-primary deep-purple btn-block" id="button">Submit</button>
        <br>

        <a href="studentRegistration.html" type="register" id="button" class="btn btn-primary deep-purple btn-block " input type="submit">Register</a>
        <br>


      </form>
    </div>
  </div>
</body>

</html>

 <?php
 session_start();
 function Redirect($url, $permanent = false)
 {
  header('Location: ' . $url, true, $permanent ? 301 : 302);

  exit();
}
$Email=$_POST['Email'];
$password=$_POST['password'];

//Database connection
$servername="localhost";
$username="root";
$pass="";
$table="register";
$conn=new mysqli($servername,$username,$pass,$table);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}else{
  // echo "";

if(strlen($Email)>0 && strlen($password)>0){
  $sql = "SELECT * FROM registration where mail='$Email' and pass='$password'";
if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) == 1){
    while($row = mysqli_fetch_assoc($result))
    {
      $roll=$row["Id"];
      $email=$row["mail"];
      echo $roll;
      echo "<script>alert('$roll');</script>";
    }
    $_SESSION['rollno']=$roll;
    $_SESSION['email']=$email;
  header("Location: //localhost/student_performance_system/studentview.html");
  }
  if(mysqli_num_rows($result) == 2){
    echo " <script>alert('duplicate records');</script> ";
    //header("Location: //localhost/student_performance_system/userlogin.html");
  }
  else{
    echo " <script>alert('login unsccessful');</script>";
    //header("Location: //localhost/student_performance_system/userlogin.html");
  }
  }
}
// else{
//   echo " <script>alert('login unsccessful');</script>";
//   //header("Location: //localhost/student_performance_system/userlogin.html");
// }
  }


 ?>
