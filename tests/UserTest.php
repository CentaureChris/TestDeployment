<?php

namespace Test;
use App\User;
use PHPUnit\Framework\TestCase;
require './class/User.php';


class UserTest extends TestCase
{
    public function testUserAge()
    {
        $user = new User('centaure','chris','test@gmail.com',15);
        $this->assertGreaterThan(13,$user->getAge());
    }

    public function testIsValid()
    {
        $user = new User('centaure','chris','test@gmail.com',15);
        $this->assertTrue($user->isValid());
    }

    public function testIsNotValid()
    {
        $user = new User('centaure','chris','blabla',15);
        $this->assertFalse($user->isValid());
    }
}