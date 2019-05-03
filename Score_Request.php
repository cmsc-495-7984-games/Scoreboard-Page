<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'MIBGa_DB_admin',
'PenguinPie', 'MIBGa_DB');

// initialize variables
$scoreboard_user = array();
$scoreboard_score = array();

// initalize the query
$query = "SELECT username, score FROM users ORDER BY score DESC LIMIT 10";

// get top 10 users, and scores in database, by score
$sqlQuery = mysqli_query($db, $query);

if ($sqlQuery) {
 echo "it works";
}
while($res = mysqli_fetch_assoc($sqlQuery)) {
  $scoreboard_user[] = $res['username'];
  $scoreboard_score[] = $res['score'];
}
?>
