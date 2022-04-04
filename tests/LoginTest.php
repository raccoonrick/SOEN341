<?php
require "login.php";


use PHPUnit\Framework\TestCase;
use Website;

class LoginTest extends TestCase
{

    function testLoginWrongPass(): void
    {
        $TestUserLogin = new Website\Login();
        //Wrong Password
        $TestUserLogin->withInput('admin', 'admine');
        $this->assertEquals(-1, $TestUserLogin->Login());
    }

    function testLoginWrongUsername(): void
    {
        $TestUserLogin = new Website\Login();
        //Wrong Username
        $TestUserLogin->withInput('admine', 'admin');
        $this->assertEquals(-1, $TestUserLogin->Login());
    }

    function testLoginSuccess(): void
    {
        $TestUserLogin = new Website\Login();
        //Login Success
        $TestUserLogin->withInput('admin', 'admin');
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
