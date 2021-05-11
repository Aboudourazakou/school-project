<?php

require_once("app/Route.php");


class routes
{

  public function accueil()
  {
    return Route::get('index', 'controllers/UserManager.php',"auth");
  }

  public function login()
  {
    return Route::get('login', "controllers/loginController.php","guest");
  }

  public function setcredentials()
  {
    return Route::post('setcredentials', "controllers/loginController.php", "guest");
  }
}
