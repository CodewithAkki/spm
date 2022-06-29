

<?php
session_start();
$servername="localhost";
$username="root";
$pass="";
$table="student_performance";
$conn=new mysqli($servername,$username,$pass,$table);

if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}else{
$rollno=$_SESSION['rollno'];
$department=$_SESSION['department'];

//echo $department;
$sql="select * from ".$department." where rollno= ".$rollno;
//echo $sql;
$stmt = $conn->prepare($sql);
    
$result = mysqli_query($conn, $sql);
//print_r($result);
if (mysqli_num_rows($result) > 0) {
  //echo "records";
  while($row = mysqli_fetch_assoc($result)) {
    $marks[] = $row['marks'];
    $subject[] = $row['subject_name'];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
//print_r( $marks);
//print_r( $subject);
}
?>


<?php
    $rollno=$_SESSION['rollno'];
    $img=$_SESSION['image'];
    $firstname=$_SESSION['firstname'];

//echo $rollno;
if(isset($_POST['issue'])){

    $servername="localhost";
    $username="root";
    $pass="";
    $table="student_performance";
    $conn=new mysqli($servername,$username,$pass,$table);
    
    if(!$conn){
        die('connection failed:'.mysqli_connect_error());
    }else{ 
    echo $rollno." ".$img." ".$firstname;
    $txtissue=$_POST['txtissue'];
    $stmt ="INSERT INTO issues(txt,rollno,img,firstname)
    values('$txtissue',$rollno,'$img','$firstname')";
     $result = mysqli_query($conn, $stmt);
     //echo $result. mysqli_error($conn);
     if($result){
      ?>
      <script>
      alert("Data is inserted")
    </script>
      <?php
//echo "<script>window.location.href='login.php'</script>";
     }else{
      ?>
      <script>
      alert("Data is not inserted". mysqli_error($con))
    </script>
      <?php

     }
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPerformanceManagement</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">

                <div class="logo">
                    
                    <img src="./images/tkiet_logo.png" alt="logo" style="position:absolute ; width: 100px; height: 100px; top: 0; left: 20px;" /><br>
                   

</div>
<div class="close" id="class-btn">

<span class="material-symbols-outlined">
close
</span>

</div>
            </div>

            <div class="sidebar" style="margin-top: 25px;">
                
                <a href="#">
                    <span class="material-symbols-rounded">
                        home
                        </span>
                        <h3>Home</h3>
                    </a>

            </div>

            <div class="sidebar">
                <a href="#" class ="active">
                    <span class="material-symbols-rounded">
                        group
                        </span>
                        <h3>Dashboard</h3>
                </a>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-rounded">
                        group
                        </span>
                        <h3>Project</h3>
                </a>
            </div>



            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-rounded">
                        contact_mail
                        </span>
                        <h3>Contact us</h3>
                </a>
            </div>
            <div class="sidebar">
                <a href="./index.html">
                    <span class="material-symbols-rounded">
                        login
                        </span>
                        <h3>Logout</h3>
                </a>
            </div>

</aside>
</div>



<div id="columnchart_material"  style="position: absolute;left: 250px;top: 10%;width: 50%; min-width: 25%; height: 500px;"></div>


<?php
$i=0;
$si=6;




$src="https://www.gstatic.com/charts/loader.js";
  echo "<script type='text/javascript' src=$src></script>";
  echo "<script type='text/javascript'>";
  echo " google.charts.load('current', {'packages':['bar']});";
  echo " google.charts.setOnLoadCallback(drawChart);";

  echo "  function drawChart() {"; 
  echo "    var data = google.visualization.arrayToDataTable([";
  echo "     ['Semister','department'],";

  while($i<$si) {
    echo " ['$subject[$i]',$marks[$i] ],";
    $i=$i+1;
  }
  

          echo " ]);";
  echo " var options = {";
    echo "  chart: {";
      echo "   title: 'Student Performance',";
      echo "  subtitle: 'Student percentage and subject'";
      echo "}";
      echo "};";

      echo "var chart = new google.charts.Bar(document.getElementById('columnchart_material'));";
      echo "  chart.draw(data, google.charts.Bar.convertOptions(options));";
      echo "}";
      echo " </script>";

?>


<div class="notice">
    <center>
    <h2>Notice</h2>

    
<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $table="student_performance";
    $conn=new mysqli($servername,$username,$pass,$table);
    
    if(!$conn){
        die('connection failed:'.mysqli_connect_error());
    }else{ 
        $sql ="select * from notice";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->execute();
            $stmt_result=$stmt->get_result();
    
            while($row=$stmt_result->fetch_assoc())
            {

                $notice=$row['notice'];
                
            }
            
            ?>
            <textarea cols="40" rows="10" readonly style='resize: none;' ><?php echo $notice; ?></textarea>
        <?php
        }

        }
?>



  
</center>
</div>
<div class="notice1">
    
    <center>
        <h2>Issue</h2>
        <form style="margin-top: 10px;" action="" method="POST">
       <textarea cols="40" rows="10"  style="resize: none;" name="txtissue"></textarea>
       <input type="submit" name="issue" value="submit" style="width: 200px; height:40px; margin-top: 5px;">
    </form>
    </center>
        
     
       
    
</div>
</body>
</html>