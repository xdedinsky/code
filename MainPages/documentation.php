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
            <a href="documentation.php"><img class="menu-icon" src="../pictures/dokumentacia.png"
                    alt="DokumentaciaIcon">Dokumentácia</a>
            <a href="ranking.php"><img class="menu-icon" src="../pictures/rebricek.png" alt="RebricekIcon">Rebríček</a>
            <button class="btnLogin-popup">Prihlásiť sa</button>
        </nav>
    </header>
    <div class="content">
        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

            <div class="form-box login">
                <h2>Prihlásiť sa</h2>
                <form action="login.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error">
                            <?php echo $_GET['error']; ?>
                        </p>
                    <?php } ?>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="mail" class="form-control" id="mail" name="mail">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" class="form-control" id="password" name="password">
                        <label>Heslo</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Zapamätať prihlásenie</label>
                        <a href="#">Zabudli ste heslo?</a>
                    </div>
                    <input type="submit" class="btn"></input>
                    <div class="login-register">
                        <p>Nemáš účet? <a href="#" class="register-link">Zaregistruj sa</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registrovať sa</h2>
                <form action="registration.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="name" class="form-control" id="name" name="name">
                        <label>Meno</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="mail" class="form-control" id="mail" name="mail">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" class="form-control" id="password" name="password">
                        <label>Heslo</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Súhlasím so spracovaním údajov</label>
                    </div>
                    <input type="submit" class="btn"></input>
                    <div class="login-register">
                        <p>Už máš účet? <a href="#" class="login-link">Prihlásiť sa</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div style="max-width: 70%; margin: 0 auto; text-align: left">
        <code-runner language="c++"></code-runner>
    </div>
    <button id="cccc" class="btnRun">Spustiť</button>
    <script>
        const buttonCheck = document.getElementById('cccc');
        buttonCheck.addEventListener('click', () => {
            const text = document.getElementById('result').textContent.trim(); // Odstráňte medzery okolo textu
            console.log(text);

            if (text.toUpperCase() === "HELLO") {
                console.log("OK");
            } else {
                console.log("NOK");
            }
        });

    </script>

    <script src="../script.js"></script>
    <script
        src="https://cdn.jsdelivr.net/gh/MarketingPipeline/Code-Runner-Web-Component@main/dist/code-runner-wc.min.js"
        defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>