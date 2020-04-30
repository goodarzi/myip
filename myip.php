<?php
$agent = strtok($_SERVER['HTTP_USER_AGENT'], '/');

if (strcasecmp($agent, 'Curl') == 0) {

	echo "\nYour IP address is " . $_SERVER["REMOTE_ADDR"] . "\n\n";
} else {

?>
<html>
	<head>
		    <title>Show my ip address</title>
	</head>
	<body>
		Your IP address is: <?php echo $_SERVER["REMOTE_ADDR"]; ?>
	</body>
</html>
<?php
}
?>
