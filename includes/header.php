<?php include "big-config.php";?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/bignav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/calendar.css" />
    <link rel="stylesheet" href="css/research.css" />
</head>

<body>
    
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Crosby's SCC WEB120 Portal</a></h1>
  <ul class='topnav'>
    <?=makeLinks($nav1)?>
  </ul>
</header>
 
<section>
    <h2 class="pageID"><?=$PageID?></h2>