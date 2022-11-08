<nav>
    <ul class="nav flex-column text-center">
        <li class="nav-item btn-light"><a href="/" class="nav-link">Home</a></li>

        <?php
        if (isset($_SESSION["table"])) {
        ?>
            <li class="nav-item"><a href="/?debugging" class="nav-link">Débogage</a></li>
            <li class="nav-item"><a href="/?concatenation" class="nav-link">Concaténation</a></li>
            <li class="nav-item"><a href="/?loop" class="nav-link">Boucle</a></li>
            <li class="nav-item"><a href="/?function" class="nav-link">Fonction</a></li>
            <li class="nav-item"><a href="/?del" class="nav-link">Supprimer</a></li>
        <?php
        }
        ?>
    </ul>
</nav>