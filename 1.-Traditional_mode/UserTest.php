<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/User.php";

class UserTest extends TestCase {

    function test_user_is_able_to_role_as_admin(): void
    {
        $user = new User('some-id', 'some-name', 3);

            $this->assertTrue($user->canManageAsAdmin());

    }

    function test_user_is_not_able_to_role_as_admin(): void
    {
        $user = new User('some-id', 'some-name', 1);

        $this->assertFalse($user->canManageAsAdmin());
    }

}
