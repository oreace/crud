<?php

class Visitor extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
    }

    function index() {
        if (!empty($_POST['searchfield'])) {
            $this->visitorFound();
        } else {
            $this->newVisitorList();
        }
    }

    function visitorFound() {
        $this->view->visitorList = $this->model->visitorFound();
        $this->view->render("visitor/index");
    }

    function newVisitorList() {
        //$this->view->totalCount = $this->model->count_all();
        $this->view->visitorList = $this->model->visitorList();
        $this->view->render("visitor/index");
    }

    function new_visitor() {
        $this->view->render("visitor/new_visitor");
    }
    
    function upgradeVisitor($id) {
        $this->view->singleVisitor = $this->model->editVisitor($id);
        $this->view->render("visitor/upgradeVisitor");
    }

    function createVisitor() {
        $this->model->createVisitor();
        $this->newVisitorList();
    }

    function viewVisitor($id) {
        $this->view->singleVisitor = $this->model->editVisitor($id);
        $this->view->render("visitor/read");
    }

    function editVisitor($id) {
        $this->view->singleVisitor = $this->model->editVisitor($id);
        $this->view->render("visitor/edit");
    }

    function updateVisitor() {
        $response = $this->model->updateVisitor();
        if ($response) {
            //$this->index();
            redirect_to("visitor");
        }
    }

    function deleteVisitor($id) {
        $this->model->deleteVisitor($id);
        //$this->view->render("visitor/index");
        redirect_to("visitor");
    }

}

?>
