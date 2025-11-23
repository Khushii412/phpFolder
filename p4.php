<?php
  
// Using $_SERVER superglobal to
// get server information
echo isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'Server name not available';
echo "\n";
echo isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'User agent not available';
echo "\n";
echo isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'Script name not available';
?>
