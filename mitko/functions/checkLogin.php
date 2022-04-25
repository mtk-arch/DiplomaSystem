<?php
if (isset($_COOKIE["user_key"])) {
    $userKey = $_COOKIE["user_key"];
    $userinfo = getUserByKey($userKey);
    if($userinfo != NULL) {
        $loggedIn = true;
    } else {
        $userinfo = NULL;
        $loggedIn = false;
    }
} else {
    $userinfo = NULL;
    $loggedIn = false;
} ?>