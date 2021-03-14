<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alivio</title>
    <link rel="icon" href="./img/Logo.svg">
    <link rel="stylesheet" href="./css/stylepage2.css">
</head>

<body>
    <!-- *********       HEADER             ********** -->
    <header>
        <div class="containerheader">
            <div>
                <img src="./img/Logo.svg" alt="Be aware">
            </div>

            <nav class="navheader">
                <a href="#section1">Why Alivio</a>
                <a href="#section3">Solutions</a>
                <a href="#section4">Community</a>
                <a href="https://business.google.com/v/sokha-royal-spa-miromesnil/015596358167222917005/fe93/_?caid=10765711192&agid=105526760385&gclid=EAIaIQobChMI96_Svr2l7wIVxIjVCh0KGwqwEBAYASAAEgJBwfD_BwE&gclid=EAIaIQobChMI96_Svr2l7wIVxIjVCh0KGwqwEBAYASAAEgJBwfD_BwE"
                    target="_blank">Pricing</a>
            </nav>

        </div>
    </header>


    <section id="contact">
        <div>
            <img class="womanhands" src="./img/womanwithhandsonhead.jpg" alt="welcome">
        </div>

        <h1>WELCOME</h1>
        <form method="POST" action="index.php" id="form-contact">
            <label for="lastname">Last Name<span class="required">*</span></label>
            <input type="text" id="lastname" name="lastname" required autofocus>
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname">
            <label for="mail">E-mail<span class="required">*</span></label>
            <input type="email" id="mail" name="Email" placeholder="  @ " value="" required>
            <label for="yourstress">Tell us your stress<span class="required">*</span></label>
            <textarea rows="15" placeholder="Tell us your stress"></textarea>
            <button type="submit">Contact me</button>
        </form>
    </section>







<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ( empty($_POST['firstnumber']) or empty($_POST['secondnumber']) or empty($_POST['operator'])){
        echo "veuillez remplir le formulaire"
