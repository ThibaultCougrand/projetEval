<nav>
    <ul>
        <li><a href="?loc=home">Accueil</li></a>
        <li><a href="?loc=products">Catalogue</li></a>
        <?php
        if (!isset($_SESSION['id'])) {
            echo '<li><a href="?loc=sign-in-up">Connexion</li></a>';
        } else {
            echo '<li><a href="?loc=account">Espace client</li></a>';
        }
        ?>
        <li><a href="?loc=cart">Panier</li></a>
    </ul>
</nav> 