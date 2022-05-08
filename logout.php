<!-- Ends session to logout user -->
<?php
session_start();   
session_unset(); 
session_destroy();
session_commit(); 
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);

header('location: login.php'); #brings user to login page once session has been ended
?>