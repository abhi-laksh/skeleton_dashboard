<?php include_once(__DIR__."/../config.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width ,  initial-scale=1.0" name="viewport">
    <!-- CSS Libraries -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous"> -->
    <link href="<?php echo ROOT.'/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo ROOT.'/css/fontawesome.min.css' ?>" rel="stylesheet">
    <link href="<?php echo ROOT.'/main.css' ?>" rel="stylesheet">

    <title>
        Dashboard
    </title>
</head>

<body>

    <!-- Place Modal as immediate child of BODY due to z-index issues -->
    <?php
        require(__DIR__."/commons/modal_dynamic.php");
    ?>
    <div id="root">

<section id="section-dashboard">
    <?php
        require(__DIR__."/commons/sidenav.php");
    ?>
    <section id="section-right" class="section-right">
        <?php
            require(__DIR__."/topbar/topbar.php");
        ?>
        <div class="p-3 section-main">