<?php
    include_once './templates/HTML/header.html';
?>

        <main class="start-page">
            <div class="grid-presentation">
                <div>
                    <h1>Qui peux et comment adhérer ?</h1>
                </div>
                <div class="underbar">
                    <p><a href="#membres">Qui peux nous rejoindre ?</a> | <a href="#rejoindre">Comment nous rejoindre ?</a></p>
                </div>
            </div>
            <article class="grid grid-presentation">
                <h2 id="membres" class="title-presentation">Qui peux nous rejoindre ?</h2>
                <ul><b>Membres actifs :</b>
                    <li>Ressortissants de l’Office Nationale des Anciens Combattants et Victime de Guerre (ONAC/VG) ;
                    </li>
                    <li>Toute personne civile ou militaire engagée, appelée ou réserviste contribuant ou ayant contribué à la défense de la France, ou s’y étant préparée, sans avoir pour autant été engagée dans une opération militaire ;
                    </li>
                    <li>Toute personne participant ou ayant participé à la défense ou à la protection des vies et/ou des biens des Français.
                    </li>
                </ul>
                <br/>
                <ul><b>Membres associés :</b>
                    <li>Toute personne qui, ne satisfaisant pas aux conditions ci-dessus décrites, partage les valeurs de l’UNC et qui, en raison de ses attaches familiales ou amicales, ou de ses compétences, souhaite contribuer à la réalisation des buts
                        de l’UNC. Les membres associés ont les mêmes droits et devoirs que les membres actifs, exceptés les droits relatifs à la qualité de ressortissant de l’ONACVG.
                    </li>
                </ul>
            </article>
            <a href="#upPage">
                <p class="arrowup"><img src="assets/arrow-up-s-line.png" /> Remonté en haut de la page</p>
            </a>
            <article id="rejoindre" class="grid-presentation">
                <h2>Comment nous rejoindre ?</h2>
                <p>Une fiche d'inscription sera bientôt disponible ici-même au format pdf.</p>
                <p>Il suffira de l'imprimer et nous l'envoyer dûment remplis avec le règlement de votre cotisation.</p>
                <p>En attendant, merci de prendre contact avec nous via le <a class="link" href="javascript:void(
                    window.open(
                      'https://form.jotform.com/223182580692055',
                      'blank',
                      'scrollbars=yes,
                      toolbar=no,
                      width=700,
                      height=500'
                    )
                  )">formulaire de contact</a> ou à l'adresse courriel <a class="link" href="mailto:unc23.secretariat@gmail.com">unc23.secretariat@gmail.com</a> !</p>
            </article>
        </main>
        <footer class="footer footer-page">
            <?php
            include_once './templates/HTML/footer.html'
            ?>
        </footer>
    </div>
</body>

</html>