<?php
//$type = $_POST['algo'];
$name = $_POST['plaintext'];
$type = $algo;
if($type=="" || $name=="")
exit('Invalid input<br><br><a href="index.html"><input value="Back" type="submit" name="back" /></a>');
//$type='sha224';
$i=0;
$params = array ('action'=>'ajax_hash', 'text'=>$name, 'algo'=>$type);
 
// Build Http query using params
$query = http_build_query ($params);
 
// Create Http context details
$contextData = array ( 
                'method' => 'POST',
		            
		'header' => "Connection: close\r\n".
                            "Content-Length: ".strlen($query)."\r\n".
			    "Content-Type: application/x-www-form-urlencoded",
                'content'=> $query );
 
// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));
 
// Read page rendered as result of your POST request
$result =  file_get_contents (
                  'https://www.tools4noobs.com/',  // page url
                  false,
                  $context);

echo $result."<br>";
echo '<a href="index.html"><input value="Back" type="submit" name="back" /></a>';
/*$list[$i++] = $result;
//------------------------------------------------------------------------------------------------------------------------------------------------
$params = array ('action'=>'ajax_hash', 'text'=>'ajslfd', 'algo'=>'sha256');
 
// Build Http query using params
$query = http_build_query ($params);
 
// Create Http context details
$contextData = array ( 
                'method' => 'POST',
		            
		'header' => "Connection: close\r\n".
                            "Content-Length: ".strlen($query)."\r\n".
			    "Content-Type: application/x-www-form-urlencoded",
                'content'=> $query );
 
// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));
 
// Read page rendered as result of your POST request
$result =  file_get_contents (
                  'https://www.tools4noobs.com/',  // page url
                  false,
                  $context);

$list[$i++] = $result;
//------------------------------------------------------------------------------------------------------------------------------------------------
var_dump($list);*/
//echo $result;
// Server response is now stored in $result variable so you can process it
?>