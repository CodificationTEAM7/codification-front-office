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

<br>
<br>

<section>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card-wrapper" style="width: 60%;">
                <div class="brand">
                    <h3 class="display-6 text-center">Codification</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Veuillez confirmer votre réservation afin de codifier</h6>
                        <form method="POST">

                            <div class="form-group">
                                <label for="codification">Valider la codification</label>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Valider
                                    </button></div>
                            </div>
                            <h6 class="card-title">Pour ceux qui n'ont pas pu réserver, veuillez codifier ici</h6>

                            <div class="form-group">
                                <label for="pavillons">Choisir un pavillon</label>
                                <select id="pavillon"class="form-control" name="pavillons" required autofocus>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>F</option>
                                </select>
                            </div>

                            <div class="form-group" name="etage" required autofocus>
                                <label for="nom">Choisir l'étage</label>
                                <select id="etage"class="form-control" name="etage" required autofocus>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>rez de chausée</option>
                                </select>
                            </div>

                            <div class="form-group" name="chambre" required autofocus>
                                <label for="chambre">Chambre</label>
                                <select class="form-control" id="chambre">
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>


                            <div class="form-group no-margin">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Codifier
                                        </button></div>
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-warning btn-block">
                                            Annuler
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script src=" {{asset('/authentification/js/jquery.min.js')}} "></script>
<script src=" {{asset('/authentification/bootstrap/js/bootstrap.min.js')}} "></script>
<script src=" {{asset('/authentification/js/my-login.js')}} "></script>
</body>
</html>