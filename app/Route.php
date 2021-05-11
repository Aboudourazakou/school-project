<?php


class Route extends Auth
{

    public static function get($method, $CorrespondingController, $auth, $param0 = null, $param1 = null, $param2 = null, $param3 = null, $param4 = null, $param5 = null)

    {

        $params = array($param0, $param1, $param2, $param3, $param4, $param5);

        require_once($CorrespondingController);

        $val = explode('/', $CorrespondingController); //We get the class name(controller) by get the last element of an array

        $className = explode('.', end($val))[0];

        $instance = new $className();



        if (method_exists($instance, $method)) {

            if ($auth == "auth") {
                if (Auth::authenticated()) call_user_func_array([$instance, $method], $params); //Call method with parameters
                else {
                    header("Location: http://localhost/Mvc/login");
                }
            } else if ($auth == "guest") {

                if (!Auth::authenticated()) call_user_func_array([$instance, $method], $params); //Call method with parameters
                else {
                    header("Location: http://localhost/Mvc/accueil");
                }
            }
        } else echo "Aucune vue ne correspond a votre route";
    }

    public static function post($method, $CorrespondingController, $auth, $param0 = null, $param1 = null, $param2 = null, $param3 = null)
    {

        $params = array(
            $param0, $param1, $param2, $param3);
        require_once($CorrespondingController);

        $val = explode('/', $CorrespondingController); //We get the class name(controller) by get the last element of an array

        $className = explode('.', end($val))[0];

        $instance = new $className();



        if (method_exists($instance, $method)) {
            

            if ($auth == "auth") {
                if (Auth::authenticated()) call_user_func_array([$instance, $method], $params); //Call method with parameters
                else {
                    http_response_code(401);
                    echo "Vous n'etes pas authentifie";
                }
            } else if ($auth == "guest") {

                if (!Auth::authenticated()) call_user_func_array([$instance, $method], $params); //Call method with parameters
                else {
                   echo "OPERATION INTERDITE";
                }
            }
        } else echo "Chemin introuvable";
    }
}
