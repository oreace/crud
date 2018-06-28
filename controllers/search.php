<?php

class Search extends Controller {

  function __construct() {
    parent::__construct();
    Session::init();
    $logged = Session::get('loggedIn');
    if ($logged == false) {
      Session::destroy();
      redirect_to(login);
      exit;
    }
  }

  function index() {
    if (!empty($_POST['searchfield'])) {
      $this->userFound();
    } else {
      $this->newUserList();
    }
  }

  function newUserList() {
    $this->view->searchBookList = $this->model->bookList();
    $this->view->render("search/index");
  }

  function userFound() {
    $this->view->searchBookList = $this->model->bookFound();
    $this->view->render("search/index");
  }

  function logout() {
    Session::destroy();
    header('Location: ' . URL . 'login');
    exit;
  }

}

?>
