<?php

error_reporting(0);
$con = mysqli_connect("localhost","root","@chrissngure254%%","agritrans");
if(count($_POST)>0) {
$translation = $_POST[translation];
$result = mysqli_query($con,"SELECT * FROM translation ");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Translating Open Agricultural Research to Local Language Project</title>
		<!-- link to main stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<title> Translations Data </title>
	<style>
	p {
	}
	</style>
</head>
<body>
	<img src="ban.jpg"> </img>
	<table>

		<?php

		$i=0;
		while($row = mysqli_fetch_array($result)) {
		
			?>
				<p></p>
				<?php echo $row["id"]; ?> Original article's title: <?php echo $row["title"]; ?><br>
				By: <?php echo $row["author"]; ?> Translated By: <?php echo $row["translator"]; ?><br>
				Language: <?php echo $row["language"]; ?><br>
				Subject: <?php echo $row["subject"]; ?><br>
				Keyword: <?php echo $row["keyword"]; ?><br>

			<?php

			$i++;
		}
		?>
	</table>
	<footer>
		<ul>
    		<li><a href="mailto:solomon3m@gmail.com">email</a></li>
    		<li><a href="https://github.com/agritrans/agritrans.github.io">github.com/agritrans</a></li>
		</ul>
	</footer>
</body>
</html>