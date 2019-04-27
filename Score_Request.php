<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'MIGBa_DB_admin',
'PenguinPie', 'MIBGa_DB');

// initialize variables
$scoreboard_user = array();
$scoreboard_score = array();

// get top 10 users in database, by score
$scoreboard_user = mysqli_query("SELECT username FROM MIBGa_DB ORDER BY score DESC LIMIT 10");

// get top 10 scores in the database
$scoreboard_score = mysqli_query("SELECT username FROM MIBGa_DB ORDER BY score DESC LIMIT 10");

$_SESSION['user'] = $scoreboard_user;
$_SESSION['score'] = $scoreboard_score;

?>
