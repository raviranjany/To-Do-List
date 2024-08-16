<?php
     $id=$_POST['id'];
     $title=$_POST['title'];

     include 'database.php';

     $sql="UPDATE todo_list SET Title='$title' WHERE ID=$id";
     $result=mysqli_query($conn, $sql);
     
     if($result) {

          header("location: index.php");
     }

?>