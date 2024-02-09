<?php
	require'connect.php';
	$query = mysqli_query($conn, "SELECT * FROM `user`");
	$fetch = mysqli_fetch_array($query);
	$name = $fetch['name'];
	
	
