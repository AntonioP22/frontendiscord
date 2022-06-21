<footer>
  <p>
    Coded by the Frontend Discord Community
    <?php
if (isset($_SESSION['userUid'])) {
  echo "<p>You are logged in " . $_SESSION["userUid"] . "</p>";
}
?>
  </p>
  <embed src="https://pngimg.com/uploads/github/github_PNG58.png" title="Click Me" />
</footer>
</body>

</html>