<?php
// Envoyer un mail à l'admin
// Stocker un max de données sur le visiteur
var_dump($_SESSION);
?>

<main class="container-fluid mt-4">
    <div class="text-center">
        <h1>Oop's,<br> Erreur 404</h1>

        <img src="assets\logo\logo-removebg.png" alt="" width="150">

        <p class="fw-bolder">La page demandée n'existe pas !</p>

        <div class="">
            <p class="">Effectuez une recherche</p>
            <form action="" method="get" role="form" class="">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="i fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="form-control" id="name" placeholder="Rechercher un contenu du site" name="name">
                </div>
            </form>
        </div>
        <div class="form-group mb-3">
            <a href="./" class="navbar-brand"><button class="btn button"><i class="fa-solid fa-house"></i> Retournez à l'accueil</button></a>
        </div>
    </div>
</main>