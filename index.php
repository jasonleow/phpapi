<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$handle = new SQLite3("data.db");

// Use a prepared statement with a parameterized query
$stmt = $handle->prepare("SELECT * FROM student");
$result = $stmt->execute();

$data = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    array_push($data, $row);
}

// return the output as JSON to the WWW server
print (json_encode($data));

?>
