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
                
                <a href="#" >
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
                        <h3>Student Section</h3>
                </a>
            </div>



            <div class="sidebar">
                <a href="marks.php">
                    <span class="material-symbols-rounded">
                        contact_mail
                        </span>
                        <h3>Marks</h3>
                </a>
            </div>
            <div class="sidebar">
                <a href="index.html">
                    <span class="material-symbols-rounded">
                        login
                        </span>
                        <h3>Logout</h3>
                </a>
            </div>

</aside>
</div>
<div id="columnchart_material"  style="position: absolute;left: 250px;top: 10%;width: 50%; min-width: 25%; height: 350px;top:210px;"></div>



<?php

if(isset($_GET['markssumbit'])){
$rollno=$_GET['searchinguser'];
$department=$_GET['department'];
$servername="localhost";
$username="root";
$pass="";
$table="student_performance";
$conn=new mysqli($servername,$username,$pass,$table);

if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}else{

//echo $department;
$sql="select * from ".$department." where rollno= ".$rollno;

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
    }
}
?>

<?php
if(isset($_GET['noticesadmin'])){
    $servername="localhost";
    $username="root";
    $pass="";
    $table="student_performance";
    $conn=new mysqli($servername,$username,$pass,$table);
    $notice=$_GET['noticetxt'];    
    $stmt ="INSERT INTO notice(notice)
values('$notice')";
 $result = mysqli_query($conn, $stmt);
 echo $result. mysqli_error($conn);
 if($result){
  ?>
  <script>
  alert("Data is inserted")
</script>
  <?php

 }else{
  ?>
  <script>
  alert("Data is not inserted". mysqli_error($con))
</script>
  <?php
  mysqli_close($conn);
 }
}
?>


<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $table="student_performance";
    $conn=new mysqli($servername,$username,$pass,$table);
    
    if(!$conn){
        die('connection failed:'.mysqli_connect_error());
    }else{ 
        $sql="select * from issues";
        $result = mysqli_query($conn, $sql);
        //print_r($result);
        $count=mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
 
    while($row = mysqli_fetch_assoc($result)) {
    $rollnos1[]=$row['rollno'];
    $imgs[]=$row['img'];
    $firstname[]=$row['firstname'];
    $issue[]=$row['txt'];    
  }
} else {
  echo "0 results";
}
        

        
    }
        
        
?>




<div class="notice">
    <?php
    $i=0;
    while($i!=$count){
    $pic=$imgs[$i];
    $rollnos=$rollnos1[$i];
    echo "<img src='$pic' alt='profile' style=' border-radius: 50%;width:40px; height:40px;'/><a style='margin-left:10px;margin-bottom:300px;'>$rollnos $firstname[$i]</a><br>";
    echo "<input type='text' style='background:transparent;border:none;outline: none; width:50px;height:50px;' readonly>issue=>$issue[$i]</input><br>";
    $i=$i+1;
    }
    ?>
    <!--img src="" alt="profile"><a style="margin-left:20px;">Jhon doe</a><br>
    <input type="text" style="background:transparent;border:none;outline: none;width:50px;height:50px;" readonly><br>
    <img src="" alt="profile"><a style="margin-left:20px;">Jhon doe</a><br>
    <input type="text" style="background:transparent;border:none;outline: none;width:50px;height:50px;" readonly><br>
    <img src="" alt="profile"><a style="margin-left:20px;">Jhon doe</a><br!-->

</main>
</div>

    <div class="notice1">
        <center>
            <h2>Notice</h2>
            <form style="margin-top: 10px;" action="" method="GET">
           <textarea cols="40" rows="10" name="noticetxt" style="resize: none;"></textarea>
           <input type="submit" name="noticesadmin" value="submit" style="width: 200px; height:40px; margin-top: 5px;">
        </form>
        </center>
   
</div>


<div class="marks">
    <form action="" method="get">
        <div style="margin-left:20px ;">
        <label for="textlabel">Search </label> <input  name="searchinguser" id="textlabel" style=" padding-left:20px;margin-top: 100px; height: 30px;" type="text" placeholder="Enter Roll no" name="subject Name1" style="height:25px ; "required/><br>
      
        <input type="submit" name="markssumbit" value="submit" style="width: 100px; height:30px; margin-top: 10px;">
        
        <label for="department">choose</label>
        <select name="department" id="department" >
        <option value="computer_science">computer science</option>
        <option value="mechanical">mechanical</option>
        <option value="chemical_engineer">chemical engineer</option>
        <option value="civil_engineering">civil engineering</option>
        </select>

        
        <center>
        <p>Name of the student</p>
        </center>    
    </div>    
    </form>
      
    </div>
</body>
</html>


