<?php
$con = mysqli_connect("host","host_name","password","db_name");

 {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$sql = "INSERT INTO `translation` (`title`, `author`, `translator`, `language`, `subject`, `keyword`) VALUES
('$_POST[title]','$_POST[author]','$_POST[translator]','$_POST[language]','$_POST[subject]','$_POST[keyword]')"; if (!mysqli_query($con,$sql))
 {
 die('Error: ' . mysqli_error($con));
}
echo "Translation Added"; mysqli_close($con); 
?>

<?php
header("Location: index.html");
exit;
?>