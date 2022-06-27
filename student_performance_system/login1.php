
 <?php
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
    $sql="SELECT mail,pass FROM registration WHERE mail=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$Email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    while($row=$stmt_result->fetch_assoc())
    {
        if(password_verify($password,$row['pass'])){
            $message="ok";
            header("location:studentview.html");
            exit();
        }
    }
    $message="No";
}
?>