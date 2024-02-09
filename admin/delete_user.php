<?php
	$conn = new mysqli("localhost", "root", "", "hcpms");
	$conn->query("DELETE FROM `user` WHERE `user_id` = '$_GET[id]' && `lastname` = '$_GET[lastname]'");
	header("location:user.php");

