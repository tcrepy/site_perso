<?php

class Manifestation extends CI_Controller
{

    public function index()
    {
        $this->load->model('manif_model');
        $recup = $this->manif_model->recuptous();
        $data ['tous'] = $recup;
        $this->load->view('Header_view');
        $this->load->view('Manif_view', $data);
        $this->load->view('Footer_view');
    }

    public function manifpage($page = 0)
    {

        $this->load->model('Manif_model');
        $data['tous'] = $this->Manif_model->get_manif_par_page($page);
        //$pagemax = $this->Manif_model->count();
        //$data['page']=$page;
        //$data['pagemax']=ceil($pagemax/4);

        $this->load->library('pagination');

        $config['base_url'] = 'http://195.83.128.55/~mmi15f05/saintpavut/catalogue/';
        $config['total_rows'] = $this->Manif_model->count();
        $config['per_page'] = 4;
        $config['num_links'] = 10;
        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = 'Nos manifestations';
        $this->load->view('Header_view', $data);
        $this->load->view('Manifspage_view', $data);
        $this->load->view('Footer_view');
    }

    public function createpdf()
    {

        $this->load->model('Manif_model');

        $recup = $this->Manif_model->recuptous();
        $data ['tous1'] = $recup;
        $this->load->view('mon_premier_pdf.php', $data);
    }

    public function barre($id)
    {
        $this->load->model('Manif_model');
        $data['uneseule'] = $this->Manif_model->uneseule($id);
        $this->load->view('manifbarre_view', $data);
    }

    public function info($id)
    {
        $this->load->model('Manif_model');
        $data['unemanif'] = $this->Manif_model->get_manif_par_id($id);
        $data['cam'] = $this->Manif_model->camembert($id);
        $this->load->view('unemanif', $data);
    }

    public function barre_recherche()
    {
        $this->load->view('Header_view');
        $this->load->view('recherche_view');
        $this->load->view('Footer_view');
    }

    public function recherche($nom)
    {
        $this->load->model('Manif_model');
        $this->Manif_model->recherche($nom);
        $this->load->view('recherche_view');
    }

}

?>