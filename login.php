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
            <form action="includes/login.inc.php" method="post" class="signup-wrapper">
                <input type="text" name="uid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Log In</button>
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
</body>

</html>