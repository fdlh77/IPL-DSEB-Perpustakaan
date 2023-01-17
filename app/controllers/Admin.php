<?php

class Admin extends Controller
{
    public function __construct()
    {
        $this->admin = $this->admin = $this->model("AdminModel");
        $this->data = $this->data = $this->model("DataModel");
    }

    public function index() {
        $this->view('admin/login');
    }

    public function login()
    {
        $check = $this->admin->check($_POST);
        if($check && $check['password'] == $_POST['password']) {
            $_SESSION["name"] = $check['name'];
            $_SESSION["email"] = $check['email'];
            $_SESSION["password"] = $check['password'];
            
            exit(header("Location: ".BASE_URL."/admin/all"));
        }
    }

    public function logout()
    {
        session_destroy();
        exit(header("Location: ".BASE_URL."/login"));
    }

    public function all() {
        $this->view('admin/layout/header');
        $this->view('admin/layout/left-sidebar-long');
        $this->view('admin/layout/topnav');
        $this->view('admin/layout/left-sidebar-short');
        $this->view('admin/all');
        $this->view('admin/layout/about-modal');
        $this->view('admin/layout/footer');
    }

    public function foods() {

        $data['arr_all'] = $this->data->foods();

        $this->view('admin/layout/header');
        $this->view('admin/layout/left-sidebar-long');
        $this->view('admin/layout/topnav');
        $this->view('admin/layout/left-sidebar-short');
        $this->view('admin/foods/index', $data);
        $this->view('admin/layout/about-modal');
        $this->view('admin/layout/footer');
    }

    public function addFood()
    {
        $data['arr_all'] = $this->data->category();

        $this->view('admin/layout/header');
        $this->view('admin/layout/left-sidebar-long');
        $this->view('admin/layout/topnav');
        $this->view('admin/layout/left-sidebar-short');
        $this->view('admin/foods/add', $data);
        $this->view('admin/layout/about-modal');
        $this->view('admin/layout/footer');
    }

    public function insertFood() {
        $delete = $this->data->insertFood($_POST);
        if ($delete > 0) {
            exit(header("Location: ".BASE_URL."/admin/foods"));
        }
    }

    public function deleteFood($id) {
        $delete = $this->data->deleteFood($id);
        if ($delete > 0) {
            exit(header("Location: ".BASE_URL."/admin/foods"));
        }
    }

    public function category() {
        $data['arr_all'] = $this->data->category();

        $this->view('admin/layout/header');
        $this->view('admin/layout/left-sidebar-long');
        $this->view('admin/layout/topnav');
        $this->view('admin/layout/left-sidebar-short');
        $this->view('admin/category/index', $data);
        $this->view('admin/layout/about-modal');
        $this->view('admin/layout/footer');
    }
    
    public function addCategory()
    {
        $data['arr_all'] = $this->data->category();

        $this->view('admin/layout/header');
        $this->view('admin/layout/left-sidebar-long');
        $this->view('admin/layout/topnav');
        $this->view('admin/layout/left-sidebar-short');
        $this->view('admin/category/add', $data);
        $this->view('admin/layout/about-modal');
        $this->view('admin/layout/footer');
    }

    public function insertCategory() {
        $delete = $this->data->insertCategory($_POST);
        if ($delete > 0) {
            exit(header("Location: ".BASE_URL."/admin/category"));
        }
    }

    public function deleteCategory($id) {
        $delete = $this->data->deleteCategory($id);
        if ($delete > 0) {
            exit(header("Location: ".BASE_URL."/admin/category"));
        }
    }

    public function order() {
        $data['arr_all'] = $this->data->order();

        $this->view('admin/layout/header');
        $this->view('admin/layout/left-sidebar-long');
        $this->view('admin/layout/topnav');
        $this->view('admin/layout/left-sidebar-short');
        $this->view('admin/order', $data);
        $this->view('admin/layout/about-modal');
        $this->view('admin/layout/footer');
    }
}
