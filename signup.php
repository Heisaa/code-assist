<?php
include_once "header.php";
?>

<style>
    <?php include "css/form-styling.css"; ?>
</style>

<main>
    <div class="wrapper">
        <div class="form-wrapper">
            <h2>Sign up to CodeHelper!</h2>
            <form action="includes/signup.inc.php" method="post" class="signup-wrapper">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                <button type="submit" name="submit">Sign up</button>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill all fields</p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Username can only include letters and numbers</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords don't match</p>";
                } else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already taken</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, please try again later</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
            ?>
        </div>
    </div>
</main>



<?php
include_once "footer.php";
?>
</div>
<!-- Scripts -->
<script src="js/notransitions.js"></script>
</body>

</html>