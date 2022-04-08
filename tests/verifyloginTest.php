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
//    public function testLoginWrongPass(): void
//     {
       
//         //Wrong Password
       
//         $this->assertFalse(loginValidInput(__TESTUSERNAME__, 'admine'));
//     }

//    public function testLoginWrongUsername(): void
//     {
       
//         $this->assertFalse(loginValidInput('admine', __TESTPASSWORD__));
//     }

//    public function testLoginSuccess(): void
//     {
      
//         //Login Success
      
//         $this->assertTrue(loginValidInput(__TESTUSERNAME__, __TESTPASSWORD__));
//     }
   

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
