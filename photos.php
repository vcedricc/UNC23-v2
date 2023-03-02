<?php
    include_once './templates/HTML/header.html';
?>

        <main class="start-page">
            <div class="grid-presentation">
                <h1>Album photos</h1>
                <div>
                    <?php
                    include_once './templates/HTML/toolbarPictures.html';
                    ?>
                </div>
            </div>
            <p class="page-pictures"><b>Page 1</b> | <a href="./photos2.php">Page 2</a></p>
            <div class="flagbar"></div>
            <div class="flagbar2"></div>
            <div class="flagbar3"></div>
            <div class="flagbar4"></div>
            <div class="flagbar5"></div>

            <div id="images-box">
                <!-- ligne 1 -->
                <div class="holder" id="ligne-1">
                    <div id="image-1" class="image-lightbox">
                        <p>2017</p>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-2" class="image-lightbox">
                        <span class="close"><a href="#ligne-1">X</a></span>
                        <img src="assets/2017.le-thouraud-07.09.jpg" alt="07 septembre 2017 aux maquis du Thouraud à MAISONNISSES" title="07 septembre 2017 aux maquis du Thouraud à MAISONNISSES" />
                        <a class="expand" href="#image-2" title="07 septembre 2017 aux maquis du Thouraud à MAISONNISSES"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-3" class="image-lightbox">
                        <span class="close"><a href="#ligne-1">X</a></span>
                        <img src="download/2017.11.11.jpg" alt="11 novembre 2017 à SAINT MARTIAL LE MONT" title="11 novembre 2017 à SAINT MARTIAL LE MONT." />
                        <a class="expand" href="#image-3" title="11 novembre 2017 à SAINT MARTIAL LE MONT"></a>
                    </div>
                </div>

                <!-- Ligne 2 -->
                <div class="holder" id="ligne-2">
                    <div id="image-4" class="image-lightbox image-lightbox-even-year">
                        <p>2018</p>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-5" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-2">X</a></span>
                        <img src="download/martial-unc-2018.jpg" alt="Assemblée générale du 25 février 2018 à AHUN" title="Assemblée générale du 25 février 2018 à AHUN" />
                        <a class="expand" href="#image-5" title="Assemblée générale du 25 février 2018 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-6" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-2">X</a></span>
                        <img src="download/ag-25.2.2018-17-unc.jpg" alt="Assemblée générale du 25 février 2018" title="Assemblée générale du 25 février 2018" />
                        <a class="expand" href="#image-6" title="Assemblée générale du 25 février 2018"></a>
                    </div>
                </div>

                <!-- ligne 3 -->
                <div class="holder" id="ligne-3">
                    <div id="image-7" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-3">X</a></span>
                        <img src="download/2018.07.09.-bois-du-thourauds.jpg" alt="07 septembre 2018 aux maquis du Thouraud à MAISONNISSES" title="07 septembre 2018 aux maquis du Thouraud à MAISONNISSES" />
                        <a class="expand" href="#image-7" title="07 septembre 2018 aux maquis du Thouraud à MAISONNISSES"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-8" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-3">X</a></span>
                        <img src="download/2018.22.09aubusson.jpg" alt="22 septembre 2018 à AUBUSSON" title="22 septembre 2018 à AUBUSSON" />
                        <a class="expand" href="#image-8" title="22 septembre 2018 à AUBUSSON"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-9" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-3">X</a></span>
                        <img src="download/2018.25.09harkis-minute-de-silence-1.jpg" alt="25 septembre 2018 - La minutes de silence aux Harkis" title="25 septembre 2018 - La minutes de silence aux Harkis" />
                        <a class="expand" href="#image-9" title="25 septembre 2018 - Minutes de silence aux Harkis"></a>
                    </div>
                </div>

                <!-- ligne- 4 -->
                <div id="ligne-4" class="holder">
                    <div id="image-10" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-4">X</a></span>
                        <img src="download/2018.11.11.jpg" alt="11 novembre 2018 à la Mairie d'AHUN" title="11 novembre 2018 à la Mairie d'AHUN" />
                        <a class="expand" href="#image-10" title="11 novembre 2018 à la Mairie d'AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-11" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-4">X</a></span>
                        <img src="download/2018.11.11.poilus-ladapeyre.jpg" alt="11 novembre 2018, les poilus à LADAPEYRE" title="11 novembre 2018, les poilus à LADAPEYRE" />
                        <a class="expand" href="#image-11" title="11 novembre 2018, les poilus à LADAPEYRE"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-12" class="image-lightbox">
                        <p>2019</p>
                    </div>
                </div>

                <!-- ligne 5 -->
                <div class="holder" id="ligne-5">
                    <div id="image-13" class="image-lightbox">
                        <span class="close"><a href="#ligne-5">X</a></span>
                        <img src="download/2019.13.06.-indo-1.jpg" alt="13 juin 2019, honneur aux combattants en INDOCHINE" title="13 juin 2019, honneur aux combattants en INDOCHINE" />
                        <a class="expand" href="#image-13" title="13 juin 2019, honneur aux combattants en INDOCHINE"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-14" class="image-lightbox image-lightbox-even-year">
                        <p>2020</p>
                    </div>
                </div>
                <div class="holder ">
                    <div id="image-15" class="image-lightbox image-lightbox-even-year">
                        <span class="close "><a href="#ligne-5">X</a></span>
                        <img src="download/2020.09.02.ag1.jpg " alt="Assemblée générale du 09 février 2020 à la Mairie d 'AHUN" title="Assemblée générale du 09 février 2020 à la Mairie d'AHUN " />
                        <a class="expand " href="#image-15" title="Assemblée générale du 09 février 2020 à la Mairie d 'AHUN"></a>
                    </div>
                </div>

                <!-- ligne 6 -->
                <div class="holder" id="ligne-6">
                    <div id="image-16" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-6">X</a></span>
                        <img src="download/2020.09.02.ag2.jpg" alt="Assemblée générale du 09 février 2020" title="Assemblée générale du 09 février 2020" />
                        <a class="expand" href="#image-16" title="Assemblée générale du 09 février 2020"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-17" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-6">X</a></span>
                        <img src="download/2020.09.02.ag3.jpg" alt="09 février 2020, Assemblée générale et remise du diplôme de la Médaille Militaire par M. Pierre PAULY, Président de la SNEMM CREUSE, à Monsieur Guy THONNET" title="09 février 2020, Assemblée générale et remise du diplôme de la Médaille Militaire par M. Pierre PAULY, Président de la SNEMM CREUSE, à Monsieur Guy THONNET">
                        <a class="expand" href="#image-17" title="09 février 2020, Assemblée générale et remise du diplôme de la Médaille Militaire par M. Pierre PAULY, Président de la SNEMM CREUSE, à Monsieur Guy THONNET"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-18" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-6">X</a></span>
                        <img src="download/8.5.20.2.jpg" alt="08 mai 2020, la cérémonie s'est déroulée à AHUN, en présence de M. PACAUD (Maire) Mme BORTOLUZZI (Présidente UNC - CREUSE) et Claude DOUZON (porte drapeau UNC). Compte tenu du contexte
                    sanitaire, il n 'y a pas eu de dépôt de gerbes mais juste un mot du Maire et une minute de silence.">
                        <a class="expand" href="#image-18" title="08 mai 2020, la cérémonie s'est déroulée à AHUN, en présence de M. PACAUD (Maire) Mme BORTOLUZZI (Présidente UNC - CREUSE) et Claude DOUZON (porte drapeau UNC). Compte tenu du contexte sanitaire,
                    il n 'y a pas eu de dépôt de gerbes mais juste un mot du Maire et une minute de silence"></a>
                    </div>
                </div>

                <!-- ligne 7 -->
                <div class="holder" id="ligne-7">
                    <div id="image-19" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-7">X</a></span>
                        <img src="download/8.5.20.1.jpg" alt="08 mai 2020, la cérémonie s'est déroulée à AHUN, en présence de M. PACAUD (Maire) Mme BORTOLUZZI (Présidente UNC - CREUSE) et Claude DOUZON (porte drapeau UNC). Compte tenu du contexte
                    sanitaire, il n 'y a pas eu de dépôt de gerbes mais juste un mot du Maire et une minute de silence">
                        <a class="expand" href="#image-19" title="08 mai 2020, la cérémonie s'est déroulée à AHUN, en présence de M. PACAUD (Maire) Mme BORTOLUZZI (Présidente UNC - CREUSE) et Claude DOUZON (porte drapeau UNC). Compte tenu du contexte sanitaire,
                    il n 'y a pas eu de dépôt de gerbes mais juste un mot du Maire et une minute de silence"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-20" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-7">X</a></span>
                        <img src="download/721.jpg" alt=" CV en Fête et anciennes voitures. Cette festivités a été annulée pour 2020. Merçi à M. Pierre FERET pour cette petite exposition, devant son domicile" title="CV en Fête et anciennes voitures. Cette festivités a été annulée pour 2020. Merçi à M. Pierre FERET pour cette petite exposition, devant son domicile">
                        <a class="expand" href="#image-20" title="CV en Fête et anciennes voitures. Cette festivités a été annulée pour 2020. Merçi à M. Pierre FERET pour cette petite exposition, devant son domicile"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-21" class="image-lightbox image-lightbox-even-year">
                        <span class="close"><a href="#ligne-7">X</a></span>
                        <img src="download/740.jpg" alt=" CV en Fête et anciennes voitures. Cette festivités a été annulée pour 2020. Merçi à M. Pierre FERET pour cette petite exposition, devant son domicile" title="CV en Fête et anciennes voitures. Cette festivités a été annulée pour 2020. Merçi à M. Pierre FERET pour cette petite exposition, devant son domicile">
                        <a class="expand" href="#image-21" title="CV en Fête et anciennes voitures. Cette festivités a été annulée pour 2020. Merçi à M. Pierre FERET pour cette petite exposition, devant son domicile"></a>
                    </div>
                </div>

                <!-- ligne 8 -->
                <div class="holder">
                    <div id="image-22" class="image-lightbox">
                        <p>2021</p>
                    </div>
                </div>
                <div class="holder" id="ligne-8">
                    <div id="image-23" class="image-lightbox">
                        <span class="close"><a href="#ligne-8">X</a></span>
                        <img src="download/08-01.jpeg" alt="08 mai 2021" title="8 mai 2021">
                        <a class="expand" href="#image-23" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-24" class="image-lightbox">
                        <span class="close"><a href="#ligne-8">X</a></span>
                        <img src="download/08-02.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-24" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>

                <!-- ligne 9 -->
                <div id="ligne-9" class="holder">
                    <div id="image-25" class="image-lightbox">
                        <span class="close"><a href="#ligne-9">X</a></span>
                        <img src="download/08-03.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-25" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-26" class="image-lightbox">
                        <span class="close"><a href="#ligne-9">X</a></span>
                        <img src="download/08-05.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-26" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-27" class="image-lightbox">
                        <span class="close"><a href="#ligne-9">X</a></span>
                        <img src="download/08-07.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-27" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <!-- ligne 10 -->
                <div id="ligne-10" class="holder">
                    <div id="image-28" class="image-lightbox">
                        <span class="close"><a href="#ligne-10">X</a></span>
                        <img src="download/08-08.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-28" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-29" class="image-lightbox">
                        <span class="close"><a href="#ligne-10">X</a></span>
                        <img src="download/08-09.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-29" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-30" class="image-lightbox">
                        <span class="close"><a href="#ligne-10">X</a></span>
                        <img src="download/08-10.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-30" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>

                <!-- ligne 11 -->
                <div id="ligne-11" class="holder">
                    <div id="image-31" class="image-lightbox">
                        <span class="close"><a href="#ligne-11">X</a></span>
                        <img src="download/08-11.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-31" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-32" class="image-lightbox">
                        <span class="close"><a href="#ligne-11">X</a></span>
                        <img src="download/08-12.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-32" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-33" class="image-lightbox">
                        <span class="close"><a href="#ligne-11">X</a></span>
                        <img src="download/08-13.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-33" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>

                <!-- ligne 12 -->
                <div id="ligne-12" class="holder">
                    <div id="image-34" class="image-lightbox">
                        <span class="close"><a href="#ligne-12">X</a></span>
                        <img src="download/08-14.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-34" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-35" class="image-lightbox">
                        <span class="close"><a href="#ligne-12">X</a></span>
                        <img src="download/08-15.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-35" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-36" class="image-lightbox">
                        <span class="close"><a href="#ligne-12">X</a></span>
                        <img src="download/08-16.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-36" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>

                <!-- ligne 13 -->
                <div id="ligne-13" class="holder">
                    <div id="image-37" class="image-lightbox">
                        <span class="close"><a href="#ligne-13">X</a></span>
                        <img src="download/08-17.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-37" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-38" class="image-lightbox">
                        <span class="close"><a href="#ligne-13">X</a></span>
                        <img src="download/08-18.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-38" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>
                <div class="holder">
                    <div id="image-39" class="image-lightbox">
                        <span class="close"><a href="#ligne-13">X</a></span>
                        <img src="download/08-19.jpeg" alt="08 mai 2021 à AHUN" title="08 mai 2021 à AHUN">
                        <a class="expand" href="#image-39" title="08 mai 2021 à AHUN"></a>
                    </div>
                </div>

            </div>
            <div class="next-page">
                <a href="./photos2.php">Page suivante</a>
                <img src="assets/arrow-right-s-line.png" />
            </div>
        </main>

    </div>
</body>

</html>