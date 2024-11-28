<?php
$connect = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($connect, "vortex");
mysqli_set_charset($connect,"UTF8");

$query = mysqli_query($connect,"SELECT * FROM jogos");
    while($result = mysqli_fetch_array($query)){
        setcookie($result[0], $result[1], time() - 1, "/");    
    }

    header("Location: main.php"); 
?>