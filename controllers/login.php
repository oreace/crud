<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
//    if ($logged == false && $role == 'login') {
//      Session::destroy();
//      header('Location: login');
//      exit;
//    }
    }

    function index() {
        if (!empty($_POST['searchfield'])) {
            $this->loginFound();
        } else {
            $this->newLoginList();
        }
    }

    public function run() {
        $response = $this->model->run();
        // echo $response['id'];
        // exit();

        if (!empty($response['id'])) {
            //if ($response['u_id'] > 0) {
            Session::init();
//        echo $response['uname'];
//        exit;

            Session::set('id', $response['id']);
            Session::set('uname', $response['uname']);
            Session::set('pwd', $response['pwd']);
            Session::set('role', $response['role']);
            Session::set('loggedIn', true);
            //$_SESSION['username'] = $response['uname'];
            redirect_to('welcome');


            /* } else {
              redirect_to('login');
              } */
        } else {

            //$message = "Login unsuccessful. <br> Please recheck your login details and try again.";
            //$_COOKIE['error'] = $message;
            //Session::set('error', $message);
            redirect_to('index');
        }
    }

    function loginFound() {
        $this->view->loginList = $this->model->loginFound();
        $this->view->render("login/index");
    }

    function newLoginList() {
        $this->view->loginList = $this->model->loginList();
        $this->view->render("login/index");
    }
    
    function new_login(){
        $this->view->render("login/createLogin");
    }

    function createLogin() {
        $this->model->createLogin();
        $this->newLoginList();
    }

    function editLogin($id) {
        $this->view->singleLogin = $this->model->editLogin($id);
        $this->view->render("login/edit");
    }

    function updateLogin() {
        $response = $this->model->updateLogin();
        if ($response) {
            $this->index();
        }
    }

    function deleteLogin($id) {
        $this->model->deleteLogin($id);
        $this->index();
    }

    function logout() {
        Session::destroy();
        $this->view->render("index/index");
        exit;
    }

}

?>
