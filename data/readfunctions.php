<?php

include_once 'filenames.php';

/* Functions to read data */
function readUsers()
{
    $users = array();
    // Read the JSON file 
    $json = file_get_contents(USERS_FILE());
    // Decode the JSON file
    $data = json_decode($json, true);
    foreach ($data as $v) {
        $users[$v['userid']] = new User($v['userid'], $v['username'], $v['useremail'], $v['fullname'], $v['password'], $v['favoritegame']);
    }
    return $users;
}

function readGames()
{
    $games = array();
    // Read the JSON file 
    $json = file_get_contents(GAMES_FILE());
    // Decode the JSON file
    $data = json_decode($json, true);
    foreach ($data as $v) {
        $games[$v['gameid']] = new Game($v['gameid'], $v['title'], $v['genre'], $v['release date'], $v['age rating'], $v['developer'], $v['platforms'], $v['picture'], $v['official reviews'], $v['retailers']);
    }
    return $games;
}

// User review sample taken from:
// https://data.world/crawlfeeds/gamestop-products-reviews-dataset/workspace/file?filename=gamestop_product_reviews_dataset_sample.csv
function readUserReviews()
{
    $readData = array();
    // Read the JSON file 
    $json = file_get_contents(USER_REVIEWS_FILE());
    // Decode the JSON file
    $data = json_decode($json, true);
    foreach ($data as $v) {
        $readData[$v['urid']] = new UserReview($v['urid'], $v['rating'], $v['userid'], $v['review'], $v['gameid']);
    }
    return $readData;
}
function readOfficialReviews()
{
    $officialreviews = array();
    // Read the JSON file 
    $json = file_get_contents(OFFICIAL_REVIEWS_FILE());
    // Decode the JSON file
    $data = json_decode($json, true);
    foreach ($data as $v) {
        $parse = parse_url($v['orlink']);
        $officialreviews[$v['orid']] = new OfficialReview($v['orid'], $v['orlink'], $parse['host']);
    }
    return $data;
}
function readRetailers()
{
    $retailers = array();
    // Read the JSON file 
    $json = file_get_contents(RETAILERS_FILE());
    // Decode the JSON file
    $data = json_decode($json, true);
    foreach ($data as $v) {
        $retailers[$v['retailerid']] = new RetailerInformation($v['retailerid'], $v['price'], $v['info'], $v['link']);
    }
    return $retailers;
}
