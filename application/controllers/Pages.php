<?
class Pages extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CategoryModel');
        $this->load->model('GoodsModel');
	}
	public function index(){
		$this->load->view('landing/header');
		$this->load->view('landing/jumbotron');
        $this->load->view('landing/advantages');
        $this->load->view('landing/map');
		$this->load->view('landing/footer');
	}
    public function goods(){
        $data['categories'] = $this->CategoryModel->getCategories('id,name');
        $data_goods['goods'] = $this->GoodsModel->getGoods('id,name_good,info,photo,count,price,discount,category_id');
        $this->load->view('header', $data);
        $this->load->view('goods', $data_goods);
        $this->load->view('footer');
    }
}
?>