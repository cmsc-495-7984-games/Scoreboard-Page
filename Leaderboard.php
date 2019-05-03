
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
    include('Score_Request.php');
    for ($i = 0; $i <= 9; $i++) {
      echo "
      <tr>
        <td>" . ($i + 1) . "</td>
        <td>" . $scoreboard_user[$i] . "</td>
        <td>" . $scoreboard_score[$i] . "</td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
