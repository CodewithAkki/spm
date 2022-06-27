<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>Student Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="css/registration.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
</head>
<div class="card-body">
<body>

<div class="registration-container">


  <h3 align="center">Student Registration</h3>
  <form action=" " method="post">
  <table align='center' cellpadding='10'>
    <!-------------------First name---------------------->
    <tr>
      <td>FIRST NAME</td>
      <td><input type="text" name="FirstName" maxlength="50" /></td>
    </tr>
    <!------------------- Last name---------------------->
    <tr>
      <td>LAST NAME</td>
      <td><input type="text" name="LastName" maxlength="50" /></td>
    </tr>
    <!-------------------Date of birth---------------------->
    <tr>
      <td>DATE OF BIRTH</td>
      <td>
      <input type="date" id="birthday" name="birthday">
      /* <!--
        <select name="Birthday_day" id="Birthday_day">
          <option value="-1">Day:</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>

        <select id="Birthday_month" name="Birthday_month">
          <option value="-1">Month:</option>
          <option value="January">Jan</option>
          <option value="February">Feb</option>
          <option value="March">Mar</option>
          <option value="April">Apr</option>
          <option value="May">May</option>
          <option value="June">Jun</option>
          <option value="July">Jul</option>
          <option value="August">Aug</option>
          <option value="September">Sep</option>
          <option value="Octomber">Oct</option>
          <option value="November">Nov</option>
          <option value="December">Dec</option>
        </select>

        <select name="Birthday_year" id="Birthday_year">
          <option value="-1">Year:</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>

          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>


          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
        </select>
         */
      </td>
    </tr>

    <!-----------Email_Id----------------------->
    <tr>
      <td>EMAIL ID</td>
      <td><input type="text" name="Email" maxlength="100" /></td>
    </tr>
    <!--------------password-------------------->
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="password" maxlength="10" /></td>
    </tr>

    <tr>
      <td>CONFIRM PASSWORD</td>
      <td><input type="password" name="password1" maxlength="10" /></td>
    </tr>

    <!--- Mobile NUMBER ------------------------>

    <tr>
      <td>MOBILE NUMBER</td>
      <td>
        <input type="text" name="MobileNumber" maxlength="10" />
        (10 digit number)
      </td>
    </tr>

    <!--------------------- Gender----------------------->

    <tr>
      <td>GENDER</td>
      <td>
        Male<input type="radio" name="Gender" value="m" />
        Female<input type="radio" name="Gender" value="f" />
        Other<input type="radio" name="Gender" value="o" />
      </td>
    </tr>

    <! ---------------------- address ----------------------->

      <tr>
        <td>ADDRESS<br /><br /><br /></td>
        <td><textarea name="Address" rows="4" cols="30"></textarea></td>
      </tr>

      <!------------------------City------------------------->
      <tr>
        <td>CITY</td>
        <td><input type="text" name="City" maxlength="30" /></td>
      </tr>

      <!------------------------Pin code------------------------->
      <tr>
        <td>PIN CODE</td>
        <td><input type="text" name="Pin_Code" maxlength="6" /></td>
      </tr>

      <!------------------------State------------------------->
      <tr>
        <td>STATE</td>
        <td><input type="text" name="State" maxlength="60" /></td>
      </tr>

      <!------------------------Country------------------------->
      <tr>
        <td>COUNTRY</td>
        <td><input type="text" name="country" maxlength="60" /></td>
      </tr>

      <!------------------------- Hobbies ---------------------->
      <tr>
        <td>HOBBIES<br /><br /><br /></td>
        <!--
         <td>
          Drawing
          <input type="checkbox" name="Hobby_Drawing" value="D" />
          Singing
          <input type="checkbox" name="Hobby_Singing" value="S" />
          Dancing
          <input type="checkbox" name="Hobby_Dancing" value="Da" />
          Sketching
          <input type="checkbox" name="Hobby_cooking" value="C" />
          <br />
          others
          <input type="checkbox" name="Hobby_other" value="o">
          <input type="text" name="Hobby" maxlength="30" />

        </td>
         -->
        <td> <input type="text" name="Hobby" maxlength="30" /></td>
      </tr>

      <!---------------------------Qualifications----------------------------->

      <tr>
        <td>QUALIFICATION<br /><br /><br /><br /><br /><br /></td>
        <td>
          <table>
            <tr>
              <td align="center"><b>SR.No.</b></td>
              <td align="center"><b>Examination</b></td>
              <td align="center"><b>Board</b></td>
              <td align="center"><b>Percentage</b></td>
              <td align="center"><b>Year of Passing</b></td>
            </tr>

            <tr>
              <td>1</td>
              <td>Class X</td>
              <td><input type="text" name="ClassX_Board" maxlength="30" /></td>
              <td><input type="text" name="ClassX_percentage" maxlength="30" /></td>
              <td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
            </tr>

            <tr>
              <td>2</td>
              <td>Class XII</td>
              <td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
              <td><input type="text" name="ClassXII_percentage" maxlength="30" /></td>
              <td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
            </tr>

            <tr>
              <td>3</td>
              <td>Diploma</td>
              <td><input type="text" name="Diploma_Board" maxlength="30" /></td>
              <td><input type="text" name="Diploma_percentage" maxlength="30" /></td>
              <td><input type="text" name="Diploma_YrOfPassing" maxlength="30" /></td>
            </tr>

            <tr>
              <td>4</td>
              <td>Graduation</td>
              <td><input type="text" name="Graduation_Board" maxlength="30" /></td>
              <td><input type="text" name="Graduation_percentage" maxlength="30" /></td>
              <td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
            </tr>

          </table>
        </td>
      </tr>
</table>
      <!---------------------Submit---------------------------->
      <div class="container">
        <!-- <table>
          <tr>
            <td colspan="12" align="center"> -->
            <button type="submit" id="button" class="btn btn-primary deep-purple btn-block btn-sm">Submit</button>
            <button type="reset" id="button" class="btn btn-primary deep-purple btn-block btn-sm ">Reset</button>


            <!-- </td>
          </tr>
        </table> -->

</div>

  </form>
  </div>
  </div>
</body>

</html>

 <?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$MobileNumber=$_POST['MobileNumber'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Pin_Code=$_POST['Pin_Code'];
$State=$_POST['State'];
$country=$_POST['country'];
$Gender=$_POST['Gender'];
$birthday=$_POST['birthday'];
$Hobby=$_POST['Hobby'];
$ClassX_Board=$_POST['ClassX_Board'];
$ClassX_percentage=$_POST['ClassX_percentage'];
$ClassX_YrOfPassing=$_POST['ClassX_YrOfPassing'];
$ClassXII_Board=$_POST['ClassXII_Board'];
$ClassXII_percentage=$_POST['ClassXII_percentage'];
$ClassXII_YrOfPassing=$_POST['ClassXII_YrOfPassing'];
$Diploma_Board=$_POST['Diploma_Board'];
$Diploma_percentage=$_POST['Diploma_percentage'];
$Diploma_YrOfPassing=$_POST['Diploma_YrOfPassing'];
$Graduation_Board=$_POST['Graduation_Board'];
$Graduation_percentage=$_POST['Graduation_percentage'];
$Graduation_YrOfPassing=$_POST['Graduation_YrOfPassing'];


//Database connection
$servername="localhost";
$username="root";
$pass="";
$table="register";
$conn=new mysqli($servername,$username,$pass,$table);
if(!$conn){
    die('connection faild:'.mysqli_connect_error());
}else{
    $stmt = $conn->prepare("INSERT INTO registration(Fname,Lname,bdate,mail,pass,phone,gender1,addr,city1,pin,state1,country1,hobby1)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssisssisss",$FirstName,$LastName,$birthday,$Email,$password,$MobileNumber,$Gender,$Address,$City,$Pin_Code,$State,$country,$Hobby);
    $stmt->execute();
    echo "<script>alert('register successful');</script>";
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO classx(name1,board,percentage1,year1)
    values(?,?,?,?)");
    $stmt->bind_param("sssi",$FirstName,$ClassX_Board,$ClassX_percentage,$ClassX_YrOfPassing);
    $stmt->execute();
    //echo "\\n";
    echo "<script>alert('10th marks Entered');</script>";
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO classxii(name2,board12,percentage12,year12)
    values(?,?,?,?)");
    $stmt->bind_param("sssi",$FirstName,$ClassXII_Board,$ClassXII_percentage,$ClassXII_YrOfPassing);
    $stmt->execute();
    //echo "\t12th marks Entered\n";
    echo "<script>alert('12th marks Entered');</script>";
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO diploma(name3,boardd,percentaged,yeared)
    values(?,?,?,?)");
    $stmt->bind_param("sssi",$FirstName,$Diploma_Board,$Diploma_percentage,$Diploma_YrOfPassing);
    $stmt->execute();
    //echo "\r\n Diploma marks Entered";
    echo "<script>alert('Diploma marks Entered');</script>";
    $stmt->close();


    $stmt = $conn->prepare("INSERT INTO register1(name4,boardg,per,yr)
    values(?,?,?,?)");
    $stmt->bind_param("sssi",$FirstName,$Graduation_Board,$Graduation_percentage,$Graduation_YrOfPassing);
    $stmt->execute();
    //echo "\rGraduation marks Entered";
    echo "<script>alert('Graduation marks Entered');</script>";
    $stmt->close();
    $conn->close();



}
 ?>
