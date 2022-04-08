<?php
require "verifylogin.php";
use PHPUnit\Framework\TestCase;

//Account Used for testing
define('__TESTUSERNAME__', 'admin', true);
define('__TESTPASSWORD__', 'admin', true);

class LoginTest extends TestCase
{
public function testLoginInput() {
            $email ="admin";
            $password ="admin";
            $email2 = "";
            $password2 ="";
            $this->assertFalse(loginValidInput($email2,$password2));
            $this->assertTrue(loginValidInput($email,$password));
         
        }

}
?>
