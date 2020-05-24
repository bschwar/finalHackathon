<?php
require_once("model.php");
	require("header.php");
	
	
?>
<h1 id="center4">Science</h1>

<?php
	$str="Science";
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		$pages=getPretest($_SESSION['id'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admin'><a href='middle.php?id={$row['id']}'>{$row['name']}</a></div>";
		}
	}
	require("footer.php");
	
	
	