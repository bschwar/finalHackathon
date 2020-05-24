  <?php
	require_once("model.php");
	session_destroy();
	require("header.php");
 
 header("Location: index.php"); 
		exit(0);
 
	require("footer.php");