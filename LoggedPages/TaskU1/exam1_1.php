
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mladý Kóder</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" type="image/x-icon" href="../../Pictures/yellowrobot.ico">
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
            <a href="../index.php"><img class="menu-icon" src="../../pictures/domov.png" alt="DomovIcon">Domov</a>
            <a href="../taskmenu.php"><img class="menu-icon" src="../../pictures/ulohy.png" alt="UlohyIcon">Úlohy</a>
            <a href="../documentation.php"><img class="menu-icon" src="../../pictures/dokumentacia.png" alt="DokumentaciaIcon">Dokumentácia</a>
            <a href="../ranking.php"><img class="menu-icon" src="../../pictures/rebricek.png" alt="RebricekIcon">Rebríček</a>
            
        </nav>
    </header>

    <?php
        if (isset($_POST["send"])) {
            $cppCode = $_POST["data"];
            $cppFileName = "user_code.cpp"; // Názov súboru pre užívateľský kód
        
            // Uložte užívateľský kód do súboru
            file_put_contents($cppFileName, $cppCode);
        
            // Získať absolútnu cestu k adresáru, kde sa nachádza PHP súbor
            $currentDir = __DIR__;
        
            // Skompilujte užívateľský kód a získajte výstup a návratový kód
            exec("g++ $currentDir/$cppFileName -o $currentDir/user_program", $output, $returnCode);
        
            // Ak návratový kód nie je 0 (chyba), zobrazíme chybové hlásenia v popup okne
            if ($returnCode !== 0) {
                echo '<script>alert("Chyba pri kompilácii programu.")</script>';
            } else {
                echo '<script>alert("Program bol úspešne skompilovaný.")</script>';
            }
        }
        
    ?>
    <div class="text-editor-container">
        <form method="POST">
        <textarea name="data" rows="25" cols="60">
#include <iostream>
using namespace std;

int main() {
        
    return 0;
}
        </textarea>
            <br>
            <input type="submit" name="send" value="OTESTOVAŤ">
        </form>
    </div>    
</body>
</html>

