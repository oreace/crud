<?php

// require 'login.php';

class Visitor_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    protected static $table_name = "visitor";
    protected static $db_fields = array("id", "title", "fname", "lname", "address", "country", "phone", "email", "sex", "del", "created", "modified");
    public $id;
    public $title;
    public $fname;
    public $lname;
    public $address;
    public $country;
    public $phone;
    public $email;
    public $sex;
	public $del;
	public $created;
	public $modified;
	public $page;
    public $per_page;
    public $total_count;

    public function visitorList() {
//
//        $this->page = $page;
//        $this->per_page = 3;
//        $this->total_count = $this->count_all();
//        
//        Pagination::init($this->page, $this->per_page, $this->total_count);
//        $sql = "SELECT * FROM " . Visitor_Model::$table_name;
//        $sql .= " LIMIT " . Pagination::$per_page;
//        $sql .= " OFFSET " . Pagination::offset();
//        $resultset = $this->find_by_sql($sql);
        $resultset = $this->find_all();
        return $resultset;
    }

    public function visitorFound($sql = "") {
        if ($sql == "") {
            if (isset($_POST['searchfield']) && !empty($_POST['searchfield'])) {
                $visitors = $_POST['searchfield'];

                $sql = "select * from " . Visitor_Model::$table_name;
                $sql .= " where fname like '%" . $visitors . "%'";
                $sql .= " or lname like '%" . $visitors . "%'";
                $sql .= " or sex like '%" . $visitors . "%'";
                $sql .= " or country like '%" . $visitors . "%'";
                $sql .= " or title like '%" . $visitors . "%'";
                $sql .= " and del ='n'";
                $_POST['searchfield'] = "";
            } else {
                redirect_to(visitor);
            }
        }
        $resultset = $this->find_by_sql($sql);

        return $resultset;
    }

    public function createVisitor() {
        $this->title = $_POST['title'];
        $this->fname = $_POST['fname'];
        $this->lname = $_POST['lname'];
        $this->address = $_POST['address'];
        $this->country = $_POST['country'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $this->sex = $_POST['sex'];
		$this->created = date("Y-m-d", time());
		$this->modified = date("Y-m-d", time());

        $resultID = $this->create();
        return $resultID;
    }

    public function deleteVisitor($visitorid) {
        $this->id = $visitorid;
		$this->del = "y";

        $this->delete();
    }

    public function editVisitor($id) {
        $result = $this->find_by_id($id);
        return $result;
    }

    public function updateVisitor() {
        $this->id = $_POST['id'];
        $this->title = $_POST['title'];
        $this->fname = $_POST['fname'];
        $this->lname = $_POST['lname'];
        $this->address = $_POST['address'];
        $this->country = $_POST['country'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $this->sex = $_POST['sex'];
		$this->modified = date("Y-m-d h :i :s A", time());
		$this->modified = date("Y-m-d h :i :s A", time());

        $response = $this->update();
        return $response;
    }

}

?>