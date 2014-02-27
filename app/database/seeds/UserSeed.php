<?php

class UserSeed {

    function run()
    {
        $user = new User;
        $user->username = "Test User";
        $user->save();
    }
}
