<?php
session_start();
include("connecth.php");

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $_SESSION['message'] = "Appointment made successfully!";
    } else {
        $_SESSION['message'] = "Appointment failed!";
    }
    header("Location: index.php");
    exit();
}
?>









<!---<?php
session_start();
include("connecth.php");

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }
   header("Location: index.php");
    exit();

}
?>->



<!--<?php
session_start();
include("connecth.php"); // Ensure this file correctly connects to your database

if (isset($_POST['submit'])) {
    // Validate and sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    if ($email === false) {
        $message[] = 'Invalid email address!';
    } else {
        // Insert into database
        $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')");

        if ($insert) {
            $message[] = 'Appointment made successfully!';
        } else {
            $message[] = 'Appointment failed: ' . mysqli_error($conn);
        }
    }

    // Store messages in the session to display them on the form page
    $_SESSION['message'] = $message;

    // Redirect back to the form page
    header("Location: index.php");
    exit(); // Ensure no further code is executed after redirection
}
?>-->



