<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/accueil/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=" {{asset('/accueil/vendor/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet" type="text/css">
    <link href=" {{asset('/accueil/vendor/simple-line-icons/css/simple-line-icons.css')}} " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href=" {{asset('/accueil/css/landing-page.css')}} " rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <a class="navbar-brand" href="#">Codification</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Paramètres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <h1 class="display-4">Habibatou TOURE</h1>
            <p class="lead">DIC2 Télécoms & Réseaux</p>
        </div>
        <div class="col-md-6">
            <p class="lead">Département Génie Informatique</p>
        </div>
    </div>

    {{--<hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>--}}
</div>

{{--<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary btn-block btn-lg">Codifier</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-warning btn-block btn-lg">Réserver</button>
            </div>
        </div>
    </div>
</section>--}}

<section>
    <div class="container">
        <h3 class="display-6">Suggestion</h3>
        <hr class="my-4">
        <p>Vous pouvez avoir des suggestions de chambres en cliquant ici</p>
        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Voir Suggestion</button>
        <hr class="my-4">
        <h3 class="display-6">Réservation</h3>
        <hr class="my-4">
        <p>Vous n'avez pas encore de chambre! Veuillez réserver</p>
        <a href="reservation" class="btn btn-primary" >Réserver</a>
        <br>
        <hr class="my-4">
        <h3 class="display-6">Codification</h3>
        <hr class="my-4">
        <p>La codification se fait ici</p>
        <a href="codification" class="btn btn-warning" >Codifier</a>
    </div>
</section>
<br>
<br>


<!-- Footer
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">A propos</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; ESP 2018. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-twitter fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
-->

<!-- Bootstrap core JavaScript -->
<script src=" {{asset('/accueil/vendor/jquery/jquery.min.js')}} "></script>
<script src=" {{asset('/accueil/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Trouver ici des voisins</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">chosir</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>