<html>
  <head>
    
  </head>
  <body>
    <div id="columnchart_material" style="width: 100%; min-width: 25%; height: 500px;"></div>
  </body>
</html>
<?php
session_start();
$rollno=$_SESSION['rollno'];
$email=$_SESSION['email'];
$servername="localhost";
$username="root";
$pass="";
$table="register";
$conn=new mysqli($servername,$username,$pass,$table);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}else{

$sql = "SELECT * FROM marks where rollno=$rollno";
if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) == 1){
    $SemI=0;
      $SemIs=0;
      $SemII	=0;
      $SemIIs=0;
      $SemIII	=0;
      $SemIIIs	=0;
      $SemIV	=0;
      $SemIVs	=0;
      $SemV	=0;
      $SemVs	=0;
      $SemVI	=0;
      $SemVIs	=0;
      $SemVII	=0;
      $SemVIIs	=0;
      $SemVIII	=0;
      $SemVIIIs=0;
    while($row = mysqli_fetch_assoc($result))
    {
      //	SemIs/h	SemII	SemIIs/h	SemIII	SemIIIs/h	SemIV	SemIVs/h	SemV	SemVs/h	SemVI	SemVIs/h	SemVII	SemVIIs/h	SemVIII	SemVIIIs/h
      $SemI=$row["SemI"];
      $SemIs=$row["SemIs/h"];
      $SemII	=$row["SemII"];
      $SemIIs=$row["SemIIs/h"];
      $SemIII	=$row["SemIII"];
      $SemIIIs	=$row["SemIIIs/h"];
      $SemIV	=$row["SemIV"];
      $SemIVs	=$row["SemIVs/h"];
      $SemV	=$row["SemV"];
      $SemVs	=$row["SemVs/h"];
      $SemVI	=$row["SemVI"];
      $SemVIs	=$row["SemVIs/h"];
      $SemVII	=$row["SemVII"];
      $SemVIIs	=$row["SemVIIs/h"];
      $SemVIII	=$row["SemVIII"];
      $SemVIIIs=$row["SemVIIIs/h"];
      //echo $SemVIII;
    }
$src="https://www.gstatic.com/charts/loader.js";
    echo "<script type='text/javascript' src=$src></script>";
    echo "<script type='text/javascript'>";
    echo " google.charts.load('current', {'packages':['bar']});";
    echo " google.charts.setOnLoadCallback(drawChart);";

    echo "  function drawChart() {";
      echo "    var data = google.visualization.arrayToDataTable([";
        echo "     ['Semister','Programming','Networking'],";
        echo "    ['Sem-I',$SemI, $SemIs],";
        echo "  ['Sem-II',$SemII, $SemIIs],";
        echo "   ['Sem-III',$SemIII, $SemIIIs],";
        echo "  ['Sem-IV',$SemIV, $SemIVs],";
        echo "   ['Sem-V',$SemV, $SemVs],";
        echo " ['Sem-VI',$SemVI, $SemVIs],";
        echo "  ['Sem-VII',$SemVII, $SemVIIs],";
        echo "  ['Sem-VIII',$SemVIII, $SemVIIIs]";
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
           $avgprogramming= ($SemI+$SemII+$SemIII+$SemIV+$SemV+$SemVI+$SemVII+$SemVIII)/8;
           $avgnetworking=($SemIs+$SemIIs+$SemIIIs+$SemIVs+$SemVs+$SemVIs+$SemVIIs+$SemVIIIs)/8;
           // echo $avgprogramming;
           $programming="Programming";
           $Networking="Networking";
           if($avgprogramming<35){
            echo "<script>alert('your performance is worst please work on your programming skills');</script>";
           }else if($avgprogramming>35 && $avgprogramming<=50){
            echo "<script>alert('your performance is poor please work on your programming skills');</script>";
           }else if($avgprogramming>50 && $avgprogramming<=80){
            echo "<script>alert('your performance is good in programming');</script>";
           // echo $email;
           }else if($avgprogramming>80 && $avgprogramming<=100){
            echo "<script>alert('your performance is excellent in programing');</script>";
           }

           if($avgnetworking<35){
            echo "<script>alert('your performance is worst work on your Networking skills ');</script>";
          }else if($avgnetworking>35 && $avgnetworking<=50){
            echo "<script>alert('your performance is poor work on your Networking skills ');</script>";
          }else if($avgnetworking>50 && $avgnetworking<=80){
            echo "<script>alert('your performance is good in networking');</script>";
            //echo $email;
          }else if($avgnetworking>80 && $avgnetworking<=100){
            echo "<script>alert('your performance is excellent in networking ');</script>";
          }




  }else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  }

}
?>