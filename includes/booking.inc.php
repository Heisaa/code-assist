<?php

if (isset($_POST["submit"])) {
    $time = $_POST["time-slot"];
    $user = $_POST["user"];
    $subject = $_POST["subject"];

    require_once('dbh.inc.php');

    if (empty($time) || empty($user) || empty($subject)) {
        header("location: ../booking.php?error=emptyinput" . $time . $user . $subject);
        exit();
    }

    if (!preg_match("/^[0-9\/\s:-]*$/",$time) || !preg_match("/^[0-9]*$/", $user) || !preg_match("/^[a-zA-Z\s]*$/", $subject)) {
        header("location: ../booking.php?error=inputerror");
        exit();
    }

    $sql = "INSERT INTO bookings (bookingsTime, userId, bookingSubject) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../booking.php?error=stmtfailed");
        trigger_error($conn->error, E_USER_ERROR);
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sis", $time, $user, $subject);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../booking.php?error=none");
    exit();
}
