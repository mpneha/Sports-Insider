<!DOCTYPE html>
<html lang="en">
<?php 
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="sports";
        $conn=mysqli_connect($servername,$username,$password,$dbname)
        if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);
        }
?>
    
</body>
</html>