<?php
    user PHPUnit\Framework\TestCase;
    require 'Welcome.php';
    class WelcomeTest extens TestCase {
      protected function setUp(){
        $this->welcome = new welcome();
      }

      protected function tearDown(){
          $this->welcome = NULL;
      }

      public function testGreet(){
        $result = $this->welcome->greet();
        $this->assertEquals("Welcome to DevOps on AWS", $result);
      }
    }
