<?php
  $file = fopen("txt/users.txt", "r");
  if ($file) {
    while (($line = fgets($file)) !== false) {
      $user = explode(",", $line);

    }
  }

  fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Leaderboards</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <?php include("gameLogic.php"); ?>
  <?php include("common.php"); ?>
</head>
<body class="game-body">
  <div class="nav-bar">
    <a href="index.php">Home</a>
    <h1>HANGMAN</h1>
    <a class="nav-left" href="login.php"><?php echo getUsername();?></a>
  </div>
  <div class="leader-columns">
    <div class="column">
      <h2 class="easy">EASY</h2>
      <ul>
        <li>user1</li>
        <li>user2</li>
        <li>user3</li>
      </ul>
    </div>

    <div class="column">
      <h2 class="medium">MEDIUM</h2>
      <ul>
        <li>user2</li>
        <li>user1</li>
        <li>user3</li>
      </ul>
    </div>

    <div class="column">
      <h2 class="hard">HARD</h2>
      <ul>
        <li>user3</li>
        <li>user2</li>
        <li>user1</li>
      </ul>
    </div>

    <div class="column">
      <h2 class="expert">EXPERT</h2>
      <ul>
        <li>user3</li>
        <li>user1</li>
        <li>user2</li>
      </ul>
    </div>
  </div>
</body>
</html>