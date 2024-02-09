<?php
	$conn = new mysqli("localhost", "root", "", "hcpms");
	$conn->query("DELETE FROM `itr` WHERE `itr_no` = '$_GET[id]'");
	header("location:patient.php");