<?php



namespace AppControllers;

class Home extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('welcome_message',$data);
    }

    public function about()
    {
        return view('about');
    }

}