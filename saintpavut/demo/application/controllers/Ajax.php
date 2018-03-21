<?php

/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 02/12/2016
 * Time: 11:58
 */
class Ajax extends CI_Controller
{
    public function recherche($nom)
    {
        $this->load->model('Manif_model');
        $data['recherche'] = $this->Manif_model->recherche($nom);
        $this->load->view('recherche_result_view', $data);
    }
}