<?php 

session_start();

$method = $_SERVER['REQUEST_METHOD'];

if($method==="POST") {
	 if(isset($_POST["save"])){
		for ($i = 1; $i <= 17; $i++) {
    		$value = isset($_POST["field$i"])?$_POST["field$i"]:"";
    		setcookie("field$i", $value, time() + 300, "/");
			$_SESSION["u$i"]=""; 
	 }
	$utc_time = time();
	$bangladesh_time = $utc_time + (6 * 3600); 
	$draft_time = date("d-m-Y H:i:s", $bangladesh_time);
	setcookie("draft_time", $draft_time, time() + 300, "/");
	header("Location: tsessionform.php");
	}
	 if(isset($_POST["register"])){
		$isValid=true;
		for ($i = 1; $i <= 17; $i++) {
    		$_SESSION["u$i"]="";
		}
		for ($i = 1; $i <= 17; $i++) {
    		${"f$i"}=$_POST["field$i"];
		}
		if (empty($f1)) {
		$_SESSION['u1'] = "First name is empty";
		$isValid = false;
		}
		else {
			setcookie("field1", $f1, time() + 300, "/");
		}
		if (empty($f2)) {
			$_SESSION['u2'] = "Last name is empty";
			$isValid = false;
		}
		else {
			setcookie("field2", $f2, time() + 300, "/"); 
		}
		if (empty($f3)) {
			$_SESSION['u3'] = "Please select gender";
			$isValid = false;
		}
		else {
			setcookie("field3", $f3, time() + 300, "/"); 
		}
		if (empty($f4)) {
			$_SESSION['u4'] = "Father name is empty";
			$isValid = false;
		}
		else {
			setcookie("field4", $f4, time() + 300, "/");
		}
		if (empty($f5)) {
			$_SESSION['u5'] = "Mother name is empty";
			$isValid = false;
		}
		else {
			setcookie("field5", $f5, time() + 300, "/");
		}
		if (empty($f6)) {
			$_SESSION['u6'] = "Select blood group";
			setcookie("field6", "Select", time() + 300, "/");
			$isValid = false;
		}
		else {
			$_SESSION['u6'] = "";
			setcookie("field6", $f6, time() + 300, "/");
		}
		if (empty($f7)) {
			$_SESSION['u7'] = "Select religion";
			setcookie("field7", "Select", time() + 300, "/");
			$isValid = false;
		}
		else {
			$_SESSION['u7'] = "";
			setcookie("field7", $f7, time() + 300, "/");
		}
		if (empty($f8)) {
			$_SESSION['u8'] = "Email is empty";
			$isValid = false;
		}
		else {
			setcookie("field8", $f8, time() + 300, "/");
		}
		if (empty($f9)) {
			$_SESSION['u9'] = "Phone is empty";
			$isValid = false;
		}
		else {
			setcookie("field9", $f9, time() + 300, "/");
		}
		if (empty($f10)) {
			$_SESSION['u10'] = "Website is empty";
			$isValid = false;
		}
		else {
			setcookie("field10", $f10, time() + 300, "/");
		}
		if (empty($f11)) {
			$_SESSION['u11'] = "Select country";
			setcookie("field11", "Select", time() + 300, "/");
			$isValid = false;
		}
		else {
			$_SESSION['u11'] = "";
			setcookie("field11", $f11, time() + 300, "/");
		}
		if (empty($f12)) {
			$_SESSION['u12'] = "Select city";
			setcookie("field12", "Select", time() + 300, "/");
			$isValid = false;
		}
		else {
			$_SESSION['u12'] = "";
			setcookie("field12", $f12, time() + 300, "/");
		}
		// if (empty($f13)) {
		// 	$_SESSION['u13'] = "Road no is empty";
		// 	$isValid = false;
		// }
		// else {
		// 	setcookie("field13", $f13, time() + 300, "/");
		// }
		// if (empty($f14)) {
		// 	$_SESSION['u14'] = "Post code is empty";
		// 	$isValid = false;
		// }
		// else {
		// 	setcookie("field14", $f14, time() + 300, "/");
		// }
		if (empty($f15)) {
			$_SESSION['u15'] = "Username is empty";
			$isValid = false;
		}
		else {
			setcookie("field15", $f15, time() + 300, "/");
		}
		if (empty($f16)) {
			$_SESSION['u16'] = "Password is empty";
			$isValid = false;
		}
		else {
			setcookie("field16", $f16, time() + 300, "/");
		}
		if (empty($f17)) {
			$_SESSION['u17'] = "Please confirm password";
			$isValid = false;
		}
		else {
			setcookie("field17", $f17, time() + 300, "/");
		}
		if (!$isValid) {
			header("Location:tsessionform.php");
		}
		else {
			header("Location:home1.php");
		}
		}
	}
	
?>