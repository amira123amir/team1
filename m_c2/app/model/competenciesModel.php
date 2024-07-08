<?php
class competenciesModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    public function addcomp($id_d,$name_c) {
        $data=[
          'id_d'=>$id_d,  
          'name_c'=>$name_c
        ];
        return $this->db->insert('competencies', $data);
    }
    /*
    public function getUdoctorById($id_d) {
        return $this->db->where('id_d', $id_d)->getOne('doctors');
    }
*/
    public function updatecomp($id_d, $name_c) {
        $data=array(
             'name_c'=>$name_c

        );
        $this->db->where('id_d', $id_d);
        return $this->db->update('competencies', $data);
    }
/*
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
*/
    }


?>