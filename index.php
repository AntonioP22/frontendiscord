<?php
include_once 'header.php';
?>


<section class="mid-section">

  <h2>Welcome to the our open-source project!</h2>
  <article>
    <p>If you'd like to contribute please read GitHub's contributing rules and guidelines. Then reach out with either a pull request or username to become a contributor!</p>

  </article>
  <?php
if (isset($_SESSION['userUid'])) {
  echo "<p>You are logged in " . $_SESSION["userUid"] . "</p>";
}
?>
</section>

<?php
include_once 'footer.php';
?>