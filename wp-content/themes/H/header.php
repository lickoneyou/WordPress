<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <title><?php
    bloginfo('name');
    echo ' | ';
    bloginfo('description');
    ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <nav class="nav">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#team">Team</a></li>
          <li class="logo">H</li>
          <li><a href="#services">Services</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>

      <nav class="mobileNav">
        <div class="logo">H</div>
        <div class="popUpBTN">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
      <div class="headerContainer">
        <h1 class="headerTitle">We build it with passion</h1>
        <h2 class="headerSubTitle">
          Just to be clear, we do this for fun not for you, just kidding.
        </h2>
        <button class="headerBTN">READ MORE</button>
      </div>
    </header>