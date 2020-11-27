<?php       
    $connect = mysqli_connect("127.0.0.1", "root", "", "dodo");
    $ins = mysqli_query($connect, "SELECT *  FROM trash");
    mysqli_query($connect, "TRUNCATE TABLE trash");
    header("Location:index.php")
?>