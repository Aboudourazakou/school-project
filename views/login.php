<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="public/style.css">

    <title>LOGIN PAGE BOOTSTRAP</title>
</head>

<body>

    <div class=" main row justify-content-center mt-5 ">
        <div class="col-10 col-sm-8 col-md-8 justify-content-center">
            <div class="row justify-content-center">
                <div class=" col-6 picture">
                </div>
                <div class="col-md-10 col-12 col-lg-6 col-sm-12 login-card pt-5 ">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h4 class="title"> Plateforme eServices
                           
                               </h4>
                        </div>
                        <form method="post" action="setcredentials">
                            <div class="col-12  text-center">
                                <input class="text-input form-control" type="text" name="name" class="inputEmail" placeholder="Entrer votre nom d'utilisateur.." />
                            </div>
                            <div class="col-12 text-center">
                                <input class="text-input form-control" type="password" class="password" name="password" placeholder="Saisir votre mot de passe" />
                            </div>
                            <div class="col-12 check d-flex align-items-center mt-3">
                                <input type="checkbox" class="checkbox me-4" name="check" />
                                <p class="remember mb-0">Se rappeler de moi</p>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button class="btn login-btn rounded-pill" name="submit" type="submit">Se connecter</button>
                            </div>
                        </form>
                        <div class="col-12 d-flex   mt-2">
                            <hr>
                        </div>
                        <div class="col-12  text-center">
                            <ul style="padding:0px">
                                <li><a href="#">Mot de passe oublie ?</a></li>
                                <li style="margin-bottom: 30px;"><a href="#">Questions ?</a></li>
                                <li>
                                    <p class="rights">Copyright © 2020 - Tous droits réservés</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>