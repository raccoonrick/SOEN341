<?php
require "login.php";


use PHPUnit\Framework\TestCase;

//Account Used for testing
define('__TESTUSERNAME__', 'admin', true);
define('__TESTPASSWORD__', 'admin', true);

class LoginTest extends TestCase
{

   public function testLoginWrongPass(): void
    {
       
        //Wrong Password
       
        $this->assertFalse(withInput(__TESTUSERNAME__, 'admine'));
    }

   public function testLoginWrongUsername(): void
    {
       
        $this->assertFalse(withInput('admine', __TESTPASSWORD__));
    }

   public function testLoginSuccess(): void
    {
      
        //Login Success
      
        $this->assertTrue(withInput(__TESTUSERNAME__, __TESTPASSWORD__));
    }

//    function testLogOut(): void
//    {
//        //session_start();
//        $_SESSION = array();
//        //session_destroy();
//        //Log Out
//        $this->assetFalse(fetch_user() > 0);
//    }
}
?>
