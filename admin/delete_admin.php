<?php
	$conn = new mysqli("localhost", "root", "", "hcpms");
	$conn->query("DELETE FROM `admin` WHERE `admin_id` = '$_GET[id]'");
	header("location:admin.php");
