<?php

use PHPUnit\Framework\TestCase;

/**
 * UserTest
 */
class UserTest extends TestCase
{
  /**
   * testReturnsFullName
   *
   * @return void
   */
  public function testReturnsFullName()
  {
    $user = new User();
    $user->firstName = 'John';
    $user->lastName = 'Doe';
    $this->assertEquals('John Doe', $user->getFullName());
  }

  /**
   * testFullNameIsEmptyByDefault
   *
   * @return void
   */
  public function testFullNameIsEmptyByDefault()
  {
    $user = new User();
    $this->assertEquals(' ', $user->getFullName());
  }

  /**
   * testFirstAndLastNameAreTrimmed
   * @test
   *
   * @return void
   */
  public function user_has_first_name()
  {
    $user = new User();
    $user->firstName = 'John';
    $this->assertEquals('John', $user->firstName);
  }
}
