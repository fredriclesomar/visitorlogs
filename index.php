	// create 1 file -> ip.log
	$file = fopen ('ip.log', 'a+');
	fwrite($file, date('Y-m-d H:i:s') . " - $user_ip" . " - $agent \r\n")


	$user_ip = $_SERVER['REMOTE_ADDR'];
	$agent = $_SERVER['HTTP_USER_AGENT'];
