<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['ThisIsWhatFallingInLoveFeelsLike']) ===true){
    session_destroy();
    header("Location: song1.php?ThisIsWhatFallingInLoveFeelsLike");
}else if (isset($_REQUEST['ILoveYouSo']) ===true){
    session_destroy();
    header("Location: song2.php?ILoveYouSo");
}else if (isset($_REQUEST['Dungaw']) ===true){
    session_destroy();
    header("Location: song3.php?Dungaw");
}else if (isset($_REQUEST['SarilingMulto(SaPanaginip)']) ===true){
    session_destroy();
    header("Location: song4.php?SarilingMulto(SaPanaginip)");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Binhi-Arthur Nery</title>
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
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?ILoveYouSo">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?Dungaw">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: Verdana;" href="?SarilingMulto(SaPanaginip)">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-blue"style= "font-family: Verdana;" href="?Binhi">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
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
                    <div class="col-lg-12 text-center" style = 'font-family: Bookman Old Style, sans-serif;'>
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>Binhi</h2>";
                        echo "<p class='lead '>Arthur Nery</p>";
                        echo "<br/>";
                
                        echo "<p> 'Di ko na nadiligan </p>";
                        echo "<p> Ang binhi ng iyong pagmamahal </p>";
                        echo "<p> Ayoko nang sapilitang </p>";
                        echo "<p> Ibuhos ang lahat ng dinadamdam </p>";
                        echo "<br/>";

                        echo "<p> Ang tangi kong hiling ay mahawakan</p>";
                        echo "<p> Ang iyong mga kamay at daliri</p>";
                        echo "<p> Habang dahan-dahang haplusin ng mga salita</p>";
                        echo "<p> Ang puso mong sabik mayakap 'pag nag-iisa</p>";
                        echo "<br/>";

                        echo "<p> Kaya tahan na oh</p>";
                        echo "<p> Sumandal ka oh</p>";
                        echo "<p> Hayaan mo na aking paglaruan</p>";
                        echo "<p> Apoy ng iyong labi oh paraluman</p>";
                        echo "<br/>";

                        echo "<p> Binibining natutulog</p>";
                        echo "<p> Sa ilalim ng aking mga bulaklak</p>";
                        echo "<p> 'Di mababaon sa limot</p>";
                        echo "<p> Ang ligayang hatid ng iyong halimuyak</p>";
                        echo "<br/>";

                        echo "<p> Alak lamang ang pamunas sa natira</p>";
                        echo "<p> Mong alaalang 'di kumupas at kahit na</p>";
                        echo "<p> Ipilit ko mang ibalik pa ang dati</p>";
                        echo "<p> Tayo'y mawawala pa rin</p>";
                        echo "<br/>";

                        echo "<p> Kaya tahan na oh</p>";
                        echo "<p> Sumandal ka oh</p>";
                        echo "<p> Hayaan mo na aking paglaruan</p>";
                        echo "<p> Apoy ng iyong labi oh paraluman</p>";
                        echo "<br/>";

                        echo "<p> Ilang araw nang nakahiga</p>";
                        echo "<p> Tuluyan na nga bang ako'y iyong nilisan</p>";
                        echo "<p> Kahit saglit pwede bang mahawakan</p>";
                        echo "<p> 'Di na kailangang lumayo halika sa akin</p>";
                        echo "<p> 'Di na muling mabibigo ako ay yakapin</p>";
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
