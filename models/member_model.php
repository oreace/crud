<?php

// require 'login.php';

class Member_Model extends Model {

  function __construct() {
    parent::__construct();
  }

  protected static $table_name = "member";
  protected static $db_fields = array("id", "fname", "lname", "phone", "email", "sex", "address");
  public $id;
  public $fname;
  public $lname;
  public $phone;
  public $email;
  public $sex;
  public $address;

  public function memberList() {
    $resultset = $this->find_all();
    return $resultset;
  }

  public function memberFound($sql = "") {
    if ($sql == "") {
      if (isset($_POST['searchfield']) && !empty($_POST['searchfield'])) {
        $members = $_POST['searchfield'];

        $sql = "select * from " . Member_Model::$table_name;
        $sql .= " where fname like '%" . $members . "%'";
        $sql .= " or lname like '%" . $members . "%'";
        $_POST['searchfield'] = "";
      } else {
        redirect_to(member);
      }
    }
    $resultset = $this->find_by_sql($sql);

    return $resultset;
  }

  public function createMember() {
    $this->fname = $_POST['fname'];
    $this->lname = $_POST['lname'];
    $this->phone = $_POST['phone'];
    $this->email = $_POST['email'];
    $this->sex = $_POST['sex'];
    $this->address = $_POST['address'];

    $resultID = $this->create();
    return $resultID;
  }

  public function deleteMember($memberid) {
    $this->id = $memberid;

    $this->delete();
  }

  public function editMember($id) {
    $result = $this->find_by_id($id);
    return $result;
  }

  public function updateMember() {
    $this->id = $_POST['id'];
    $this->fname = $_POST['fname'];
    $this->lname = $_POST['lname'];
    $this->phone = $_POST['phone'];
    $this->email = $_POST['email'];
    $this->sex = $_POST['sex'];
    $this->address = $_POST['address'];

    $response = $this->update();
    return $response;
  }

}

?>