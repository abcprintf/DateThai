<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/DateThai.php';

use Abcprintf\DateThai\DateThai;
use PHPUnit\Framework\TestCase;

class DateThaiTest extends TestCase
{

    public function testLongDetailTh()
    {
        $dateThai = new DateThai("th");

        $dateThai->setDate(date("Y-m-d"));

        $x = $dateThai->longDetail();
        $this->assertIsString("2022-09-17 22:51:00", $x);

        echo "\n ==> testLongDetailTh \n";
        echo $x;

        ob_flush();
    }

    public function testLongDetailEn()
    {
        $dateThai = new DateThai("en");

        $dateThai->setDate(date("Y-m-d"));

        $x = $dateThai->longDetail();
        $this->assertIsString("2022-09-17 22:51:00", $x);

        echo "\n ==> testLongDetailEn \n";
        echo $x;

        ob_flush();
    }

    public function testLongDetailCn()
    {
        $dateThai = new DateThai("cn");

        $dateThai->setDate(date("Y-m-d"));

        $x = $dateThai->longDetail();
        $this->assertIsString("2022-09-17 22:51:00", $x);

        echo "\n ==> testLongDetailCn \n";
        echo $x;

        ob_flush();
    }

}