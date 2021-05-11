<?php



class Usermanager extends Controller
{


    public function index()
    {
        $model = $this->loadModel("User");
        $users = $model->getAll();

        $this->render('usermanager/index', $users);
    }

    
}
