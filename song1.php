<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['ILoveYouSo']) ===true){
    session_destroy();
    header("Location: song2.php?ILoveYouSo");
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
        <title>This Is What Falling In Love Feels Like-Jvke</title>
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
                        <li class="nav-item"><a class="nav-link text-blue"style= "font-family: Verdana;"  href="?ThisIsWhatFallingInLoveFeelsLike">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?ILoveYouSo">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Dungaw">Song 3</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?SarilingMulto(SaPanaginip)">Song 4</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Binhi">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- About section-->
        <style>
            body {
                background-image: url("images/pink.jpg");
                background-size: 1500px 1750px;
            }
        </style>
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = 'font-family: Bookman Old Style, sans-serif;'">

                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>This Is What Falling In Love Feels Like</h2>";
                        echo "<p class='lead '>Jvke</p>";
                        echo "<br/>";
                
                        echo "<p> Feel like sun on my skin </p>";
                        echo "<p> So this is love, I know it is </p>";
                        echo "<p> I know it sounds super cliché </p>";
                        echo "<p> But you make me feel some type of way </p>";
                        echo "<p> This is falling, falling in love, yeah </p>";
                        echo "<br/>";

                        echo "<p> Mh-mh-mh-mh-mh-mmh, yeah </p>";
                        echo "<br/>";

                        echo "<p> I got a lot on my mind </p>";
                        echo "<p> Got some more on my plate </p>";
                        echo "<p> My baby got me looking forward to the end of the day </p>";
                        echo "<p> What you say? You and me </p>";
                        echo "<p> Just forget about the past, throw it in the trash </p>";
                        echo "<p> What you say? You and me </p>";
                        echo "<p> Live the life we never had like we're never going back </p>";
                        echo "<br/>";

                        echo "<p> Feel like sun on my skin </p>";
                        echo "<p> So this is love, I know it is </p>";
                        echo "<p> I know it sounds super cliché </p>";
                        echo "<p> But you make me feel some type of way </p>";
                        echo "<p> This is falling, falling in love </p>";
                        echo "<br/>";

                       echo "<p> I know it sounds super cliché </p>";
                        echo "<p> But you make me feel some type of way </p>";
                        echo "<p> This is falling, falling in love (yeah) </p>";
                        echo "<p> This is falling, falling in love (ooh) </p>";
                        echo "<p> This is falling, falling in love </p>";
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
