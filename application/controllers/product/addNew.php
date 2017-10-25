<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNew extends CI_Controller {

    public function index(){
//      generate barcode
        $this->load->model('products');
        $result2 = $this->products->productData();
        if (!empty($result2)){
            $id = "10000".$result2[0]->ProductId;
            $this->zend->load('Zend/Barcode');
            $file = Zend_Barcode::draw('code128', 'image', array('text' => '1222667891234'), array());
            $data['id'] = $id;
            $code = time().'122222';
            imagepng($file,"barcode/{$code}.png");
            $data['barcode'] = $code.'.png';

            $this->load->view('dashboard/header');
            $this->load->view('dashboard/menubar');
            $this->load->view('product/addNew',$data);
            $this->load->view('dashboard/footer');
        }else{
            $this->zend->load('Zend/Barcode');
            $file = Zend_Barcode::draw('code128', 'image', array('text' => '1222667891234'), array());
            $id = 100001;
            $data['id'] = $id;
            $code = time().'122222';
            imagepng($file,"barcode/{$code}.png");
            $data['barcode'] = $code.'.png';

            $this->load->view('dashboard/header');
            $this->load->view('dashboard/menubar');
            $this->load->view('product/addNew',$data);
            $this->load->view('dashboard/footer');
        }

    }

    public function addNewPorduct(){
        $this->form_validation->set_rules(
            'item_name', 'Item Name',
            'trim|xss_clean|required|is_unique[products.ProductName]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('type', 'Type','trim|xss_clean|required');
        $this->form_validation->set_rules('gourp', 'Gourp','trim|xss_clean|required');
        $this->form_validation->set_rules('price', 'Item Price','trim|xss_clean|required|numeric');
        $this->form_validation->set_rules('description', 'description','trim|xss_clean');

        if ($this->form_validation->run() == FALSE) { // Check Valideation False
            $this->load->model('products');
            $result2 = $this->products->productData(); // Insert ID Validation
            if (!empty($result2)){ // Check ID Not Empty
                $id = "10000".$result2[0]->ProductId;
                $data['id'] = $id;
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('product/addNew', $data);
                $this->load->view('dashboard/footer');
            }else{ // Check ID Not Empty
                $id = "100001";
                $data['id'] = $id;
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('product/addNew', $data);
                $this->load->view('dashboard/footer');
            } // Insert ID Validation


        }else{
            print_r($_POST);
            $t = new DateTime();
            $t->setTimezone(new DateTimeZone( 'Asia/Dhaka' ));
            $date = $t->format(' Y-m-d G:i:s' ); //2017-12-31 12:59:59 PM
            $sessionID  = ($this->session->userdata['logged_in']['UserId']);
            $UserType = 'user';
            $status = 'Active';
            $UserId = '';
        } // Check Valideation True


}

}
?>