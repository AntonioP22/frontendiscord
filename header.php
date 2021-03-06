<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frontend Discord Community</title>
  <link rel="stylesheet" href="design/reset.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="resources/css/style.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/comic-mono@0.0.1/index.css">
</head>

<body>
  <header style="background-color: white;">
    <div>
      <h1>Frontend Discord Community</h1>
    </div>
    <div class="showLogin">
      <?php
      if (isset($_SESSION['userUid'])) {
        echo "<p>You are logged in " . $_SESSION["userUid"] . "</p>";
      }
      ?>
    </div>
    <nav>
      <ul class="navbar-nav" style="margin-right: 25px;">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="projects.php">Community Projects</a>
        </li>
        <li>
          <a href="discover.php">About Us</a>
        </li>
        <?php
        if (isset($_SESSION['userUid'])) {
          echo '<li><a href="profile.php">Profile Page</a></li>';
          echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
        } else {
          echo '<li><a href="signup.php">Sign up</a></li>';
          echo '<li><a href="login.php">Log in</a></li>';
        }
        ?>
      </ul>
    </nav>
  </header>