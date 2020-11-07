<?php 
	require_once('models/Login.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	class LoginController{
		var $login_model;

		function __construct(){
			$this->login_model = new login();
		}

		public function login(){
			require_once('views/page/login.php');
		}

		public function login_action(){
			$email = $_POST['email'];
            $password = $_POST['password'];

			$status = $this->login_model->find($email, $password);

			if($status == true){
				$_SESSION['isLogin'] = true;
	            $_SESSION['customer'] = $status;
		    	setcookie('msg','Đăng nhập thành công',time()+1);
		    	header('Location: ?mod=page&act=home');
		    }
		    else {
		    	setcookie('msg','Đăng nhập không thành công',time()+1);
		    	header('Location: ?mod=login&act=login');
		    }
		}


		public function logout(){
			session_start();
			unset($_SESSION['cart']);
            unset($_SESSION['sum']);
		    session_destroy();
		    header('Location: ?mod=page&act=home');	
		}

	}
 ?>