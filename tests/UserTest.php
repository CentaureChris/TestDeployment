<?php

namespace Test;
use App\User;
use PHPUnit\Framework\TestCase;
// require './class/User.php';


class UserTest extends TestCase
{
    public function testUserAge()
    {
        $user = new User('centaure','chris','test@gmai.com',15);
        $this->assertGreaterThan(13,$user->getAge());
    }
}