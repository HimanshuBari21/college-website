<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: Faculty_Login_Page.html");

?>
