<?php

include_once 'psclasses.php';
include_once 'data/readfunctions.php';

/* Util Functions */
function disp($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function start_session()
{
    if (session_id() == '')
        session_start();
}

function isLogin()
{
    start_session();
    if (isset($_SESSION['userid']))
        return true;
    return false;
}

function logout()
{
    start_session();
    session_unset();
    session_destroy();
    header('location: index.php');
}

function getMatchingUser($data, $value)
{
    foreach ($data as $val) {
        if ($val->userid == $value) {
            return $val;
        }
    }
    return NULL;
}
function getMatchingGame($data, $value)
{
    foreach ($data as $val) {
        if ($val->gameid == $value) {
            return $val;
        }
    }
    return NULL;
}

function getMatchingRetailer($data, $value)
{
    foreach ($data as $val) {
        if ($val->retailerid == $value) {
            return $val;
        }
    }
    return NULL;
}

function getMatchingUserReview($data, $value)
{
    foreach ($data as $val) {
        if ($val->urid == $value) {
            return $val;
        }
    }
    return NULL;
}

function getMatchingOfficialReview($data, $value)
{
    foreach ($data as $val) {
        if ($val->orid == $value) {
            return $val;
        }
    }
    return NULL;
}

function updateUserSession()
{
    start_session();
    $uid = $_SESSION['userid'];
    // var_dump($uid);
    $user = getMatchingUser(readUsers(), $uid);
    if ($user != NULL) {
        $_SESSION['userinfo'] = $user;
        return $user;
    }
}


/* Functions to manipulate data */
function register($data)
{
    $userid = date('ymdHis');
    $username =  htmlspecialchars($data['username']);
    $useremail =  htmlspecialchars($data['useremail']);
    $fullname =  htmlspecialchars($data['fullname']);
    $password =  htmlspecialchars($data['password']);
    $favorite =  "";

    start_session();
    $users = readUsers();
    $users[] = new User($userid, $username, $useremail, $fullname, $password, $favorite);
    $newJsonString = json_encode($users);
    file_put_contents(USERS_FILE(), $newJsonString);
    header("location: account.php?success=yes");
}
function login($data)
{
    start_session();
    session_unset();
    session_destroy();

    $username =  htmlspecialchars($data['username']);
    $password =  htmlspecialchars($data['password']);
    echo $username . ' ' . $password . '<br>';
    $i = 0;
    foreach (readUsers() as $user) {
        //var_dump($user);
        if ($user->username == $username && $user->password == $password) {
            //echo 'Login';
            start_session();
            $_SESSION['userid'] = $user->userid;
            $_SESSION['userinfo'] = $user;
            header("location: index.php");
        }
        $i++;
    }
    echo 'Wrong username and password. Go back and try again.';
}
function updateUser($data)
{
    $useremail =  htmlspecialchars($data['useremail']);
    $fullname =  htmlspecialchars($data['fullname']);
    $password =  htmlspecialchars($data['password']);

    start_session();
    $i = $_SESSION['userid'];
    $users = readUsers();
    //$i = $_SESSION['index'];
    $users[$i]->useremail = $useremail;
    $users[$i]->fullname = $fullname;
    $users[$i]->password = $password;

    $newJsonString = json_encode($users);
    file_put_contents(USERS_FILE(), $newJsonString);

    header("location: profile.php");
}

function favoriteGame($data, $isAdd)
{
    $gameid =  htmlspecialchars($data['gameid']);

    start_session();
    $id = $_SESSION['userid'];
    $users = readUsers();
    $users[$id]->favoritegame = ($isAdd) ? $gameid : "";

    $newJsonString = json_encode($users);
    file_put_contents(USERS_FILE(), $newJsonString);

    //$users = readUsers();
    header("location: profile.php");
}
function addUserReview($data)
{
    start_session();
    $urid = date('ymdHis');
    $review =  htmlspecialchars($data['review']);
    $rating =  htmlspecialchars($data['rating']);
    $gameid =  htmlspecialchars($data['gameid']);
    if ($rating < 1 || $rating > 10) $rating = "1";
    $userid =  $_SESSION['userid'];

    $userreviews = readUserReviews();
    $userreviews[$urid] = new UserReview($urid, $rating, $userid, $review, $gameid);
    $newJsonString = json_encode($userreviews);
    file_put_contents(USER_REVIEWS_FILE(), $newJsonString);
    $userreviews = readUserReviews();
    //disp($userreviews);
    header("location: game-details.php?gameid=" . $gameid);
}

// function to get top ranked games
function topRankedGames()
{
    $reviews = readUserReviews();
    $topgames = array();
    $count = array();
    foreach ($reviews as $review) {
        if (isset($topgames[$review->gameid])) {
            $topgames[$review->gameid] += $review->rating;
            $count[$review->gameid]++;
        } else {
            $topgames[$review->gameid] = $review->rating;
            $count[$review->gameid] = 1;
        }
    }

    foreach ($topgames as $key => $value) {
        $topgames[$key] = round($value / $count[$key], 1);
    }
    return $topgames;
}
/* Check which button was pressed */
if (isset($_POST['submitLogin'])) {
    login($_POST);
} else if (isset($_GET['logout'])) {
    logout();
} else if (isset($_POST['submitUpdate'])) {
    updateUser($_POST);
} else if (isset($_POST['submitRegister'])) {
    register($_POST);
} else if (isset($_POST['submitUserReview'])) {
    addUserReview($_POST);
} else if (isset($_POST['submitAddFavoriteGame'])) {
    favoriteGame($_POST, true);
} else if (isset($_POST['submitRemoveFavoriteGame'])) {
    favoriteGame($_POST, false);
}
