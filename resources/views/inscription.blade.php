<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
    <link rel="stylesheet" type="text/css" href=" {{asset('/authentification/bootstrap/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('/authentification/css/my-login.css')}} ">
</head>
<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src=" {{asset('/authentification/img/logo.jpg')}} ">
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Inscription</h4>
                        <form action="apreslogin">

                            <div class="form-group">
                                <label for="prénom">Prénom</label>
                                <input id="prénom" type="text" class="form-control" name="prénom" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input id="nom" type="text" class="form-control" name="nom" required autofocus>
                            </div>

                            <div class="form-group" name="sexe" required autofocus>
                                <label for="niveau">Sexe</label>
                                <select class="form-control" id="sexe">
                                    <option>M</option>
                                    <option>F</option>
                                </select>
                            </div>

                            <div class="form-group" name="formation" required autofocus>
                                <label for="formation">Formation</label>
                                <select class="form-control" id="formation">
                                    <option>Génie Informatique</option>
                                    <option>Génie Civil</option>
                                    <option>Génie Mécanique</option>
                                    <option>Génie Electrique</option>
                                    <option>Génie Chimique et Biologie Appliquée</option>
                                    <option>Gestion</option>
                                </select>
                            </div>


                            <div class="form-group" name="niveau" required autofocus>
                                <label for="niveau">Niveau</label>
                                <select class="form-control" id="niveau">
                                    <option>DUT1</option>
                                    <option>DUT2</option>
                                    <option>DIC1/DESCAF1</option>
                                    <option>DIC2/DESCAF2</option>
                                    <option>DIC3/DESCAF3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <lasbel for="email">Adresse mail</lasbel>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Mot de Passe</label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="aggree" value="1"> J'accepte les  Termes et Conditions
                                </label>
                            </div>

                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-primary btn-block">
                                    S'inscrire
                                </button>
                            </div>
                            <div class="margin-top20 text-center">
                                Vous avez déja un compte? <a href="login">Se connecter</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; Esp 2018
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