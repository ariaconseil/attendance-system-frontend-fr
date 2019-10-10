<?php
require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Attendance System</title>
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
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <h1 class="mb-3">Bienvenue</h1>
            <p class="lead">
            sur l'interface de la pointeuse.
            </p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                     <a href="users.php" class="btn btn-lg btn-outline-secondary w-100 mb-3">Utilisateurs</a>
                </div>
                <div class="col-md px-2">
                     <a href="attendance.php" class="btn btn-lg btn-outline-secondary w-100 mb-3" >Pointeuse</a>
                </div>
            </div>
        </div>
    </div>
</html>
