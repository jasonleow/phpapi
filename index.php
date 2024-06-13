<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$handle = new SQLite3("data.db");
$db = "student";
$res = $handle->query("select * from " . $db);

$data = [];
while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
    array_push($data, $row);
}

// return the output as JSON to the WWW server
print (json_encode($data));

?>
