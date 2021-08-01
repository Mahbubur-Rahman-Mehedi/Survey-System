
<?php
$connection = mysqli_connect("localhost", "root","", "survey");
$sql = "CREATE TABLE IF NOT EXISTS surveys( 
    id int auto_increment primary key, 
    userid varchar(255),
    length int, 
    survey json
  );";
 if(mysqli_query($connection, $sql)){
     echo "ok";
    }

if (isset($_POST['name'])&&isset($_POST['length'])){
    $name = $_POST['name'];
    $length = $_POST['length'];
    $userid = "1";
    $sql = "INSERT INTO surveys(survey,length,userid) Value('$name','$length','$userid')";
   mysqli_query($connection, $sql);
   }
   mysqli_close($conn);
?>