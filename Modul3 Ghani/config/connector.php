<?php
$connector = new mysqli("localhost", "root", "", "modul4_ghani", 3308);

if (!$connector) {
  die("Connector Failed: " . $connector->connect_error);
}
