<?php
require 'common.php';

//Grab all the users from our database
$users = $database->select("utilisateurs", [
    'id',
    'name',
    'rfid_uid'
]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pointeuse Aria Conseil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pointeuse Aria Conseil</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="attendance.php" class="nav-link">Pointeuse</a>
            </li>
            <li class="nav-item">
                <a href="users.php" class="nav-link active">Utilisateurs</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <h2>Utilisateurs</h2>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">N° Badge</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Loop through and list all the information of each user including their RFID UID
                foreach($users as $user) {
                    echo '<tr>';
                    echo '<td scope="row">' . $user['id'] . '</td>';
                    echo '<td>' . $user['name'] . '</td>';
                    echo '<td>' . $user['rfid_uid'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</html>
