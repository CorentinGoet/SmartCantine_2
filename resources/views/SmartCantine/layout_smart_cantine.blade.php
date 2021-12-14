<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>SmartCantine</title>
    <link rel="stylesheet" href={{asset('css/mycss.css')}}>
    <meta name="description" content="C'est la site du projet SmartCantine" />
</head>
<body>
<header class=header>
    <div class="mon-header">
        <h1 class="titre1">SmartCantine</h1>

        <h3 class="brest-metropole">Brest Métropole </h3>
        <nav class="item1">
            <li> <a href="About.html" target="_blank" title="la page d'accuil">Home</a> </li>
            <li> <a href="connexion.html" target="_blank" title="se connecter">Se connecter</a> </li>
            <li> <a href="Inscription.html" target="_blank" title="S'inscrire">Services</a> </li>
            <li> <a href="Contact Us.html" target="_blank" title="nous connecter">s'inscrire</a> </li>
        </nav>
    </div>


    <aside class=sidebar>
        <h2 class=title-sidebar>Exemple</h2>
    </aside>



</header>

<section>

    <div class=text1>
        <div class=haut_de_page>
            <h2>Exemple</h2>


        </div>

    </div>

</section>

@yield('smart_content')
<hr>
<footer>
    <div class=text2>

        <li> <a href="test 1.html" target="_blank" title="la page d'accuil">contactez nous</a> </li>
    </div>
    <img class=logo src="ensta-logoh-noir.png">
</footer>
</body>
</html>
