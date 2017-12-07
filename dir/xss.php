<?php
/**
 *  MOPAS Cross-site Scripting Example 1
 */
// TODO: AI issue #18, Medium, XSS, http://desktop-mh1kvhh:8080/#/taskResults/21
// GET /dir/xss.php?a=%3Cscript%3Ealert%281%29%3C%2Fscript%3E HTTP/1.1
// Host: localhost
// Accept-Encoding: identity
// Connection: close
echo $_GET['a'];
?>