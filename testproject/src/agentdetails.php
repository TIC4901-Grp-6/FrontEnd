<?php

    namespace Tic4902\TestProject;

    class agentdetails {

        public $AgentPassword;
        public $Name;
        public $Gender;
        public $Email;
        public $ContactNumber;
        public $RegistrationNo;
        public $RegistrationStartDate;
        public $RegistrationEndDate;
        public $EstateAgentName;
        public $EstateAgentLicenseNo;
        public $FileName;

        public function __construct($AgentPassword, $Name, $Gender, $Email, $ContactNumber, $RegistrationNo,
        $RegistrationStartDate, $RegistrationEndDate, $EstateAgentName, $EstateAgentLicenseNo, $FileName){
            $this->AgentPassword = $AgentPassword;
            $this->Name = $Name;
            $this->Gender = $Gender;
            $this->Email = $Email;
            $this->ContactNumber = $ContactNumber;
            $this->RegistrationNo = $RegistrationNo;
            $this->RegistrationStartDate = $RegistrationStartDate;
            $this->RegistrationEndDate = $RegistrationEndDate;
            $this->EstateAgentName = $EstateAgentName;
            $this->EstateAgentLicenseNo = $EstateAgentLicenseNo;
            $this->FileName = $FileName;
        }

        public function changepassword($AgentPassword) {
            $this->AgentPassword = $AgentPassword;
        }

        public function changeName($Name) {
            $this->Name = $Name;
        }
        public function changeGender($Gender) {
            $this->Gender = $Gender;
        }
        public function changeEmail($Email) {
            $this->Email = $Email;
        }
        public function changeContactNumber($ContactNumber) {
            $this->ContactNumber = $ContactNumber;
        }
        public function changeRegistrationNo($RegistrationNo) {
            $this->RegistrationNo = $RegistrationNo;
        }
        public function changeRegistrationStartDate($RegistrationStartDate) {
            $this->RegistrationStartDate = $RegistrationStartDate;
        }
        public function changeEstateAgentName($EstateAgentName) {
            $this->EstateAgentName = $EstateAgentName;
        }
        public function changeEstateAgentLicenseNo($EstateAgentLicenseNo) {
            $this->EstateAgentLicenseNo = $EstateAgentLicenseNo;
        }
        public function changeFileName($FileName) {
            $this->FileName = $FileName;
        }
    }

?>