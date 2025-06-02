<?php

class User {
    public $userid;
    public $username;
    public $useremail;
    public $fullname;
    public $password;
    public $favoritegame;

    //-------CONSTRUCTOR--------------------
    public function __construct($id, $uname, $uemail, $fname, $pwd, $fav)
    {
        $this->userid = $id;
        $this->username = $uname;
        $this->useremail = $uemail;
        $this->fullname = $fname;
        $this->password = $pwd;
        $this->favoritegame = $fav;
    }
}
class UserReview {
    public $urid;
    public $review;
    public $rating;
    public $userid;
    public $gameid;

    public function __construct($id, $rat, $uid, $rev, $gid)
    {
        $this->urid = $id;
        $this->review = $rev;
        $this->rating = $rat;
        $this->userid = $uid;
        $this->gameid = $gid;
    }
}
class OfficialReview {
    public $orid;
    public $orlink;
    public $ortitle;

    public function __construct($id, $link, $title)
    {
        $this->orid = $id;
        $this->orlink = $link;
        $this->ortitle = $title;
    }
}

class RetailerInformation {
    public $retailerid;
    public $price;
    public $info;
    public $link;

    public function __construct($id,$price, $info,  $link)
    {
        $this->retailerid = $id;
        $this->price = $price;
        $this->info = $info;
        $this->link = $link;
    }
}

class Game {
    public $gameid;
    public $title;
    public $genre;
    public $releasedate;
    public $agerating;
    public $developer;
    public $platforms;
    public $picture;
    public $officialreviews;
    public $retailers;

    public function __construct($id,$t, $gen, $reldate, $agerat, $dev, $plat, $pic, $offrev, $ret)
    {
        $this->gameid = $id;
        $this->title = $t;
        $this->genre = $gen;
        $this->releasedate = $reldate;
        $this->agerating = $agerat;
        $this->developer = $dev;
        $this->platforms = $plat;
        $this->picture = $pic;
        $this->officialreviews = $offrev;
        $this->retailers = $ret;
    }
}