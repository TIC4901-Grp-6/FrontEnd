<?php

    namespace Tic4902\TestProject;

    use PHPUnit\Framework\TestCase;

    class propertySQLresultsTest extends TestCase  {

        public function testClassConstructor()
            {
                $testcase1 = new propertySQLresults();
                $testcase1->setagentno('A0211520A');
                $result = $testcase1->agentregistrationno;
                $this->assertSame('A0211520A', $result);
                
            }

            public function testgetagentdata(){
                $testcase2 = new propertySQLresults();
                $testcase2->setagentno('A0211520A');
                $result = $testcase2->getagentdata();
                $this->assertEmpty($result, "data holder is not empty");
            }

            public function testgetpropdatabyagent(){
                $testcase2 = new propertySQLresults();
                $testcase2->setagentno('A0211520A');
                $result = $testcase2->getpropdatabyagent();
                $this->assertEmpty($result, "data holder is not empty");
            }


        }



?>