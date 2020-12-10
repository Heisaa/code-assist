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
            <form id="form" action="includes/signup.inc.php" method="post" class="signup-wrapper">
                <input type="text" name="name" id="name" placeholder="Full name" required>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <input type="text" name="uid" id="uid" placeholder="Username" required>
                <input type="password" name="pwd" id="pwd" placeholder="Password" required>
                <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat password" required>
                <button type="submit" name="submit">Sign up</button>
                <div id="errormessage">
                    <?php
                    if (isset($_GET["error"])) {
                        echo "<script>document.getElementById('errormessage').style.background = 'rgb(243, 121, 121)';</script>";
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
                            // Make background white
                            echo "<script>document.getElementById('errormessage').style.background = 'white';</script>";
                            echo "<p>You have signed up!</p>";
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</main>



<?php
include_once "footer.php";
?>
</div>
<!-- Scripts -->
<script src="js/notransitions.js"></script>
<script src="js/validation.js"></script>
</body>

</html>