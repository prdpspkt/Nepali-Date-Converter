<?php
namespace Fivedots\NepaliCalendar
;
class Unicode{
    protected $days = array("०", "१", "२", "३", "४", "५", "६", "७", "८", "९");
    public static function getNepaliNumber($number){
        $nvars = str_split($number);
        $nepaliNumber = [];
        foreach ($nvars as $n) {
           array_push($nepaliNumber, $days[$n]);
        }
        $number = join("", $nepaliNumber);
        return $number;
    }
}