<?php
// mysqli
$mysqli = new mysqli("mysql", "root", "mypassword", "sampledb");
$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);