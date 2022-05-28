<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['ThisIsWhatFallingInLoveFeelsLike']) ===true){
    session_destroy();
    header("Location: song1.php?ThisIsWhatFallingInLoveFeelsLike");
}else if (isset($_REQUEST['Dungaw']) ===true){
    session_destroy();
    header("Location: song3.php?Dungaw");
}else if (isset($_REQUEST['SarilingMulto(SaPanaginip)']) ===true){
    session_destroy();
    header("Location: song4.php?SarilingMulto(SaPanaginip)");
}else if (isset($_REQUEST['Binhi']) ===true){
    session_destroy();
    header("Location: song5.php?Binhi");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>I Love You So-The Walters</title>
        <link rel="icon" type="image/x-icon" href="assets/icon.png" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <div id="header">
                    <img src="assets/icon.png" height="40" width="35" alt=""></div>
                <a class="navbar-brand" style= "font-family: Engravers Mt; color: #d1d1e0; margin-left: 5px;" href="index.php"> ElLyrics </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;"  href="?ThisIsWhatFallingInLoveFeelsLike">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-blue"style= "font-family: Verdana;" href="?ILoveYouSo">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Dungaw">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?SarilingMulto(SaPanaginip)">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Binhi">Song 5</a></li>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <style>
            body {
                background-image: url("images/pink.jpg");
                background-size: 1500px 1750px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = "font-family: Bookman Old Style, sans-serif;">
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>I Love You So</h2>";
                        echo "<p class='lead '>The Walters</p>";
                        echo "<br/>";
                
                        echo "<p> I just need someone in my life to give it structure </p>";
                        echo "<p> To handle all the selfish ways I'd spend my time without her </p>";
                        echo "<p> You're everything I want, but I can't deal with all your lovers </p>";
                        echo "<p> You're saying I'm the one, but it's your actions that speak louder </p>";
                        echo "<p> Giving me love when you are down and need another </p>";
                        echo "<p> I've gotta get away and let you go, I've gotta get over </p>";
                        echo "<br/>";

                        echo "<p> But I love you so </p>";
                        echo "<p> I love you so </p>";
                        echo "<p> I love you so </p>";
                        echo "<p> I love you so </p>";
                        echo "<br/>";

                        echo "<p> I'm gonna pack my things and leave you behind </p>";
                        echo "<p> This feeling's old and I know that I've made up my mind </p>";
                        echo "<p> I hope you feel what I felt when you shattered my soul </p>";
                        echo "<p> 'Cause you were cruel and I'm a fool </p>";
                        echo "<p> So please let me go </p>";
                        echo "<br/>";

                        echo "<p> But I love you so (please let me go) </p>";
                        echo "<p> I love you so (please let me go) </p>";
                        echo "<p> I love you so (please let me go) </p>";
                        echo "<p> I love you so </p>";
                        echo "<br/>";

            

                        ?>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-4 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Camille D. Magcamit</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
