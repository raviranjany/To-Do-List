<?php
    include ("database.php");
    $id=$_GET['id'];

    $sql="DELETE FROM todo_list WHERE ID=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: index.php");
    }

?>