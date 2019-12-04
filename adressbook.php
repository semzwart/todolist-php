<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit();
}


include './includes/dbconn.php';
include './includes/sidebar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="./adminlogin/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

</html>
<div style="margin-left:25%;height:auto; overflow-x: hidden;">
    <body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Adressbook</h2>
        <div>
            <?php
            $sql = "SELECT * FROM addressbook";
            $result = $con->query($sql);
//            pre_r($result);
//            pre_r($result->fetch_assoc());
            ?>
<!--            ++++++HTML++++-->
            <div class="addresstable">
                <p style="font-style: italic;">Scroll naar rechts voor meer records</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Actie:</th>
                        <th>Bedrijfsnaam</th>
                        <th>Bedrijfs adres</th>
                        <th>Bedrijfs MAIL</th>
                        <th>Bedrijfs TEL</th>
                        <th>Contactpesoon</th>
                        <th>Contactpersoon adres</th>
                        <th>Contactpersoon MAIL</th>
                        <th>Contactpersoon TEL</th>
                        <th>Notitie's.......................................................................................................</th>
                    </tr>
                    </thead>
                    <?php
                    while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <a href="adressbook.php?edit=<?php echo $row['id']; ?>"
                               class="btn btn-info">Edit</a>
                            <a href="proces.php?delete=<?php echo $row['id']; ?>"
                               class="btn btn-danger">Delete</a>
                        </td>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['companyaddress']; ?></td>
                        <td><?php echo $row['companymail']; ?></td>
                        <td><?php echo $row['companyphonenumber']; ?></td>
                        <td><?php echo $row['companycontactperson']; ?></td>
                        <td><?php echo $row['contactpersonaddress']; ?></td>
                        <td><?php echo $row['contactpersonmail']; ?></td>
                        <td><?php echo $row['contactpersonphonenumber']; ?></td>
                        <td style="font-size: 10px;"><?php echo $row['notes']; ?></td>
                    </tr>
                    <?php
                    endwhile;
                    ?>

                </table>
            </div>

            <?php

            function pre_r( $array ) {
                echo'<pre>';
                print_r($array);
                echo'</pre>';
            }
            ?>
        </div>
    </div>
    </body>
</div>
