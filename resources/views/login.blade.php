<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
    <link rel="stylesheet" type="text/css" href=" {{asset('/authentification/bootstrap/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('/authentification/css/my-login.css')}}">
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
                        <h4 class="card-title">Connexion</h4>
                        <form action="apreslogin">

                            <div class="form-group">
                                <label for="email">Adresse mail</label>

                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Mot de passe
                                    <a href="forgot.html" class="float-right">
                                        Avez vous oublié votre mot de passe ?
                                    </a>
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="remember"> Se souvenir de moi !
                                </label>
                            </div>

                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Se connecter
                                </button>
                            </div>
                            <div class="margin-top20 text-center">
                                Avez-vous un compte? <a href="inscription">Inscrivez-vous</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; ESP 2018
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