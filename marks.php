<!DOCTYPE html>
<html>
  <head>
    <title>MARKS SHEET USING HTML TABLES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="html, css, html tables, table">
    <meta name="Description" content="html table">
    <!-- add icon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="css/marks.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

            

  </head>
  <body>
    <div class="container">
      <h2>Add Marks</h2>

      <form action=" " method="get">
      <table>

          <tr>
            <td>Roll No.</td>
            <td><input type="number" name="roll"></td>
            </tr>
            <tr>
              <td>Name</td>
              
              <td><input type="text" name="name" value="" placeholder="First Name" required="true"></td>
              <td><input type="text" name="middelname" value="" placeholder="Middel Name" required="true"></td>
              <td><input type="text" name="lname" value="" placeholder="Last Name" required="true"></td>

            </tr>
            <tr>
              <td>Sem-I</td>
              <td><input type="text" name="s1" step="any" placeholder="programming Subject" required="true"></td>
                <td><input type="text" name="s11" step="any" placeholder="H/W or S/W subject" required="true"></td>
            </tr>
            <tr>
              <td>Sem-II</td>
              <td><input type="text" name="s2" step="any" placeholder="programming Subject" required="true"></td>
                <td><input type="text" name="s22" step="any" placeholder="H/W or S/W subject" required="true"></td>
            </tr>
            <tr>
              <td>Sem-III</td>
              <td><input type="text" name="s3" step="any" placeholder="programming Subject" required="true"></td>
                <td><input type="text" name="s33" step="any" placeholder="H/W or S/W subject" required="true"></td>
            </tr>
            <tr>
              <td>Sem-IV</td>
              <td><input type="text" name="s4" step="any" placeholder="programming Subject" required="true"></td>
                <td><input type="text" name="s44" step="any" placeholder="H/W or S/W subject" required="true"></td>
            </tr>
          <tr>
            <td>Sem-V</td>
            <td><input type="text" name="s5" step="any" placeholder="programming Subject" required="true"></td>
              <td><input type="text" name="s55" step="any" placeholder="H/W or S/W subject" required="true"></td>
          </tr>
            <tr>
              <td>Sem-VI</td>
              <td><input type="text" name="s6" step="any" placeholder="programming Subject" required="true"></td>
                <td><input type="text" name="s66" step="any" placeholder="H/W or S/W subject" required="true"></td>
            </tr>
            <tr>
              <td>Sem-VII</td>
              <td><input type="text" name="s7" step="any" placeholder="programming Subject" required="true"></td>
                <td><input type="text" name="s77" step="any" placeholder="H/W or S/W subject" required="true"></td>
            </tr>


          <tr>
              <td>Sem-VIII</td>
              <td><input type="text" name="s8" step="any" placeholder="programming Subject"></td>
                <td><input type="text" name="s88" step="any" placeholder="H/W or S/W subject"></td>
          </tr>




      </table>

      <div class="fluid-container">
      <button type="submit" id="button" name="submit" class="btn btn-primary deep-purple btn-block" onclick="fun()">Submit</button>
<br>
  </form>
      </div>
    </div>

  </body>
</html>





<?php

$roll=$_GET['roll'];
$name=$_GET['name'];
$lname=$_GET['lname'];
$s1=$_GET['s1'];
$s11=$_GET['s11'];
$s2=$_GET['s2'];
$s22=$_GET['s22'];
$s3=$_GET['s3'];
$s33=$_GET['s33'];
$s4=$_GET['s4'];
$s44=$_GET['s44'];
$s5=$_GET['s5'];
$s55=$_GET['s55'];
$s6=$_GET['s6'];
$s66=$_GET['s66'];
$s7=$_GET['s7'];
$s77=$_GET['s77'];
$s8=$_GET['s8'];
$s88=$_GET['s88'];
$middelname=$_GET['middelname'];

//Database connection
$servername="localhost";
$username="root";
$pass="";
$table="register";
$conn=new mysqli($servername,$username,$pass,$table);
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    
    //number_format($roll,2);
    $s1=number_format($s1,2);
    $s11 =number_format( $s11,2);
    $s2=number_format( $s2,2);
    $s22=number_format( $s22,2);
    $s3=number_format( $s3,2);
    $s33=number_format( $s33,2);
    $s4=number_format( $s4,2);
    $s44=number_format( $s44,2);
    $s5=number_format( $s5,2);
    $s55=number_format( $s55,2);
    $s6=number_format( $s6,2);
    $s66=number_format( $s66,2);
    $s7=number_format( $s7,2);
    $s77=number_format( $s77,2);
    $s8=number_format( $s8,2); 
    $s88=number_format( $s88,2);
$sql = "INSERT INTO `marks`(`RollNo`,`SemI`, `SemIs/h`, `SemII`, `SemIIs/h`,`SemIII`,`SemIIIs/h`, `SemIV`, `SemIVs/h`, `SemV`, `SemVs/h`, `SemVI`, `SemVIs/h`,`SemVII`,`SemVIIs/h`,`SemVIII`,`SemVIIIs/h`,`name`,`lname`,`middelname`) 
                    VALUES ($roll,$s1,$s11,$s2,$s22,$s3,$s33,$s4,$s44,$s5,$s55,$s6,$s66,$s7,$s77,$s8,$s88,'$name','$lname','$middelname')";


if(mysqli_query($conn, $sql)){
  echo"<script>alert('data inserted');</script>"; 
} else{
  echo"<script>alert('fail to insert data');</script>";
}

    $conn->close() 
    // Close connection
    //mysqli_close($link);
    //$link->close();

 ?>
