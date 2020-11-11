<?php
    require 'person.php';

    class personTest extends PHPUnit_Framework_TestCase{

        public $calculator;
 
        public function setUp()
        {
            $this->calculator = new Calculator();
        }
     
        public function tearDown()
        {
            $this->calculator = NULL;
        }

        public function testLogin()
        {
            $result = $this->calculator->login('ADMIN', 'admin');
            $this->assertEquals(TRUE,$result);
        }
    }

?>