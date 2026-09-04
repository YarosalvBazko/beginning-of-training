<?php
$title = "📝 Switch-case в PHP";
$lead = "Альтернатива if/elseif для проверки равенства.";
$doc_link = "https://www.php.net/manual/ru/control-structures.switch.php";
require_once "../blocks/header.php";
require_once "../includes/DemoHelper.php";
?>

<?php
// ============================================================
// ДЕМОНСТРАЦИЯ 1: Простой switch
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем базовую конструкцию switch
// ССЫЛКА: https://www.php.net/manual/ru/control-structures.switch.php
// ============================================================
DemoHelper::show(
    '$x = 3;
    switch($x) {
        case 1:
            echo "x = 1";
            break;
        case 2:
            echo "x = 2";
            break;
        case 3:
            echo "x = 3";
            break;
        default:
            echo "x не равен 1, 2 или 3";
    }',
    'Простой switch-case',
    'Проверяет значение переменной на совпадение с case'
); 

// ============================================================
// ДЕМОНСТРАЦИЯ 2: Switch со строками
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем switch со строковыми значениями
// ============================================================
DemoHelper::show(
    '$color = "red";
    switch($color) {
        case "red":
            echo "Красный";
            break;
        case "blue":
            echo "Синий";
            break;
        case "green":
            echo "Зеленый";
            break;
        default:
            echo "Неизвестный цвет";
    }',
    'Switch со строками',
    'Можно проверять не только числа, но и строки'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 3: Несколько case без break
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем, как использовать несколько case для одного вывода
// ============================================================
DemoHelper::show(
    '$day = 3;
    switch($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Рабочий день";
            break;
        case 6:
        case 7:
            echo "Выходной";
            break;
        default:
            echo "Некорректный день";
    }',
    'Несколько case без break',
    'Если убрать break, код выполнится для всех подходящих case'
);
?>


<?php require_once "../blocks/footer.php"; ?>