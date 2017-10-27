<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNew extends CI_Controller {

    public function index(){
//      generate barcode
        $this->load->model('products');
        $result2 = $this->products->productData();
        if (!empty($result2)){
            $id = $result2[0]->ProductId+1;
            $code = $id.'000000'.rand(1,9);
//            $this->zend->load('Zend/Barcode');
//            $file = Zend_Barcode::draw('code128', 'image', array('text' => $code), array());
            $data['id'] = $result2[0]->ProductId+1;
//            imagepng($file,"barcode/{$code}.png");
            $data['barcode'] = $code;
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/menubar');
            $this->load->view('product/addNew',$data);
            $this->load->view('dashboard/footer');
        }else{
            $this->zend->load('Zend/Barcode');
            $file = Zend_Barcode::draw('code128', 'image', array('text' => '1222667891234'), array());
            $id = 100001;
            $data['id'] = $id;
            $code = $id.'000000'.rand(1,9);
            $data['barcode'] = $code;
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/menubar');
            $this->load->view('product/addNew',$data);
            $this->load->view('dashboard/footer');
        }

    }

    public function addNewPorduct()
    {
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
        $this->form_validation->set_rules('barcode', 'Barcode','trim|xss_clean|numeric|required');

        if ($this->form_validation->run() == FALSE) { // Check Valideation False
            $this->load->model('products');
            $result2 = $this->products->productData(); // Insert ID Validation
            if (!empty($result2)){ // Check ID Not Empty
                $id = $result2[0]->ProductId+1;
                $data['id'] = $id;
                $this->zend->load('Zend/Barcode');
//                $file = Zend_Barcode::draw('code128', 'image', array('text' => '1222667891234'), array());
                $code = $id.'000000'.rand(1,9);
                $data['barcode'] = $code;
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('product/addNew', $data);
                $this->load->view('dashboard/footer');
            }else{ // Check ID Not Empty
                $id = "100001";
                $data['id'] = $id;
                $code = $id.'000000'.rand(1,9);
                $data['barcode'] = $code;
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('product/addNew', $data);
                $this->load->view('dashboard/footer');
            } // Insert ID Validation


        }else{
            $this->load->model('products');
            $result2 = $this->products->productData(); // Insert ID Validation
            if (!empty($result2)){ // Check ID Not Empty
                $id = $result2[0]->ProductId+1;
                $data['id'] = $id;
                $code = $id.'000000'.rand(1,9);
                $data['barcode'] = $code;
            }else{ // Check ID Not Empty
//                $id = $result2[0]->ProductId;
                $id = "100001";
                $data['id'] = $id;
                $code = $id.'000000'.rand(1,9);
                $data['barcode'] = $code;
            } // Insert ID Validation
            $group = $this->input->post('gourp');
            $type = $this->input->post('type');
            $item_name2 = strtolower($this->input->post('item_name')); //string convert to lower case
            $item_name = ucwords($item_name2); //The ucwords() function converts the first character of each word in a string to uppercase
            $price = $this->input->post('price');
            $description2 = strtolower($this->input->post('description')); //string convert to lower case
            $description = ucwords($description2); //The ucwords() function converts the first character of each word in a string to uppercase
            $barcode = $this->input->post('barcode'); //The ucwords() function converts the first character of each word in a string to uppercase
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('productImages'))
            {
                $file_name =  "";
            }
            else
            {
              $file_name =  $this->upload->data('file_name');
            }
            echo $file_name;
            echo $id;
            print_r($_POST);
            $t = new DateTime();
            $t->setTimezone(new DateTimeZone( 'Asia/Dhaka' ));
            $date = $t->format(' Y-m-d G:i:s' ); //2017-12-31 12:59:59 PM
            $sessionID  = ($this->session->userdata['logged_in']['UserId']);
            $status = 'Active';
//            $insertData = 'CALL productPRO(@item_name,@ProductBarCode,@type,@price,@item_name,@description,@status,@sessionID,@date,@sessionID,@date)';
//            $this->db->insert($insertData);

            $data = array(
                'ProductId'=>$id,
                'ProductName'=>$item_name,
                'ProductBarCode'=>$barcode,
                'ProductUnitId'=>$type,
                'ProductGroupId'=>$group,
                'ProductPrice'=>$price,
                'ProductImage'=>$file_name,
                'RowDescription'=>$description,
                'RowStatus'=>$status,
                'AddedBy'=>$sessionID,
                'AddedDate'=>$date,
                'UpdatedBy'=>$sessionID,
                'UpdatedDate'=>$date
            );

            $insert = $this->db->insert("products", $data);
            if ($insert == TRUE){
                $this->zend->load('Zend/Barcode');
                $file = Zend_Barcode::draw('code128', 'image', array('text' =>$barcode), array());
                $code = $barcode;
                imagepng($file,"barcode/{$code}.png");
                $data['barcode'] = $code.'.png';
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('product/addNew');
                $this->load->view('dashboard/footer');
            }
        } // Check Valideation True


    } // add new product

} // Class
?>
