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
                <div id="errormessage"></div>
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