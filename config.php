<?php

date_default_timezone_set('UTC');

require "vendor/autoload.php";

// Server should keep session data for AT LEAST 1 hour
ini_set("session.gc_maxlifetime", 3600);

// Each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

// Start user session
session_start();

?>