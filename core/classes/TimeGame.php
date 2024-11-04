<?php

namespace classes;

class TimeGame
{
protected int $medAll = 0;
protected int $medCount = 50;
protected  $lastUpdate;

public function __construct(){

//    $this->medAll = $_SESSION['userInfo']['med'];
//    $this->medCount = $_SESSION['userInfo']['medCount'];
//    $this->medAll = $_SESSION['lastUpdate']['med'];
    $this->lastUpdate = time();
    $_SESSION['time'] = $this->lastUpdate;

}


public function lastUpdate(){

$now = time();
$hour_in_seconds = 3600;
$min_in_seconds = 60;

if(($now - $this->lastUpdate) > $min_in_seconds){
    $minutes = floor(($now - $this->lastUpdate) / $min_in_seconds);
    $this->medAll += $minutes * 50;
}
return $this;
}

    public function getMedAll()
    {
        return $this->medAll;
}



}