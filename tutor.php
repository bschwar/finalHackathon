<?php
require_once("model.php");
	require("header.php");
	if(isset($_SESSION['pretest'])){
	$count = $_SESSION['pretest'];
	echo "<h2> You got a $count/5. So let help you bring that up some!</h2>";
	}
	$test=selectTutor($_SESSION['id'],$_GET['id']);
	$test2=selectTutor2($_GET['id']);
	$data = $test2 -> fetch_assoc();
	$_SESSION['type']= $test;
	echo $data[$test];


echo"<div id='admin'><a href='posttest.php?id={$_GET['id']}?type={$test}'>Move on</a></div>";

	require("footer.php");