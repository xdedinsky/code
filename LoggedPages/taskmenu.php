<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) 
 ?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mladý Kóder</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../Pictures/yellowrobot.ico">
</head>
<body class="ulohy">
    <header class="your-header-class">
        <div class="animated-title">
            <div class="letter">M</div>
            <div class="letter">L</div>
            <div class="letter">A</div>
            <div class="letter">D</div>
            <div class="letter">Ý</div>
            <div class="letterSpace"> </div>
            <div class="letter">K</div>
            <div class="letter">Ó</div>
            <div class="letter">D</div>
            <div class="letter">E</div>
            <div class="letter">R</div>
        </div>
        
        <nav class="navigation">
            <a href="index.php"><img class="menu-icon" src="../pictures/domov.png" alt="DomovIcon">Domov</a>
            <a href="taskmenu.php"><img class="menu-icon" src="../pictures/ulohy.png" alt="UlohyIcon">Úlohy</a>
            <a href="documentation.php"><img class="menu-icon" src="../pictures/dokumentacia.png" alt="DokumentaciaIcon">Dokumentácia</a>
            <a href="ranking.php"><img class="menu-icon" src="../pictures/rebricek.png" alt="RebricekIcon">Rebríček</a>
            <?php 
            if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                echo '<a href="../MainPages/index.php" class="btnLogout">' . $_SESSION['name'] . ' (Odhlásiť sa)</a>';
            } else {
                echo '<a href="prihlasit.php" class="btnLogin">Prihlásiť sa</a>';
            }
            ?>
        </nav>
    </header>
    
    <script src="../script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

<body>
    <div class="gallery">
        <img src="../Pictures/top.png" alt="top">
        <img src="../Pictures/right.png" alt="right">
        <img src="../Pictures/bottom.png" alt="bottom">
        <img src="../Pictures/left.png" alt="left">
    </div>
</body>
</html>
