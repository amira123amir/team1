<?php

require __DIR__.'/../model/competenciesModel.php';

class competenciesController {
    private $model;
  
    public function __construct($db) {
      
        $this->model = new competenciesModel($db);
    }
    private function jsonResponse($data){
 header("content-type:application/json");
          echo json_encode($data);
 }
        public function addcomp($id_d) { 
            if($_SERVER['REQUEST_METHOD']=='POST') { 
              $name_c=$_POST['name_c']; 
              if($this->model->addcomp($id_d,$name_c)){ 
                 
                 $this->jsonResponse( ['message'=>'add competencies successfuly']); 
               
              }else { 
                 $this->jsonResponse(['error'=>"failed to add competencies."]); 
              } 
            }}

            public function updatecomp($id_d) {
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  $name_c = $_POST['name_c'];  
                    
                  if($this->model->updatecomp($id_d,$name_c)){ 
                     
                     $this->jsonResponse( ['message'=>'update competencies successfuly']); 
                   
                  }else { 
                     $this->jsonResponse(['error'=>"failed to update."]); 
                  } }}
                      
               }
              
            ?>