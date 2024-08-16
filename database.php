<?php
     $host="localhost";
     $user="root";
     $pass="";
     $dbname="todo_list";

     $conn =mysqli_connect($host, $user, $pass, $dbname);

     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      //  echo "Connected successfully";

?>