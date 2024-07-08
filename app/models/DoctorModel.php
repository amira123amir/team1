<?php
class DoctorModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    public function addDoctor($data) {
        return $this->db->insert('doctors', $data);
    }
    public function getUdoctorById($id_d) {
        return $this->db->where('id_d', $id_d)->getOne('doctors');
    }

    public function updatedoctor($id_d, $data) {
        $this->db->where('id_d', $id_d);
        return $this->db->update('doctors', $data);
    }

    public function deletedoctor($id_d) {
        $this->db->where('id_d',$id_d);
        return $this->db->delete('doctors');
    }

   public function showdoctors() {
       return  $this->db->get('doctors');
        }

        public function showidd($id_d) {
            $this->db->join("doctors d", "d.id_d=r.id_d", "INNER");  
            $this->db->joinWhere("rating r", "r.id_d", $id_d);
            $this->db->join("competencies c", "c.id_d=d.id_d", "INNER"); 
            $this->db->joinWhere("doctors d", "d.id_d", $id_d);
            return  $products = $this->db->get("rating r", null, "d.name_d,c.name_c,r.rate_u"); 
           
             }

    }


?>