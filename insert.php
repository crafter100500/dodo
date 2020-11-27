<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "dodo");
	$ins = mysqli_query($connect, "INSERT INTO trash SET name='{$_GET['name']}', price='{$_GET['price']}', img='{$_GET['img']}'"); 
	header("Location:index.php")
?>