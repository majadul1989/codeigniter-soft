<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNew extends CI_Controller {

    public function index(){
//      generate barcode
        $this->zend->load('Zend/Barcode');
        $file = Zend_Barcode::draw('code128', 'image', array('text' => '1222'), array());
        $code = time().'1222';
        $store_image = imagepng($file,"barcode/{$code}.png");
        $data['barcode'] = $code.'.png';
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/menubar');
        $this->load->view('product/addNew',$data);
        $this->load->view('dashboard/footer');

    }

}
?>