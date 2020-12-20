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
        <?php
            include_once "includes/getBookings.inc.php";
            echo "<script>var bookedDates = " . json_encode($bookings) . "</script>";
            echo "<script>var userId = " . $_SESSION["userid"] . "</script>";
        ?>
        <div id="calendar">
        </div>
        <div id="confirm-box">
            <div id="top-containter">
                <a href="#" id="close"></a>
            </div>
            <div id="main-container">
                <h2 id="confirm-time"></h2>
                <form action="includes/booking.inc.php" method="post" id="booking-form">
                    <input type="hidden" name="time-slot" id="time-slot" value="">
                    <?php 
                        echo "<input type='hidden' name='user' id='user' value='" . $_SESSION["userid"] . "'>"
                    ?>
                    
                    <label for="subject">Choose a subject</label>
                    <select name="subject" id="subject">
                        <option value="Basic programming">Basic programming</option>
                        <option value="Web development">Web development</option>
                        <option value="Object oriented programming">Object oriented programming</option>
                    </select>

                    <button type="submit" name="submit">Book</button>
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