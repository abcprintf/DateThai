# dateThai function

Show date in Thai and other languages.

```php
$dateThai = new DateThai("th");
$dateThai->setDate(date("Y-m-d"));
$x = $dateThai->longDetail();
// result : 17 ตุลาคม 2565

$dateThai = new DateThai("en");
$dateThai->setDate(date("Y-m-d"));
$x = $dateThai->longDetail();
// result : 17 October 2022

$dateThai = new DateThai("cn");
$dateThai->setDate(date("Y-m-d"));
$x = $dateThai->longDetail();
// result : 17 十月 2022
```

## License

The MIT License (MIT)