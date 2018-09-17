<?php

session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
echo "<h2>_POST</h2>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<h2>_GET</h2>";
echo "<pre>";
var_dump($_GET);
echo "</pre>";
?>