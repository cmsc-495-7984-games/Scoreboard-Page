<?php include('Score_Request.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MiBGa Leaderboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);



.body{
  position: fixed;
  overflow-y: scroll;
  width: 100%;
top: -20px;
left: -20px;
right: -40px;
bottom: -40px;
width: auto;
height: auto;
background-image: url(MIGBa_Background.gif);
background-size: cover;
-webkit-filter: blur(0px);
}

.header{
position: absolute;
top: calc(50% - 35px);
left: calc(50% - 255px);

}

.header div{
float: center;
color: #000080;
font-family: 'Exo', sans-serif;
font-size: 40px;
font-weight: 200;
}

.header div span{
color: #F29E20 !important;
}

::-webkit-input-placeholder{
 color: rgba(17,5,121,1);
}

::-moz-input-placeholder{
 color: rgba(255,255,255,0.6);
}

table {
color: rgba(17,5,121,1);
}

h1 {
  font-size: 4em;
  color: rgba(17,5,121,1);
}

</style>

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
    for ($i = 0; $i <= 10; $i++) {
      echo "
      <tr>
        <td>" + $i + "</td>
        <td>" + $scoreboard_user + "</td>
        <td>" + $scoreboard_score + "</td>
      </tr>";
      ;
    }
    ?>
  </table>
</body>
</html>
