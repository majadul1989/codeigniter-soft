<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index(){
		$this->load->view('dashboard/dashboard');

        //load library
        $this->load->library('zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');
        //generate barcode
        $barCodeGenerate = Zend_Barcode::render('code128', 'image', array('text'=>'sdfgsdf'), array());

	}


}
?>