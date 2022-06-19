<?php
    include_once 'header.php';
?>
<section>
    <h1>Test<h1>
    <p>here<p>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
</form>
<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Please fill in all fields.</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login info.</p>";
        }
    }
?>
</section>
</body>
<?php
    include_once 'footer.php';
?>