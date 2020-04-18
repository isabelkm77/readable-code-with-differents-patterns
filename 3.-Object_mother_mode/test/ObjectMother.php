<?php


class ObjectMother
{
    function test_user_is_able_to_edit_video_with_enough_access_level(): void
    {
        $user = UserMother::withThisRole(3);

        assertThat(true, $user->canEditVideos());
    }

    function test_user_is_not_able_to_edit_videos_without_enough_access_level(): void
    {
        $user = UserMother::withThisRole(1);

        assertThat(false, $user->canEditVideos());
    }

    function assertThat(bool $expected, bool $actual): void
    {
        if ($expected !== $actual) {
            throw new Exception('Condition not satisfied');
        }
    }
}
