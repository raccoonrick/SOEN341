<?php
require "login.php";


use PHPUnit\Framework\TestCase;

//Account Used for testing
define('__TESTUSERNAME__', 'admin', true);
define('__TESTPASSWORD__', 'admin', true);

class LoginTest extends TestCase
{

    function testLoginWrongPass(): void
    {
        $TestUserLogin = Login();
        //Wrong Password
        $TestUserLogin->withInput(__TESTUSERNAME__, 'admine');
        $this->assertEquals(-1, $TestUserLogin->Login());
    }

    function testLoginWrongUsername(): void
    {
        $TestUserLogin = Login();
        //Wrong Username
        $TestUserLogin->withInput('admine', __TESTPASSWORD__);
        $this->assertEquals(-1, $TestUserLogin->Login());
    }

    function testLoginSuccess(): void
    {
        $TestUserLogin = Login();
        //Login Success
        $TestUserLogin->withInput(__TESTUSERNAME__, __TESTPASSWORD__);
        $this->assertTrue($TestUserLogin->Login() > 0);
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
