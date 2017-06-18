<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
public function __construct()
 {
  parent::__construct();
  if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth', 'refresh');
		}
 }

    public function index()
	{   
		$data['title'] = 'Dashboard ';
       // $this->my_template->loadAdmin('home/home',$data);
  $this->load->view('home/header');
  $this->load->view('home/home');
  $this->load->view('home/sidebar');		
	}
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */