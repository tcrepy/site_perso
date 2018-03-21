<?php

class Manif_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function recuptous()
    {

        //$query = $this->db->get('manifestations');
        $this->db->select('*');
        $this->db->from('manifestations');
        $this->db->join('salles', 'manifestations.salle_code_ = salles.salle_code');
        $query = $this->db->get();
        return $query->result();


    }

    public function get_manif_par_page($page, $nbpage = 4)
    {
        //$query = $this->db->get('manifestations',$nbpage, $page);
        $this->db->select('*');
        $this->db->from('manifestations');
        $this->db->join('salles', 'manifestations.salle_code_ = salles.salle_code');
        $this->db->limit($nbpage, $page);
        $query = $this->db->get();
        return $query->result();
    }

    public function count()
    {
        return $this->db->count_all('manifestations');
    }

    public function get_manif_par_id($id)
    {
        $this->db->select('*');
        $this->db->from('manifestations');
        $this->db->join('salles', 'manifestations.salle_code_ = salles.salle_code');
        $this->db->where('manif_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function camembert($id)
    {
        $this->db->select('abo_ville, COUNT(abo_ville) as total');
        $this->db->group_by('abo_ville');
        $this->db->select('abo_ville');
        $this->db->join('abonnes', 'abonnes.abo_id = reservations.abo_id_');
        $this->db->join('manifestations', 'manifestations.manif_id = reservations.manif_id_');
        $this->db->order_by('abo_ville', 'ASC');
        $query = $this->db->get_where('reservations', array('manif_id_' => $id));
        $result['rows'] = $query->result_array();
        return $result;
    }

    public function uneseule($id)
    {
        //requete pour recup les données pour la barre
        $req = "
            SELECT salle_place_max,
            SUM( abo_qte_place_reserv )
            AS totalreserv 
            FROM reservations
            INNER JOIN manifestations 
            ON manifestations.manif_id = reservations.manif_id_ 
            INNER JOIN salles 
            ON manifestations.salle_code_ = salles.salle_code
            WHERE manif_id =" . $id;
        $query = $this->db->query($req);
        return $query->result();
    }

    public function recherche($nom)
    {
        $this->db->select('*');
        $this->db->from('manifestations');
        $this->db->like('manif_intitule', $nom);
        $query = $this->db->get();
        return $query->result();
    }
}