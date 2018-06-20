<?php
namespace Fivedots\NepaliCalendar\Month;
//use Fivedots\NepaliCalendar\Month\MonthInterface;
class NepaliUnicode implements MonthInterface
{
    const BAISAKH = 1;
    const JESTHA = 2;
    const ASHAR = 3;
    const SHRAWAN = 4;
    const BHADRA = 5;
    const ASHOJ = 6;
    const KARTIK = 7;
    const MANGSHIR = 8;
    const POUSH = 9;
    const MAGH = 10;
    const FALGUN = 11;
    const CHAITRA = 12;

    protected static $months = array(
        self::BAISAKH => 'बैशाख', self::JESTHA => 'जेठ',
        self::ASHAR => 'असार', self::SHRAWAN => 'साउन',
        self::BHADRA => 'भदौ', self::ASHOJ => 'असोज',
        self::KARTIK => 'कार्तिक', self::MANGSHIR => 'मङ्सिर',
        self::POUSH => 'पुष', self::MAGH => 'माघ',
        self::FALGUN => 'फाल्गुण', self::CHAITRA => 'चैत्र'
    );

    public static function getTitle($index)
    {
        return self::$months[$index];
    }

    /**
     * Check if date is with in nepali data range
     *
     * @param int $yy
     * @param int $mm
     * @param int $dd
     * @return bool
     */
    public static function isValidRange($yy, $mm, $dd)
    {
        if ($yy < 2000 || $yy > 2089) {
            return '२०००-देखि २०८९ सम्मको मिति मात्र सपोर्ट गर्छ';
        }

        if ($mm < 1 || $mm > 12) {
            return 'त्रुटी! १ देखि १२ सम्म मात्र सहि महिना हुन्छ';
        }

        if ($dd < 1 || $dd > 32) {
            return 'दिनांक केवल १ देखि ३१ सम्म मात्र हुन सक्छ ';
        }

        return TRUE;
    }
}