<?php
//?>
<!---->
<!--<form method="post">-->
<!--    <label>Имя</label>-->
<!--    <input type="text" name="data" placeholder="Введите данные">-->
<!--    <button type="submit">Отправить</button>-->
<!--</form>-->
<!---->
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $data = $_POST["data"];
//    $file = fopen("user.txt", "a");
//    fwrite($file, $data . "\n");
//    fclose($file);
//}
//?>

    <form method="post">
        <label for="">Your Number</label>
        <input type="text" name='number' placeholder="your num">
        <button type="submit">Text</button>
    </form>
<?php
$file = fopen("numbers.txt", "w");
$max = 50;
for ($i = 0; $i < $max; $i++) {
    fwrite($file, rand(0, 10) . "\n");
}
fclose($file);

$user_number = $_POST['number']; // Получаем число от пользователя

$file_content = file_get_contents("numbers.txt");
$numbers_array = explode("\n", $file_content);

$count = array_count_values($numbers_array)[$user_number];
if ($user_number > $max){
    echo "Число $user_number больше $max, так не пойдет.";
} elseif ($user_number < 0){
    echo "Схера-ли оно меньше 0?";
}
else echo "Число $user_number встречается $count раз(а) в файле.";
?>