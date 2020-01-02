<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main/login-2.html');
    }
    

    public function token()
	{
		$string = file_get_contents(FCPATH . 'assets/dummies/users.json');
        if ($string === false) {
            // deal with error...
        }

        $json_a = json_decode($string, true);
        if ($json_a === null) {
            // deal with error...
		}

		foreach ($json_a as $key => $value) {
			# code...
			if($_POST['username'] == $value['username'] && $_POST['password'] == $value['password']) {
				$this->session->username = $value['username'];
				$this->session->foto = $value['foto'];
				redirect('/main', 'location');
				return;
			}
		}

		redirect('/login?error=1', 'location');
		
	}
	
	public function logout() {
		unset($_SESSION['username']);
		redirect('/login?logout=1', 'location');
	}
}
