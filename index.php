<!DOCTYPE html>

<?php
	require("config.php");

	if (isset($_GET["page"])){
		$page = $_GET["page"];
	$query = "SELECT * FROM pagecontent WHERE page = '$page'";
	} else{
		$query = "SELECT * FROM pagecontent WHERE page = 'home'";
	}
	
	$result = $db->query($query);
	
	$records = $result->fetch_assoc();

	if (!isset($records['content'])){
		echo "error 404 - File not found"; 
		$content = "";
	} else{
		global $content;
		$content = $records['content'];
	}

?>

<html>
<head>
	<title>Doomla</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<section>
		<article>

			<p><?= $content;?></p>

		</article>	
	</section>
</body>
</html> 