<?php
if (isset($_POST['Upload'])) {

if( $_FILES['file']['name'] != "" )
{
echo basename($_FILES['file']['name']);
   copy( $_FILES['file']['name'], "/uploads/" ) or 
           die( '<a href="index1.html"><input type="submit" value="Back" name="Back"/></a><br><br>
		Could not copy file!');
}
else
{
    die('<a href="index1.html"><input type="submit" value="Back" name="Back"/></a><br><br>
	 No file specified!');
}

echo $_FILES['file']['name'];

}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['file']['name'];  ?>
<li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['file']['type'];  ?>
</ul>
<a href="index1.html"><input type="submit" value="Back" name="Back"/></a>
</body>
</html>
