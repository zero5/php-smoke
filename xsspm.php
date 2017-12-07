<?php
	function foo()
	{
		// TODO: AI issue #13, Medium, XSS, http://desktop-mh1kvhh:8080/#/taskResults/15
		// GET /xsspm.php?%24a=%3Cscript%3Ealert%281%29%3C%2Fscript%3E HTTP/1.1
		// Host: localhost
		// Accept-Encoding: identity
		// Connection: close
		echo $_GET['$a'];
	}
?>