<html>
    <body>
        <table>
            <tr>
                <th>RollNo</th>
                <th>Name</th>
                <th>SemI</th>
                <th>SemII</th>
                <th>SemIII</th>
                <th>SemIV</th>
                <th>SemV</th>
                <th>SemVI</th>
                <th>SemVII</th>
                <th>SemVIII</th>
            </tr>
            <?php
            $servername="localhost";
            $username="root";
            $pass="";
            $table="register";
            $conn=new mysqli($servername,$username,$pass,$table);
            if(!$conn){
                die('connection failed:'.mysqli_connect_error());
            }else{
                
        </table>
    </body>
</html>