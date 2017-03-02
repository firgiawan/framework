<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "Firgiawan Zhein Alhaddad", 
				'nim' => "1541180179",
				'alamat' => "Jl. Danau Towuti Raya G3 B17",
				'no_tlp' => "081259606690",
				'email' => "firgizhein87@gmail.com",
				'hobby' => "Bermain Futsal dan Bermain Game",
				);
		$this->load->view('about',$data);		
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */

?>