<?php 

Class Login extends Controller
{

	public function index()
	{
		$data['page_title'] = "Login";
		$cookie_name = "user";
        $cookie_value = "tanvir";
        $expiry_time = time() + (60 * 60); // 1 hour from now

        setcookie($cookie_name, $cookie_value, $expiry_time, "/"); // '/' makes it accessible throughout the website
		
		if(isset($_POST['email']))
		{
			$model = $this->loadModel("user");
			$model->login($_POST);
		}

		$this->view("catalog/login",$data);	
	}

 
}