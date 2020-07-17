<?php

namespace App\Tests\Unit;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new User();
    }

    public function testGetFirstName(): void
    {
        $value = 'firstName';

        $response = $this->user->setFirstName($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getFirstName());
    }

    public function testGetLastName(): void
    {
        $value = 'lastName';

        $response = $this->user->setLastName($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getLastName());
    }

    public function testGetEmail(): void
    {
        $value = 'test@gmail.com';

        $response = $this->user->setEmail($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getEmail());
    }

    public function testGetPassword(): void
    {
        $value = 'password';

        $response = $this->user->setPassword($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getPassword());
    }

    public function testGetTag(): void
    {
        $value = 'tag';

        $response = $this->user->setTag($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getTag());
    }

    public function testGetPhoneNumber(): void
    {
        $value = 0606060606;

        $response = $this->user->setPhoneNumber($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getPhoneNumber());
    }
}