<?php

class Login
{
    private $correctUsername = 'user';
    private $correctPassword = 'password';

    public function authenticate($username, $password)
    {
        if ($username === $this->correctUsername && $password === $this->correctPassword) {
            return 'Login successful';
        } else {
            return 'Invalid username or password';
        }
    }
}
