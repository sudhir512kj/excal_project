<html>
	<head>
		<title>Hash Recognizer</title>
	</head>
	<body style="background:url(wall.jpg);  background-repeat: no-repeat; background-size:100% 100%; height: 100%">
	</body>
</html>


<?php


$hash = $_POST['find_type_hash'];

	if($hash=="")
		exit('Enter a valid entry');
	if (preg_match("/^[ ]*$/",$hash))
		exit('Enter a valid entry');
//	if (!preg_match("/^[a-zA-Z0-9 :.$\/]*$/",$hash))	
/*		exit('Enter a valid entry');
if(shell_exec('python '.$hash.'.isspace()'))
echo "Enter a valid input";
else{*/
$output = shell_exec('python typefinder '.$hash);
echo "<center><font face='verdana'>". $output."</font></center>";
//}

?>
