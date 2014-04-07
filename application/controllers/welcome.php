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
											DATE_FORMAT(UPDATE_AT, '%d/%m/%Y') UPDATE_AT
											 
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
	
	public function saveData()
	{
		$this->load->database();
		$sql = $this->genereRequeteSqlUpdate($_POST);
		// split la requete par execution
		$tabSql = explode(";", $sql);
		foreach ($tabSql as $req){
			if ($req != "") {
				$this->db->query($req);
			}
		}	
		
// 		echo $this->db->affected_rows();
		exit();
	}
	
	private function genereRequeteSqlUpdate($post, $nomFormulaire = "tblAppendGrid") {
		$tabDate = array('UPDATE_AT');
		$id = "NUM";
		unset($post[$nomFormulaire."_rowOrder"]);
		$tmp = "";	
		$i = 0;
		foreach ($post as $key => $value) {
			// recupere la key value pour la BD
			preg_match("/".$nomFormulaire."_(.*)_([1-9]*)/", $key, $matchs);
			if ($i != $matchs[2]) {
				if ($i != 0) {
					$tmp = substr($tmp, 0, -2)." WHERE NUM = '$num';\r\n";
				}
				$tmp .= "UPDATE test_codeigniter_append_grid SET ";
				$i = $matchs[2];
			}
			// transforme les date pour la BD
			if (in_array($matchs[1], $tabDate)) {
				$valueold = $value;
				preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4}).*/", $value, $matchsDate);
				$value = $matchsDate[3]."-".$matchsDate[2]."-".$matchsDate[1];
			}
			$tmp .= $matchs[1]." = '$value', ";
			if($matchs[1] == $id) $num = $value;
		}
		return (substr($tmp, 0, -2)." WHERE NUM = '$num';");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */