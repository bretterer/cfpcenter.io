<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $user;

    public function setup()
    {
        parent::setup();

        $this->user = factory('App\User')->create();
    }

    public function testUserTableHasUserId()
    {
        $this->assertDatabaseHas('users', ['id' => $this->user->getId()]);
        $this->assertTrue(is_int($this->user->getId()));
    }

    public function testUserTableHasUserEmail()
    {

        $this->assertDatabaseHas('users', ['email' => $this->user->getEmail()]);
        $this->assertTrue(is_string($this->user->getEmail()));
    }

    public function testUserTableHasUserPassword()
    {
        $this->assertDatabaseHas('users', ['password' => $this->user->getPassword()]);
        $this->assertTrue(is_string($this->user->getPassword()));
    }
}
