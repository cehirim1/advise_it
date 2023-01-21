<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('../includes/connect.php');

$fallFirstClass = $_POST['fall-first-class'];
$fallSecondClass = $_POST['fall-second-class'];
$fallThirdClass = $_POST['fall-third-class'];
$fallNotes = $_POST['fall-notes'];
$generatedToken = $_POST['generated-token'];

//$sql = "INSERT INTO advise_it(`Student_Token`, `Fall_class_one`, `Fall_class_two`, `Fall_class_three`, `Notes`)
//        VALUES('$generatedToken', '$fallFirstClass', '$fallSecondClass', '$fallThirdClass', '$fallNotes')";
$success = mysqli_query($cnxn, $sql);

if(!$success) {
    die('Error: ' . mysqli_error($cnxn));
} else {
    header("location: https://sallen.greenriverdev.com/SDEV485_Advise-It/views/new-plan.php");
    exit();
}
