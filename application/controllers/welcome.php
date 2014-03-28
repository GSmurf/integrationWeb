<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	var $_paginationInfinie;

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->library('table');
		
		$traitements = array();
		$query = $this->db->query("SELECT 	NUM, 
											CODE, 
											AFFAIRE, 
											LIBELLE, 
											TYPE, 
											VISIBLE, 
											FREQUENCE, 
											ORDRE, 
											CONFIG_FILE, 
											DATE_FORMAT(UPDATE_AT, '%d/%m/%Y %H:%i:%s') UPDATE_AT
											 
											FROM 
											stef_dev_as_appli.test_codeigniter_append_grid;");

		foreach ($query->result_array() as $row)
		{
			$traitements[] = $row;
		}
		
		$tmpl = array ( 'table_open'  => '<table id="show">' );
		$this->table->set_template($tmpl);
		
		$this->_paginationInfinie = true;
		$data = array('page' => 5,
						'pagination' => $this->_paginationInfinie,
						'traitementsJson' => json_encode($traitements),
						'traitements' => $this->table->generate($query));
		$this->load->view('welcome_message', $data);
	}
	
	public function quatrecentquatre()
	{
		$this->_paginationInfinie = false;
		$data['page'] = 1;
		$data['pagination'] = $this->_paginationInfinie;
		$this->load->view('404', $data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */