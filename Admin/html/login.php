<?php
session_start();
include("../php/dbconnect.php");

if(isset($_POST["login"])){
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = mysqli_real_escape_string($dbconnect, $_POST["username"]);
		$password = mysqli_real_escape_string($dbconnect, $_POST["password"]);

		$query = "select * from admin_login WHERE username = '".$username."' AND password = '".$password."'";
		$fetch = mysqli_query($dbconnect, $query);
		$numrow = mysqli_num_rows($fetch);

		if($numrow > 0){

			$fetchdata = mysqli_fetch_array($fetch);
			$_SESSION["password"] = $fetchdata["password"];

			// echo"<script>$('body').load('html/home.php').hide().fadeIn(1500);</script>";
			 echo"<script>location.replace('html/add_post.php');</script>";
		}else{
			echo "Incorrect Username or password";
		}
	}else{
		echo "Nothing Posted";
	}  
}
?>