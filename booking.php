<?php
include_once "header.php";
?>

<style>
    <?php include "css/form-styling.css"; ?><?php include "css/calendar.css"; ?>
</style>

<main>
    <div class="wrapper calendar-wrapper">
        <h2>Book a tutoring lesson</h2>
        <div class="time-chooser">
            <i class="fas fa-arrow-alt-circle-left" onclick="left()"></i>
            <div id="time"></div>
            <i class="fas fa-arrow-alt-circle-right" onclick="right()"></i>
        </div>
        <div id="calendar">
        </div>
        <div id="confirm-box">
            <div id="top-containter">
                <a href="#" id="close"></a>
            </div>
            <div id="main-container">
                <h2 id="confirm-time"></h2>
                <form action="" method="post" id="booking-form">
                    <label for="subject-selection">Choose a subject</label>
                    <select name="subject" id="subject-selection">
                        <option value="basic">Basic programming</option>
                        <option value="web">Web development</option>
                        <option value="OOP">Object oriented programming</option>
                    </select>

                    <button type="submit">Book</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include_once "footer.php";
?>
</div>
<!-- Scripts -->
<script src="js/notransitions.js"></script>
<script src="js/booking.js"></script>
</body>

</html>