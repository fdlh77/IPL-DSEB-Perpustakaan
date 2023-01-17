<?php

class Auth extends Controller
{
    public function __construct()
    {
        $this->user = $this->model('UserModel');
    }

    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        $check = $this->user->check($_POST);
        if($check && $check['password'] == md5($_POST['password'])) {
            $_SESSION['userid'] = $check['nama'];
			$_SESSION['level']  = $_POST['level'];
			$_SESSION['islogin']= true;
            
            exit(header("Location: ".BASE_URL."/home"));
        }
    }

    public function logout()
    {
        session_destroy();
        exit(header("Location: ".BASE_URL."/home"));
    }
}
