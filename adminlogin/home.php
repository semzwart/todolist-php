<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit();
}

include '../includes/sidebar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>


<div style="margin-left:25%;height:auto; overflow-x: hidden;">
    <body class="loggedin">
    <?php 
        include '../includes/header.php';
    ?>
    <div class="content">
        <h2>Dashboard</h2>

        <div class="blockscontainer">

        <div class="blocks">
            <div class="blockitem" style="background-color: red;"><i class="fas fa-address-card"></i></div>
            <div class="blockitem" style="background-color:dodgerblue; "><i class="fas fa-user"></i></div>
            <div class="blockitem" style="background-color:	#fbbc05; "><i class="fas fa-file-upload"></i></div>
        </div>
        <div class="blocks">
            <div class="blockitem" style="background-color:#34a853; "></div>
            <div class="blockitem" style="background-color: purple;"></div>
            <div class="blockitem" style="background-color: "></div>
        </div>
        </div>
    </div>
    </body>
</div>
<?php
include '../includes/footer.php';
?>

