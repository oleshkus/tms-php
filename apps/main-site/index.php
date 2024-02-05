<?php
$x = 5;
echo "<br>";
echo $x+3;
echo "<br>";

$a = 10;
$b = 7;
$y = 12;
$name = "Алиса";
$age = 25;
echo $a/$b . "<br>";
$stroka = "Меня зовут $name, мне $age лет и ";
echo $y*2 . "<br>";

echo $stroka . "мне нравится программирование";

$x = 6;
$y = 4;
$i = 0;
echo $x*$y . "<br>";
echo $x++ . "$x <br>";

$num = 5;
$notnum = "5";
//echo $num+$notnum;


function rectangle_size(float $a,float $b): float{
    return $a * 2 + $b * 2;
}

echo rectangle_size(5,5) . "Rectangles square";

$months = [
    "january" => 31,
    "february" => 28,

    "march" => 31,
    "april" => 30,
    "may" => 31,

    "june" => 30,
    "july" => 31,
    "august" => 31,

    "september" => 30,
    "october" => 31,
    "november" => 30,

    "december" => 31
];

//echo $months["september"];

function monthDays(string $month): void
{
    global $months;
    echo $months["$month"];
}

monthDays("february");

$taskText = "я люблю обучаться PHP";

echo strtolower($taskText);
echo strtoupper($taskText);
echo strlen($taskText);
function replace_word($str, $replace_word) {
    $pos = strpos($str, "PHP");
    if ($pos !== false) {
        $str = substr_replace($str, $replace_word, $pos, strlen("PHP"));
    }
    return $str;
}

$replace_word = "JavaScript";
$str_new = replace_word($taskText, $replace_word);
echo $str_new;

$count_words = str_word_count($taskText);
echo $count_words;

$array = [
    "name" => "Fred",
    "remove" => true,
    "additional_params" => [
        "is_married" => false,
        "country" => "France",
        "born" => "10.09.1982"
    ]
];

unset($array["remove"]);
print_r($array);
echo "<br>";
$phoneNumber = "+375257125242";
echo "<br>";
echo preg_match('^(\+375|375)?(25|29|33|44)(\d{3})(\d{2})(\d{2})$^', $phoneNumber);
$urlAdress = "";
echo preg_match('^/catalog/\d+/[a-zA-Z0-9-_№]+/[a-zA-Z0-9-_№]+$^', $urlAdress);

echo "<br>";
$str = "Я люблю PHP";
$str = str_replace(' ', '', $str);
echo $str; // "ЯлюблюPHP"
echo "<br>";
$str = "Я люблю PHP";
$str = str_replace('PHP', 'Python', $str);
echo $str; // "Я люблю Python"
echo "<br>";
if (strpos($str, 'PHP') !== false) {
    echo 'Строка содержит подстроку "PHP"';
} else {
    echo 'Строка не содержит подстроку "PHP"';
}