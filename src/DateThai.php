<?php

namespace Abcprintf\DateThai;

use Carbon\Carbon;

class DateThai
{
    private array $lists_full_month;
    /**
     * @var mixed|string
     */
    private $locale;
    private $date;

    public function __construct($locale = "th")
    {
        $this->locale = $locale;
        /**
         * Include Locale
         */
        $this->loadConfig($locale);
    }

    public function loadConfig($locale)
    {
        require_once __DIR__ . '/locales/' . $locale . '.php';

        $lists = [];
        switch ($locale) {
            case "th":
                $lists = full_month_th();
                break;
            case "en":
                $lists = full_month_en();
                break;
            case "cn":
                $lists = full_month_cn();
                break;
        }

        $this->lists_full_month = $lists;
    }

    public function getListsMonth(): array
    {
        return $this->lists_full_month;
    }

    public function setDate($newDate)
    {
        $this->date = Carbon::parse($newDate);
    }

    public function longDetail(): string
    {
        $year = $this->date->format('Y');
        if ($this->locale == "th") {
            $year = $this->date->addYear(543)->format('Y');
        }

        $month = $this->lists_full_month[$this->date->format('n')];
        $day = $this->date->format('d');

        return "{$day} {$month} {$year}";
    }
}