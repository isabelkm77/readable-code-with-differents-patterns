<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/User.php";
require __DIR__ . "/UserBuilder.php";

class UserTest extends TestCase {

    function test_user_is_able_to_role_as_admin(): void
    {
            $user = (new UserBuilder())->withThisRole(2)->build();

            $this->assertTrue($user->canManageAsAdmin());

    }

    function test_user_is_not_able_to_role_as_admin(): void
    {
        $user = (new UserBuilder())->withThisRole(1)->build();

        $this->assertFalse($user->canManageAsAdmin());
    }

}
