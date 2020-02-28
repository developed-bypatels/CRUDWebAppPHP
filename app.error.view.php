<!--StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->


<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
</head>
<body>
  <?php
function errorHandling($errno, $errstr, $errfile, $errline, $errcontext){
    $message = date("F j, Y, g:i a");
    $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
    $message .= "Variables:" . print_r($errcontext, true);
    
    error_log($message, 1, "xyz@xyz.com");
    die("Error, connecting to the database.");
}
set_error_handler("errorHandling");
?>
</body>
</html>
