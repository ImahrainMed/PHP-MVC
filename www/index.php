<?php

require 'vendor/autoload.php';

use App\Router\Router;
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>PHP Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar{
            margin-bottom: 70px;
        }
        .general{
            margin: 0px 25% 0px 25%;
        }
        .table{
            margin-top: 55px;
        }
    </style>
</head>
<body>
<?php
Router::handleRequest();
?>
</body>
</html>
