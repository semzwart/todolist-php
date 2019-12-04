<?php

//// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit();
}


include './includes/sidebar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="./adminlogin/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

</html>
<div style="margin-left:25%;height:auto; overflow-x: hidden;">
    <body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>ZWART WEBSOLUTIONS</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Adressbook</h2>
        <?php require_once 'proces.php'; ?>
        <div>
            <form class="addaddress" action="proces.php" method="POST">
                <span>Company name:</span>
                <input type="name" name="companyname" placeholder="Comapny name">
                <span>Company address:</span>
                <input type="name" name="companyaddress" placeholder="Company address">
                <span>Company Mail:</span>
                <input type="email" name="companymail" placeholder="Company mail">
                <span>Company phonenumber:</span>
                <input type="number" name="companyphonenumber" placeholder="Company phone number">
                <span>Company contact person:</span>
                <input type="name" name="companycontactperson" placeholder="Company contact person">
                <span>Contact person address:</span>
                <input type="name" name="contactpersonaddress" placeholder="Contact person address">
                <span>Contact person mail:</span>
                <input type="email" name="contactpersonmail" placeholder="Contact person mail">
                <span>Contact person phonenumber:</span>
                <input type="number" name="contactpersonphonenumber" placeholder="Contact person phonenumber">
                <span>Notes</span>
                <textarea placeholder="Notes"name="notes"></textarea>
                <br>
                <br>
                <button type="submit" name="addaddress">Add</button>
            </form>
        </div>
    </div>
    </body>
</div>
