<?PHP
    include_once './templates/HTML/header.html';
?>

<body>

<?PHP
        $user_id = htmlspecialchars($_POST['identity']);
        $user_mp = htmlspecialchars($_POST['password']);

        // En attente BDD :
        $id = 'Admin';
        $mp = 'Cobetto24';

        if($user_id == $id && $user_mp == $mp)
        {
?>


    <header></header>

    <main>
        <div class="nav-list">
            <ul>
                <li>Activités</li>
                <li>Actualités</li>
                <li>Nécrologie</li>
                <li>Album photos</li>
            </ul>
        </div>
    </main>

    <footer></footer>

    <?PHP
        }
        else
    {
        echo '<h1 style="text-align:center"> Identifiant ou mot de passe incorrect</h1>';
    }
    ?>

</body>
