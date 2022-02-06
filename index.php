	// create 1 file -> ip.log
	$file = fopen ('ip.log', 'a+');
	fwrite($file, date('Y-m-d H:i:s') . " - $user_ip" . " - $agent \r\n")
