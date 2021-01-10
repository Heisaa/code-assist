<?php

if (isset($_POST["submit"])) {
    $time = $_POST["time-slot"];
    $user = $_POST["user"];
    $subject = $_POST["subject"];

    require_once('dbh.inc.php');

    if (empty($time) || empty($user) || empty($subject)) {
        header("location: ../booking.php?error=emptyinput");
        exit();
    }

    if (!preg_match("/^[0-9\/\s:-]*$/",$time) || !preg_match("/^[0-9]*$/", $user) || !preg_match("/^[a-zA-Z\s]*$/", $subject)) {
        header("location: ../booking.php?error=inputerror");
        exit();
    }

    // Add booking to database
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

    // Send email to user to confirm
    $sqlUser = "SELECT usersEmail FROM users WHERE usersId = ?;";
    $stmtUser = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmtUser, $sqlUser)) {
        header("location: ../signup.php?error=emailsendstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmtUser, "i", $user);
    mysqli_stmt_execute($stmtUser);

    $resultData = mysqli_stmt_get_result($stmtUser);
    $row = mysqli_fetch_assoc($resultData);

    $to = $row["usersEmail"];
    $subjectMail = "Booking confirmation";
    $message = "Hi!\n\nThank you for your booking for " 
                . $subject . " at " . $time 
                . "\n\nRegards CodeHelper";
    $headers = "From: bookings@codeHelper.com";

    mail( $to, $subjectMail, $message, $headers);

    header("location: ../booking.php?error=none");
    exit();
}
