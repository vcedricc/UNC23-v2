<?php
    include_once './templates/HTML/header.html';
?>

        <main class="align-bloc">
            <div class="flagbar"></div>
            <a href="./presentation.php#upPage">
                <section class="bloc">
                    <div class="bloc1">
                        <img src="assets/400x400GeneralDurand.png" />
                    </div>
                    <div>
                        <p class="bloc1b">Nos fondateurs</p>
                    </div>
                </section>
            </a>
            <a href="./presentation.php#histo">
                <section class="bloc">
                    <div class="bloc2">
                        <img src="assets/400x400Poilus.png" />
                    </div>
                    <div>
                        <p class="bloc2b">Notre histoire</p>
                    </div>
                </section>
            </a>
            <a href="./presentation.php#objectifs">
                <section class="bloc">
                    <div class="bloc3">
                        <img src="assets/UNC400x400.png" />
                    </div>
                    <div>
                        <p class="bloc3b">Nos objectifs</p>
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