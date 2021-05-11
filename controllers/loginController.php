<?php

class loginController extends  Controller
{

    public function login()
    {

        $this->render('login');
    }

    public function setcredentials()
    {

        if ($_POST['name'] == "TETEREOU") header("Location: http://localhost/Mvc/accueil");
    }
}
