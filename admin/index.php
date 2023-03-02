<?PHP
    include_once './templates/HTML/header.html';
?>

<body>

    <main>
        <div class="logo-id">
        <img src="../assets/5f228142590000616b2d9551.png" alt="Logo UNC" />
        </div>
        <div class=connection>
            <p>Identifiant :</p>
            <form action="./panel.php" method="POST">
                <label for="identity"></label>
                <input type="text" id="identity" name="identity" placeholder="" required>
                <p>Mot de passe :</p>
                <label for="password"></label>
                <input type="text" id="password" name="password" placeholder="xxxxxxxx" required><br>
                <br>
                    <button class="button-deco" type="submit">Connexion</button>
            </form>
            
        </div>
    </main>

</body>
