<?php
$url = $_SERVER['SERVER_NAME'] . "/kuskas/";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php if($page === "register-success") {echo '<meta http-equiv="refresh" content="3;URL=http://'.$url.'sign-in.php">' ;}?>
        <title>Title | Kuskas</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-switch.css" rel="stylesheet">
        <link href="css/style-themes.css" rel="stylesheet">
        <link href="css/blue-theme.css" rel="stylesheet">
        <link href="css/green-theme.css" rel="stylesheet">
        <link href="css/horizontal.css" rel="stylesheet">
        <link href="css/star-rating.css" rel="stylesheet">
        <link href="css/docs.min.css" rel="stylesheet">
        <link href="css/bootstrap-editable.css" rel="stylesheet">
    </head>
    <body class="theme-style green-theme">
        
            