<?php

use PHPUnit\Framework\TestCase;

require 'login_class.php';

class LoginTest extends TestCase
{
    private $login;

    protected function setUp(): void
    {
        $this->login = new Login();
    }

    public function testSuccessfulLogin()
    {
        $result = $this->login->authenticate('user', 'password');
        $this->assertEquals('Login successful', $result);
    }

    public function testFailedLogin()
    {
        $result = $this->login->authenticate('user', 'wrongpassword');
        $this->assertEquals('Invalid username or password', $result);
    }
}
