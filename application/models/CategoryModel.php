<?
class CategoryModel  extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getCategories($fields = ''){
        if(!empty($fields)) {
            $fields = explode(',', $fields);
            $this->db->select($fields);
        }
        $query = $this->db->get('categories');
        $result = $query->result_array();
        return $result;
    }
}
