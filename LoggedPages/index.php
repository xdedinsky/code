<?php 
session_start();
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
<body>
    
    <header>
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

    <div class="content">
        <div class="intro-container">
            <h1 class="intro-heading">Vitajte na stránke "Mladý kóder"!</h1>
        
            <p class="intro-text-white">
                Toto je miesto určené pre mládež vo veku 10-15 rokov, ktorí sa chcú naučiť programovať a zdokonaľovať svoje programátorské schopnosti. Na tejto stránke nájdete 3 úrovne zložitosti, ktoré Vám umožnia postupovať a zdokonaliť sa v programovaní. Za dané úlohy získavate body podľa úrovne.
            </p>
            <br>
            <p class="intro-text-white">
                Úlohy sú rozdelené do troch úrovní:
                <ul class="intro-list">
                    <li>
                    <span class="highlighted-text">1. úroveň:</span> <span class="intro-text-white">1 bod </span>
                    </li>
                    <li>
                    <span class="highlighted-text">2. úroveň:</span> <span class="intro-text-white">2 body</span>
                    </li>
                    <li>
                    <span class="highlighted-text">3. úroveň:</span> <span class="intro-text-white">3 body</span>
                    </li>
                    <li>
                    <span class="highlighted-text">BONUS:</span> <span class="intro-text-white">6 bodov</span>
                    </li>
                </ul>
                
            </p>
            <br>
            <p class="intro-text-white">
                Aby ste mohli získavať body za svoje riešenia, je potrebné si vytvoriť užívateľský účet. Tento účet Vám umožní sledovať svoj pokrok, zbierať body a porovnávať sa s ostatnými kódermi na stránke.
            </p>
            <br>
            <p class="intro-text-white">
                Takže neváhajte a začnite s programovaním! Zlepšujte svoje schopnosti, riešte úlohy na rôznych úrovniach a postupujte na špičku rebríčka. Tešíme sa na Vaše kódovanie!
            </p>
            <br>
            <p class="intro-text-white">
                Pripomíname, že naša stránka je určená len pre deti vo veku 10-15 rokov, a preto prosím, aby ste si vytvorili účet s povolením rodiča alebo zákonného zástupcu.
            </p>
            <br>
            <p class="intro-text-white">
                Ak máte akékoľvek otázky, neváhajte nás kontaktovať. Želáme Vám veľa úspechov a zábavy s programovaním!
            </p>
            <br>
            <p class="intro-text-yellow">
                S pozdravom,
            </p>
            <p class="intro-text-yellow">
                Tím "Mladý kóder"
            </p>
        </div>
    </div>
</body>
</html>