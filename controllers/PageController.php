<?php 
    
	require_once('models/Model.php');
	class PageController{
		var $page_model;

		function __construct(){
			$this->page_model = new Model();
		}

		public function home(){
			$data_s = array();
			$line = 'Bóng đá';
			$data_s = $this->page_model->All($line,8,0);
			$data_ss = $this->page_model->All($line,8,8);
			$data_bt = array();
			$line = 'Bóng rổ';
			$data_bt = $this->page_model->All($line,8,0);
			$data_btt = $this->page_model->All($line,8,8);
			$data_v = array();
			$line = 'Bóng chuyền';
			$data_v = $this->page_model->All($line,8,0);
			$data_vv = $this->page_model->All($line,8,8);
			$data_bk = array();
			$line = 'Cầu lông';
			$data_bk = $this->page_model->All($line,8,0);
			$data_bkk = $this->page_model->All($line,8,0);
			require_once('views/page/home.php');
		}

		public function about(){
			require_once('views/page/about.php');
		}
	}
 ?>