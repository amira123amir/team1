<?php

require __DIR__.'/../model/DoctorModel.php';


class DoctorController {
    private $model;
  

    public function __construct($db) {
      
        $this->model = new DoctorModel($db);
    }
    private function jsonResponse($data){
 header("content-type:application/json");
          echo json_encode($data);
 }
        public function addDoctor() { 
            if($_SERVER['REQUEST_METHOD']=='POST') { 
              $name_d=$_POST['name_d']; 
              $data= [ 
                'name_d' => $name_d, 
               ]; 
               
              if($this->model->addDoctor($data)){ 
                 
                 $this->jsonResponse( ['message'=>'add doctor successfuly']); 
               
              }else { 
                 $this->jsonResponse(['error'=>"failed to add doctor."]); 
              } 
            }}

           public function showdoctors() {
               $doctor = $this->model->showdoctors();
               header("content-type:application/json");
                echo json_encode($doctor);
            }
      
            public function showidd($id_d) {
               $doctor = $this->model->showidd($id_d);
               header("content-type:application/json");
                echo json_encode($doctor);
            }


            
            public function deletedoctor($id_d) {
               
              if ($this->model->deletedoctor($id_d)) {
              
               $this->jsonResponse( ['message'=>'delete doctor successfully']);
                 } else { 
                     
                     $this->jsonResponse(['error'=>"failed to delet doctor."]); 
                      }
            }
            
            public function updatedoctor($id_d) {
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  $name_d = $_POST['name_d'];  
                  $data= [ 
                    'name_d' => $name_d, 
                   ]; 
                   
                  if($this->model->updatedoctor($id_d,$data)){ 
                     
                     $this->jsonResponse( ['message'=>'update doctor successfuly']); 
                   
                  }else { 
                     $this->jsonResponse(['error'=>"failed to add doctor."]); 
                  } }}
               
               
               
               
               
               
               
               }
            
            
            
            ?>