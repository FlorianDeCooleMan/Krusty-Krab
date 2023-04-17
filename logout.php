<!-- zorgen dat de session weggaat en je dus uitlogt -->
<?php
//logout.php  
session_start();
session_destroy();
header("location:log-in.php");
?>