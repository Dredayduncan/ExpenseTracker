<?php
session_start();

$output = shell_exec('python statistics.py '. $_SESSION["id"].' 2>&1');
echo $output;

?>