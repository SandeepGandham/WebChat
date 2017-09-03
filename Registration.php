




<?php

$connection = new SQLite3('trail.db');
$CreateQuery = 'CREATE TABLE IF NOT EXISTS UserData(UserId char(30), UserName char(30), Password char(30), Status char(2))';
$InsertQuery = "INSERT INTO UserData(UserId,UserName,Password,Status) VALUES ('".$_GET["UserId"]."','".$_GET["UserName"]."','".$_GET["Password"]$
$connection->exec($CreateQuery);
$connection->exec($InsertQuery);
$sql = "SELECT * FROM UserData";
$results = $connection->query($sql);
while ($row = $results->fetchArray(SQLITE#_ASSOC)) {
echo "UserId: ".$_GET["UserId"]."\n"
echo "UseName: ".$_GET["UserName"]."\n"
 }
?>
