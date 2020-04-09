<?php
/********************************************************************************
--- Materialize_Basic controller class loads the view pages. --------------------
---------------------------------------------------------------------------------
--- Author: Irene Gayle Roque ---------------------------------------------------
********************************************************************************/
class Materialize_FrontEnd extends Ci_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//loads materializecss_header view page
		$this->load->view('materializecss_header');
		//loads materializecss_frontend view page
		$this->load->view('materializecss_frontend');
		//loads materializecss_footer view page
		$this->load->view('materializecss_footer');
	}
}
?>