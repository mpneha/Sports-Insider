<!DOCTYPE html>
<html lang="en">
    
    <body bgcolor='pink'>
    <?php 
    
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="sports";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);
        }
        
            $sql="INSERT INTO sportstable(sportsname)VALUES('$_POST[name]')";
            echo "<h2><center>Connection successfull</center></h2>";
            echo "<br>";
            if($conn->query($sql)=== TRUE){
                echo "<center><h2>New record is created</h2></center>";
                echo "<br>";
                echo "<h2><center>Your record has been saved</center></h2>";
            }
            else{
                echo"error".$sql."<br>".$conn->error;
            }
             
$conn->close();
?>
</body>
</html>