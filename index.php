<?php
    include_once 'header.php';
?>
    <h1>Frontend Discord Community</h1>
        <?php
          if (isset($_SESSION['userUid'])) {
            echo "<p>You are logged in " . $_SESSION["userUid"] . "</p>";
          }
        ?>
<?php
    include_once 'footer.php';
?>