<?php
declare(strict_types=1);

namespace UnitTesting\Login;

$root = dirname(__FILE__, 3);
require_once($root . 'config.php');
require($root . 'login.php');

//Account Used for testing
define('__TESTUSERNAME__', 'admin', true);
define('__TESTPASSWORD__', 'admin', true);

use PHPUnit\Framework\TestCase;
use Website;

final class LoginTest extends TestCase
{

    function testLoginWrongPass(): void
    {
        $TestUserLogin = new Website\Login();
        //Wrong Password
        $TestUserLogin->withInput(__TESTUSERNAME__, 'admine');
        $this->assertEquals(-1, $TestUserLogin->Login());
    }

    function testLoginWrongUsername(): void
    {
        $TestUserLogin = new Website\Login();
        //Wrong Username
        $TestUserLogin->withInput('admine', __TESTPASSWORD__);
        $this->assertEquals(-1, $TestUserLogin->Login());
    }

    function testLoginSuccess(): void
    {
        $TestUserLogin = new Website\Login();
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
