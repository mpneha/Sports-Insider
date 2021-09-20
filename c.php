<!DOCTYPE html>
<html lang="en">
    
    <body>
    <?php 
     $sports_name=$_POST['name'];
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="sports";
        $conn=mysqli_connect($servername,$username,$password,$dbname)
        if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);
        }
            $sql="INSERT INTO sportstable(sportsname)VALUES('$_POST[name]')";
            echo "connection successfull";
            if($conn->query($sql)=== TRUE){
                echo "new record is created";
            }
            else{
                echo"error".$sql."<br>".$conn->error;
            }
        }
$conn->close();
?>
</body>
</html>