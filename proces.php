<?php

use http\Header;

include './includes/dbconn.php';


if (isset($_POST['addaddress'])) {
    $companyname = $_POST['companyname'];
    $companyaddress = $_POST['companyaddress'];
    $companymail = $_POST['companymail'];
    $companyphonenumber = $_POST['companyphonenumber'];
    $companycontactperson = $_POST['companycontactperson'];
    $contactpersonaddress = $_POST['contactpersonaddress'];
    $contactpersonmail = $_POST['contactpersonmail'];
    $contactpersonphonenumber = $_POST['contactpersonphonenumber'];
    $notes = $_POST['notes'];



        $sql = "INSERT INTO addressbook (companyname, companyaddress, companymail, companyphonenumber, companycontactperson, contactpersonaddress, contactpersonmail, contactpersonphonenumber, notes)
VALUES ('$companyname', '$companyaddress', '$companymail', '$companyphonenumber', '$companycontactperson', '$contactpersonaddress', '$contactpersonmail', '$contactpersonphonenumber', '$notes')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: adressbook.php?record_saved_succesfully');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}