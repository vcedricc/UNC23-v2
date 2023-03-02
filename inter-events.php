<?php
    include_once './templates/HTML/header.html';
?>

        <main class="align-bloc">
            <div class="flagbar"></div>
            <a href="./activites.php">
                <section class="bloc">
                    <div class="bloc1">
                        <img src="assets/400x400Events.png" />
                    </div>
                    <div>
                        <p class="bloc1b bloc1c">Activités</p>
                    </div>
                </section>
            </a>
            <a href="./activites.php">
                <section class="bloc">

                    <div class="bloc2">
                        <img src="assets/400x400Actu.png" />
                    </div>
                    <div>
                        <p class="bloc2b bloc2c">Actualités</p>
                    </div>
                </section>
            </a>
            <a href="./necro.php">
                <section class="bloc">
                    <div class="bloc3">
                        <img src="assets/400x400Necro.png" />
                    </div>
                    <div>
                        <p class="bloc3b bloc3c">Nécrologie</p>
                    </div>
                </section>
            </a>
        </main>

        <footer class="footer footer-int-pres">
            <?php
            include_once './templates/HTML/footer.html'
            ?>
        </footer>
    </div>
</body>

</html>