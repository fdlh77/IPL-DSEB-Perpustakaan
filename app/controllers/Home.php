<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->user = $this->model('UserModel');
        $this->data = $this->data = $this->model("DataModel");
    }

    public function index()
    {
        $this->view('layout/header');
        $this->view('home');
        $this->view('layout/footer');
    }

    public function statistik()
    {
        $this->view('layout/header');
        $this->view('statistik');
        $this->view('layout/footer');
    }
}
