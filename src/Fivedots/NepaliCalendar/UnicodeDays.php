<?php
namespace Fivedots\NepaliCalendar
;
class UnicodeDays{
    const SUNDAY = 1 ;
    const MONDAY = 2;
    const TUESDAY = 3;
    const WEDNESDAY= 4;
    const THURSDAY = 5;
    const FRIDAY = 6;
    const SATURDAY= 7;

    protected static $days = array(
        self::SUNDAY=>'आइतबार',self::MONDAY=>'सोमबार',self::TUESDAY=>'मंगलबार',
        self::WEDNESDAY=>'बुधबार', self::THURSDAY=>'बिहिबार',self::FRIDAY=>'शुक्रबार',
        self::SATURDAY=>'शनिबार'
    );

    public static function getTitle($index){
        return self::$days[$index];
    }
}