<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "myDB");
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else echo "Connection";
