<?php include('Score_Request.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MiBGa Leaderboard</title>
  <link rel="stylesheet" type="text/css" href="boardStyle.css">
</head>
<body>
  <h1 align="center">- Top Ten -</h1>
  <table style="width: 100%" align="center">
    <tr>
      <th>Rank</th>
      <th>Score</th>
      <th>Username</th>
    </tr>
<!--   PHP loop to create table display   -->
    <?php
    session_start();
    for ($i = 0; $i <= 10; $i++) {
      echo "
      <tr>
        <td>" . $i . "</td>
        <td>" . $_SESSION['user'][$i] . "</td>
        <td>" . $_SESSION['score'][$i] . "</td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
