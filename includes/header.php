<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Ruda:wght@500&family=Share+Tech+Mono&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Harry W</title>
    <script src="scripts/script.js" async></script>
  </head>

  <body<?php if($page = "projects") { 
    echo " class=\"projects-body\"";
  }  ?>>
    <div class="footer__wrapper">
      <div class="header__menu" onclick="myFunction(this)">
        <div class="header__menu--bar bar1"></div>
        <div class="header__menu--bar bar2"></div>
        <div class="header__menu--bar bar3"></div>
      </div>

      <div class="header__menu--overlay" id="menu">
        <ul>
          <li><a href="about.php">About me</a></li>
          <li><a href="projects.php">Projects</a></li>
          <!-- <li><a href="services.php">Services</a></li> -->
          <!-- <li><a href="contact.php">Contact</a></li> -->
        </ul>
      </div>

      <header class="header">