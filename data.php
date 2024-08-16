
<?php
include 'database.php';
$title=$_POST['title'];

// echo "Name Is".$name ."Phone Number:".$phone;


$sql="INSERT INTO todo_list(Title)VALUES('$title')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
     echo "Sorry We Can't Connect";
}

?>