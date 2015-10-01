<?php
/*
----------------------------------------------------------------------------

    KRZYSZTOF JANKOWSKI
    P1X.in VER 4

    abstract: indie game developement studio
    created (v1): 29-09-2013
    updated (v2): N/A
    updated (v3): 21.06.2014
    updated (v4): 10.04.2015

    licence: do what you want and dont bother me

    webpage: http://krzysztofjankowski.com
    twitter: @w84death

----------------------------------------------------------------------------
*/
include_once('app/engine.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>P1X</title>
    <meta name="description" content="P1X is an independent game developement studio localized in Poland. Creators of Piradice, BitWars and Tanks of Freedom.">
    <meta name="author" content="P1X Krzysztof Jankowski">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightbox.css" />
    <link rel="stylesheet" href="css/p1xgrid.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="app/lib/jquery-1.11.2.min.js"></script>
    <script src="app/lib/lightbox-2.6.min.js"></script>
</head>
<body>

    <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <?php element('nav'); ?>
        <article><?php article(); ?></article>
        <?php element('footer'); ?>
    </div>

    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-85559-12', 'auto');
          ga('send', 'pageview');

    </script>
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>