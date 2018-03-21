<?php

class Salle_model extends CI_Model {

    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
    }
    public function recupsalle()
    {

        $query = $this->db->get('salles');
        return $query->result();


    }

}