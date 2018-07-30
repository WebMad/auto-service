<?
class GoodsModel  extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getGoods($fields = ''){
        if(!empty($fields)) {
            $fields = explode(',', $fields);
            $this->db->select($fields);
        }
        $query = $this->db->get('goods');
        $result = $query->result_array();
        return $result;
    }
}
