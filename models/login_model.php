<?php

// require 'login.php';

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    protected static $table_name = "login";
    protected static $db_fields = array("id", "fname", "lname", "uname", "pwd", "role");
    public $id;
    public $fname;
    public $lname;
    public $uname;
    public $pwd;
    public $role;

    public function run() {
        $login_name = $_POST['login'];
        $password = $_POST['pwd'];

        $sql = "select id, uname, pwd, role from " . Login_Model::$table_name . " where uname = '" . $login_name . "' and pwd = '" . $password . "'";
        $resultset = $this->find_by_sql($sql);
        foreach ($resultset as $result) {
            $id = $result->id;
            //$u_id = $result->u_id;
            $uname = $result->uname;
            $pwd = $result->pwd;
            $role = $result->role;
        }
        $result = array('id' => $id, 'uname' => $uname, 'pwd' => $pwd, 'role' => $role);
        return $result;
    }

    public function loginList() {
        $resultset = $this->find_all();
        return $resultset;
    }

    public function loginFound($sql = "") {
        if ($sql == "") {
            if (isset($_POST['searchfield']) && !empty($_POST['searchfield'])) {
                $logins = $_POST['searchfield'];

                $sql = "select * from " . Login_Model::$table_name;
                $sql .= " where fname like '%" . $logins . "%'";
                $sql .= " or lname like '%" . $logins . "%'";
                $sql .= " or uname like '%" . $logins . "%'";
                $sql .= " or role like '%" . $logins . "%'";
                $_POST['searchfield'] = "";
            } else {
                redirect_to(login);
            }
        }
        $resultset = $this->find_by_sql($sql);

        return $resultset;
    }

    public function createLogin() {
        $this->fname = $_POST['fname'];
        $this->lname = $_POST['lname'];
        $this->uname = $_POST['uname'];
        $this->pwd = $_POST['pwd'];
        $this->role = $_POST['role'];

        $resultID = $this->create();
        return $resultID;
    }

    public function deleteLogin($loginid) {
        $this->id = $loginid;

        $this->delete();
    }

    public function editLogin($id) {
        $result = $this->find_by_id($id);
        return $result;
    }

    public function updateLogin() {
        $this->id = $_POST['id'];
        $this->fname = $_POST['fname'];
        $this->lname = $_POST['lname'];
        $this->uname = $_POST['uname'];
        $this->pwd = $_POST['pwd'];
        $this->role = $_POST['role'];

        $response = $this->update();
        return $response;
    }

}

?>