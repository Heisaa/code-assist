<?php
include_once "header.php";
?>
<style>
    <?php include "css/form-styling.css"; ?>
</style>

<main>
    <div class="wrapper">
        <div class="form-wrapper">
            <h2>Log In</h2>
            <form id="form" action="includes/login.inc.php" method="post" class="signup-wrapper">
                <input type="text" name="uid" id="nameemail" placeholder="Username/Email" required>
                <input type="password" name="pwd" id="pwd" placeholder="Password" required>
                <button type="submit" name="submit">Log In</button>
                <div id="errormessage">
                    <?php
                    if (isset($_GET["error"])) {
                        echo "<script>document.getElementById('errormessage').style.background = 'rgb(243, 121, 121)';</script>";
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Please fill all fields</p>";
                        } else if ($_GET["error"] == "wronglogin") {
                            echo "<p>Username/Email or password was not correct</p>";
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