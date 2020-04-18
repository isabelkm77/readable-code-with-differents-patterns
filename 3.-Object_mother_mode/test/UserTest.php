<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . "../src/User.php";
require __DIR__ . "../src/Role.php";
require __DIR__ . "../src/UserId.php";
require __DIR__ . "../src/UserName.php";


class UserTest extends TestCase {

    function test_user_is_able_to_edit_video_with_enough_access_level(): void
    {
        $user = UserMother::withThisRole(3);

        $this->assertTrue($user->canManageAsAdmin());
    }

    function test_user_is_not_able_to_edit_videos_without_enough_access_level(): void
    {
        $user = UserMother::withThisRole(1);

        $this->assertFalse($user->canManageAsAdmin());
    }



}
