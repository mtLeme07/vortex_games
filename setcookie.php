<?php
$connect = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($connect, "vortex");
mysqli_set_charset($connect, "UTF8");

$query = mysqli_query($connect, "SELECT * FROM jogos");

while ($result = mysqli_fetch_array($query)) {
    if (isset($_POST["buy" . $result[0]])) {
        if (!isset($_COOKIE[$result[0]])) {
            setcookie($result[0], 1, time() + (86400 * 7), "/");
        } else {
            $q = (int)$_COOKIE[$result[0]] + 1;
            setcookie($result[0], $q, time() + (86400 * 7), "/");
        }
    }
}

header("Location: main.php");
?>
