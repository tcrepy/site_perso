<!DOCTYPE html>
<html>
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>public/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<body>

<!-- Uses a header that contracts as the page scrolls down. -->
<style>
    .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type {
        padding-right: 0;
    }
</style>

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <a class="mdl-navigation__link" href="<?php echo base_url()?>"><span class="mdl-layout-title">Saint Pavut</span></a>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="<?php echo base_url() ?>">Accueil</a>
                <a class="mdl-navigation__link" href="<?php echo base_url() ?>catalogue/">Catalogue</a>
                <a class="mdl-navigation__link" href="<?php echo base_url() ?>Salle/">Salle</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="<?php echo base_url() ?>">Accueil</a>
            <a class="mdl-navigation__link" href="<?php echo base_url() ?>catalogue/">Catalogue</a>
            <a class="mdl-navigation__link" href="<?php echo base_url() ?>Salle/">Salle</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">