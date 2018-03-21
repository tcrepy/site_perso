<?php

class Salle extends CI_Controller {

    public function index(){
        $this->load->model('Salle_model');
        $recup = $this->Salle_model->recupsalle();
        $data['tous']=$recup;
        $data['title'] = 'Nos salles';
        $this->load->view('Header_view', $data);
        $this->load->view('Salle_view',$data);
        $this->load->view('Footer_view');
    }

}

?>