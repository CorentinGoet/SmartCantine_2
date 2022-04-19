@extends('SmartCantine/layout_smart_cantine')

@section('smart_content')

    <section id="about" class="about section-bg">
        <div class="container" >

            <div class="section-title">
                <h2>A propos</h2>
                <h3>A propos <span>de nous</span></h3>
                <p>Une petite présentation de notre équipe et de son travail.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset("/img/about.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">
                    <h3>Une équipe d'étudiants pour un projet scolaire</h3>
                    <p class="fst-italic">
                        Nous sommes cinq étudiants dans l’équipe. Quatre d’entre nous sommes en deuxième année à l’ENSTA Bretagne dans la filière Systèmes Numériques et Sécurité (SNS) du parcours Ingénieur sous Statut Élève (FISE), dont deux sont IETA. Trois d'entre nous avons fait leur première année à l'ENSTA Bretagne l'année dernière. Yara vient du Liban après une licence de Génie des Réseaux Informatiques et Télécommunications et poursuit son Master en filière SNS. Le dernier d'entre nous est en Master Architecture et Sécurité des Systèmes Électroniques et Logiciels (MASSEL).
                    </p>
                    <h3>Aidée par des enseignants</h3>
                    <p class="fst-italic">
                        Nous avons deux principaux encadrants, enseignants-chercheurs à l’ENSTA Bretagne, M. Champeau, à l’origine du projet, et M. Inizan, dont l’aide nous a été précieuse dans les études pratiques que nous avons réalisées.
                    </p>

                    <p>
                        Ce projet SmartCantine se fait dans le cadre de notre deuxième année à l'Ecole Nationale Supérieure des Techniques Avancées de Bretagne.
                        Notre projet système se déroule sur toute l'année scolaire 2021-2022, avec un jour dédié à l'Ecole (le mardi).
                    </p>
                    <p>Les objectifs sont multiples. Le premier est purement académique et vise à nous faire
                        acquérir de nouveaux savoirs, et d’approfondir ce que nous voyons en cours, en liant
                        par exemple plusieurs disciplines. Il est aussi l’occasion d’utiliser de manière concrète le
                        cours d’ingénierie système puisque nous n’en avons pas fait d’application directe sur un
                        système "à nous".
                    </p>
                    <p>Brest Métropole souhaite développer l’usage d’objets connectés pour anticiper et accompagner par exemple la gestion des cantines qui sont souvent une source d’incompréhension entre les établissements scolaires, les parents et la ville de Brest. Outre la qualité de la nourriture, le bruit est une préoccupation majeure. Et pour pouvoir palier ce problème, il faut d’abord pouvoir l’analyser. Et pour l’analyser, il faut disposer de données. La collecte de telles données permettrait d’informer, de comparer les différents établissements, mais aussi de mesurer l’efficacité de la politique adaptée et de mesurer l’évolution du niveau de bruit durant une certaine période.

                        Ce projet se propose donc de s’occuper du premier volet de cette transition vers l’internet des objets, à savoir la collecte de données. Nous devons donc spécifier, concevoir et réaliser un système sur la création d’un objet connecté mesurant l’ambiance sonore pour afficher le niveau sonore de façon ludique au personnes présentes dans la salle où on mesure le bruit (principalement les enfants) et centraliser les données récoltées.

                        Il nous fallait donc développer un système portable permettant de mesurer et de transmettre les informations, puis de les récolter et de les visualiser.

                        Ce site est le résultat de notre travail. Nous l'avons créé dans l'objectif de permettre à chacun (et en particulier à Brest Métropole)
                        de voir de manière pratique les résultats des mesures. On peut donc y observer un graphique qui représente les mesures faites par le capteur
                        que nous avons créé et qui est installé dans les cantines de la ville.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
