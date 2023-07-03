<?php

    namespace Tic4902\TestProject;

    class propertySQLresults {

        public $agentregistrationno;
        public $result;

        public function setagentno($agentno) {
            $this->agentregistrationno = $agentno;
        }

        public function getpropdatabyagent(){
            include("config.php");
            $sql = "SELECT * FROM properties WHERE AgentRegistrationNo= '". $this->agentregistrationno."';";
            $result = mysqli_query($link,$sql);
            return $result;        
        }

        public function getagentdata(){
            include("config.php");
            $sql = "SELECT * FROM agent WHERE RegistrationNo = '". $this->agentregistrationno. "';";
            $result = mysqli_query($link,$sql);
            return $result;  
        }

        public function deleteprop($propID){
            include("config.php");
            $querySelect = "select * from properties where propertyid = ".$propID. " and AgentRegistrationNo= '". $this->agentregistrationno."';";
            $ResultSelectStmt = mysqli_query($link,$querySelect);
        
            if (!$ResultSelectStmt) {
                echo "Query execution failed: " . mysqli_error($db);
            }  else {
        
              $fetchRecords = mysqli_fetch_array($ResultSelectStmt,MYSQLI_BOTH);
            
              $querySelect = "delete from properties where propertyid = ".$propID. " and AgentRegistrationNo= '". $this->agentregistrationno."';";
              $delete = mysqli_query($link,$querySelect);
           }

        }

        

    }

?>