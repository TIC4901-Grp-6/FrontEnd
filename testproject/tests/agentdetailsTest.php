<?php

    namespace Tic4902\TestProject;

    use PHPUnit\Framework\TestCase;

    class agentdetailsTest extends TestCase {
        public function testconstruct(){
            $testcase1 = new agentdetails(1234, 'hugh', 'M', 'testing123@hotmail.com', 999, 'A0211111A',
            '23-09-2023', '23-09-2023', 'Timmy', 'FFF123', 'picy.jpg');
            $this->assertSame(1234, $testcase1->AgentPassword);
            $this->assertSame('M', $testcase1->Gender);
            $this->assertSame('testing123@hotmail.com', $testcase1->Email);
            $this->assertSame('23-09-2023', $testcase1->RegistrationEndDate);
            $this->assertSame('picy.jpg', $testcase1->FileName);

        }

        public function testchangepassword() {
            $testcase1 = new agentdetails(1234, 'hugh', 'M', 'testing123@hotmail.com', 999, 'A0211111A',
            '23-09-2023', '23-09-2023', 'Timmy', 'FFF123', 'picy.jpg');
            $testcase1->changepassword('tic4902');
            $this->assertSame('tic4902', $testcase1->AgentPassword);
        }

        public function testchangeContactNumber() {
            $testcase1 = new agentdetails(1234, 'hugh', 'M', 'testing123@hotmail.com', 999, 'A0211111A',
            '23-09-2023', '23-09-2023', 'Timmy', 'FFF123', 'picy.jpg');
            $testcase1->changeContactNumber('888');
            $this->assertSame('888', $testcase1->ContactNumber);
        }

        public function testchangeEstateAgentLicenseNo() {
            $testcase1 = new agentdetails(1234, 'hugh', 'M', 'testing123@hotmail.com', 999, 'A0211111A',
            '23-09-2023', '23-09-2023', 'Timmy', 'FFF123', 'picy.jpg');
            $testcase1->changeContactNumber('BBB123');
            $this->assertSame('BBB123', $testcase1->EstateAgentLicenseNo);
        }

    
    }

?>