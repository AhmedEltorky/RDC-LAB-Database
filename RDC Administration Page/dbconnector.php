<?php

$conn = mysqli_connect("localhost", "root", "", "rdc");

if (!$conn){
	die("connection failed".mysqli_connect_error());
}