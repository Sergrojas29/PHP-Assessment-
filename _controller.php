<?php

namespace Opencart\Admin\Controller\Extension;

use Opencart\System\Engine\Controller;

//extend class Controller
class ControllerExtensionOrderByZipcode extends Controller{
    public function index(){

        //hit orderbyzip endpoint then check user token to be true
        $data['action'] = $this->url->link('extension/module/orderbyzipcode', 'user_token=' . $this->session->data['user_token'], true);


      
        //return view template from twig
        return $this->load->view('extension/module/orderbyzipcode', $data);

        
    }


}



?>