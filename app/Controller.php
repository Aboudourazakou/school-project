<?php
abstract class Controller
{

    public function loadModel(string $model)
    {
        require_once(ROOT . 'models/' . $model . '.php');
        return new $model();
    }

    public function render(string $fichier, $data=null)
    {
       require_once(ROOT.'views/'.$fichier. '.php');
    }
}
