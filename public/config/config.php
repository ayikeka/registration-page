<?php
ob_start();
session_start();

$connection = mysqli_connect("localhost", "root", "meek", "talentHouse");

	if (mysqli_connect_errno()) {
		echo "failed to Connect" . mysqli_connect_errno();
	}

 ?>
