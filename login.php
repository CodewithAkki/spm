<html>
<head>
    <link rel="icon" href="./images/education-icon.svg"  type="image/svg>
<title>Student Registration Fom</title>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" 
        crossorigin="anonymous">
</head>
<style>
*{
    padding:0 ;
    margin: 0;
    font-family: sans-serif;
}

.login-form{
    width: 500px;
    top: 50%;
    height: 500px;
    left: 50%;
    transform: translate(-50% ,-50%);
    position: absolute;
    color: rgb(255, 255, 255);
    background-color: rgb(167, 228, 240);
}

.login-form h1{
    font-size: 40px;
    color: #3b9be9b1;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}
.login-form p{
    color: #3b9be9b1;
    font-size: 20px;
    margin: 15px 0;
}
.login-form input{
    font-size: 16px;
    width: 100%;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius:5px ;
}
.login-form a{
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    padding: 10px 15px;
    width: 100px;
    border-radius: 5px;
    border: 0;
}

.login-form a{
    border: 1px solid #fff;
    border-radius: 100px;
    margin: 0 5px;
    padding: 12px 35px;
    outline: none;
    color: white;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;

}
button :hover{
    color: #50d1c0;
    background: #fff;
    text-decoration: none;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0,3);
}
.login-form a:hover{
    color: #50d1c0;
    background: #fff;
    text-decoration: none;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0,3);
}

button{
    border: 1px solid #fff;
    border-radius: 100px;
    margin: 0 5px;
    background-color: transparent;
    padding: 12px 35px;
    outline: none;
    color: white;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
}

</style>

<body>
  <div class="login-form" >
    <cnter><h1> <b>Student Perfromance Management</b></h1></cnter>
    <form action=" " method="post">
        
        
        <input type="email" name="email" placeholder="Enter email" style="width: 70%;margin-left: 20%;">
        </center>
        
        <br>
        <br>

        <input type="password" class="pass" name="pass" placeholder="Enter password" style="width: 70%;margin-left: 20%;"><br><br><br>
        </center>
        <center>
        <button type="submit" name="submit">login</button>
    <a href="registration.php">Registration</a>
   
         </center>

    </form>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    </body>
</html>








<?php

if(isset($_POST['submit'])){

$Email=$_POST['email'];
$password=$_POST['pass'];
$servername="localhost";
$username="root";
$pass="";
$table="student_performance";
$conn=new mysqli($servername,$username,$pass,$table);

if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}else{
    $sql="SELECT mail,pass FROM registration WHERE mail=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$Email);
    $bool=$stmt->execute();
    $stmt_result=$stmt->get_result();
    
    while($row=$stmt_result->fetch_assoc())
    {
        if($password==$row['pass']){
            header("location:studentview.php");
        }else{
            ?>
            <script>
                alert("Password is wrong");
                </script>
            <?php

        }
            
             //

    }

}

}
?>