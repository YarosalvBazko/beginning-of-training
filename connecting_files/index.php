<?php
    // === НАЧАЛО БУФЕРИЗАЦИИ И СЕССИИ ===
    ob_start();        // Включает буферизацию вывода
    session_start();   // Запускает сессию (для работы $_SESSION)

    // === ПЕРЕМЕННАЯ ЗАГОЛОВКА ===
    $title = "Главная страница";

    // === ПОДКЛЮЧЕНИЕ ШАПКИ ===
    require_once "blocks/header.php";
    
?>

<!-- === ОСНОВНОЙ КОНТЕНТ === -->
<h2>Главная страницца</h2>

<?php

    // === РАБОТА С COOKIE ===
    $user_name = "Alex";
    
    // setcookie() - устанавливает cookie
    // (имя, значение, время жизни, путь, домен, защита, httpOnly)
    setcookie("user_name", $user_name, time() + 180);  // живет 180 секунд (3 минуты)
    
    // print_r($_COOKIE) - выводит все cookie
    print_r($_COOKIE);

    // Удаление cookie (установка времени в прошлом)
    // setcookie("user_name", $user_name, time() - 180);

    // Доступ к cookie
    // echo $_COOKIE['user_name'];

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 85%; margin-right: 15%; margin-left: 0;">';
    
    // === РАБОТА С ДАТОЙ И ВРЕМЕНЕМ ===
    echo date('m-l H:i:s', time() + 10800) . '<br>';
    echo date('m-d H:i:s', strtotime("-1 Day +10 Hour")) . '<br>';
    echo date('m-d H:i:s', strtotime("Last Monday")) . '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 10%; margin-right: 90%; margin-left: 0;">';

    // === РАБОТА С МАССИВАМИ ===
    $lis = [5, 7, 3, 6, 7, 8];
    unset($lis[1]);
    $lis = array_values($lis);
    rsort($lis);
    $arr = array_slice($lis, 2, 2);
    print_r($arr);
    echo '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 15%; margin-right: 85%; margin-left: 0;">';

    // === ОБЪЕДИНЕНИЕ МАССИВОВ ===
    $arr_1 = [5, 7];
    $arr_2 = [6, 8, 9];
    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);
    echo '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 30%; margin-right: 70%; margin-left: 0;">';

    // === ПОИСК В МАССИВЕ ===
    if(in_array(3, $lis) == "")
        echo "Not found". '<br>';
    else
        echo "Found". '<br>';
    print_r($lis) . '<br>';
    echo '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 30%; margin-right: 70%; margin-left: 0;">';

    // === ПРОВЕРКА ТИПОВ ===
    $x = 10;
    echo gettype($x) . '<br>';
    echo is_numeric($x) . '<br>';
    echo is_integer($x) . '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 2%; margin-right: 98%; margin-left: 0;">';

    // === РАБОТА СО СТРОКАМИ ===
    $str = "Example";
    echo strpos($str, "am") . '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 2%; margin-right: 98%; margin-left: 0;">';

    // === РАЗДЕЛЕНИЕ И ОБЪЕДИНЕНИЕ СТРОК ===
    $words = "john,bob,alex";
    $arr_words = explode(",", $words);
    print_r($arr_words) . '<br>';
    echo '<br>';
    echo implode(" | ", $arr_words). '<br>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 25%; margin-right: 75%; margin-left: 0;">';

    // === РАБОТА С ФАЙЛАМИ ===
    $file = fopen("text.tht", "a");
    // fwrite($file, "\nExample text\nHello"); // что бы не добавлялось 
    fclose($file);
    
    $filename = "text.tht";
    $file_2 = fopen("text.tht", "r");
    // $content = fread($file_2, filesize($filename)); // что бы не добавлялось 
    fclose($file_2);
    // echo $content. '<br>'; // что бы не добавлялось 

    file_put_contents("a.txt", "example\nhello");
    echo file_get_contents("a.txt"). '<br>';

    echo file_exists("a.txt"). '<br>';
    // rename("a.txt", "new_name.txt");
    // unlink("new_name.tht");

    echo __FILE__."<br>";
    chmod(__FILE__, 0777);
    echo fileperms(__FILE__)."<br>";

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 50%; margin-right: 50%; margin-left: 0;">';

    // === ИНФОРМАЦИЯ О СЕРВЕРЕ ===
    // phpinfo();  // полная информация о PHP
    
    // print_r($_SERVER) - выводит все серверные переменные
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0; width: 50%; margin-right: 50%; margin-left: 0;">';

    // === СЕРВЕРНЫЕ ПЕРЕМЕННЫЕ ===
    // $_SERVER['HTTP_HOST']      - хост (домен)
    // $_SERVER['REQUEST_URI']    - URI запроса (путь + параметры)
    // $_SERVER['HTTP_USER_AGENT'] - браузер пользователя
    echo $_SERVER['HTTP_HOST'].' - '. $_SERVER['REQUEST_URI']. '<br>';
    echo $_SERVER['HTTP_USER_AGENT']. '<br>';


    
    // === РЕДИРЕКТ (удаление параметра source) ===
    // Если в URL есть параметр ?source=...
    if(isset($_GET["source"]) && $_GET["source"] != "") {
        // Разбиваем URI по ?source=
        $link = explode("?source=", $_SERVER['REQUEST_URI']);
        // Формируем новый URL без параметра
        $redirect = "http://" . $_SERVER['HTTP_HOST'] . $link[0];
        
        // Отправляем заголовки для редиректа (301 - постоянный)
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $redirect);
        exit();  // останавливаем выполнение скрипта
    }

    echo '<hr style="border: 1px dashed #ccc; margin: 1px 0;">';

    // === ОТПРАВКА ПОЧТЫ ===
    $message = "Сообщение ";
    $to = "ybazko08@gmail.com";
    $from = "ybazko08@yandex.ru";
    $subject = "Тема сообщения";

    // Кодировка заголовка темы (для кириллицы)
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $to\r\nContent-type: text/plain; charset=utf-8\r\n";

    // Отправка письма (закомментировано для локальной разработки)
    // mail($to, $subject, $message, $headers);



    // === ПОДКЛЮЧЕНИЕ ПОДВАЛА ===
    require "blocks/footer.php";
?>

<hr style="border: 0; height: 10px; background: linear-gradient(to right, transparent, #333, transparent);">

    <!-- ============================================================
    ПОДРОБНЫЙ СПРАВОЧНИК ПО ТОМУ, ЧТО БЫЛО В КОДЕ
    ============================================================ -->
    
    <!-- ──────────────────────────────────────────────────────────────
    1. ДАТА И ВРЕМЯ
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    date(формат, время)  →  форматирует дату и время
    Документация: https://www.php.net/manual/ru/datetime.format.php
    
    Параметры формата:
    m  →  месяц (01-12)    d  →  день (01-31)
    l  →  день недели      H  →  час (00-23)
    i  →  минуты (00-59)   s  →  секунды (00-59)
    
    time()          →  текущая временная метка (Unix timestamp)
    time() + 10800  →  текущее время + 3 часа
    
    strtotime(строка)  →  преобразует текст в timestamp
    "-1 Day +10 Hour"  →  минус 1 день + 10 часов
    "Last Monday"      →  последний понедельник
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    2. МАССИВЫ
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    unset($arr[ключ])        →  удаляет элемент массива
    array_values($arr)       →  переиндексирует массив
    rsort($arr)              →  сортировка по убыванию
    array_slice($arr, 2, 2)  →  срез массива (с индекса 2, длиной 2)
    array_merge($a, $b)      →  объединение массивов
    in_array(3, $arr)        →  поиск значения в массиве
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    3. ТИПЫ ДАННЫХ
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    gettype($var)    →  возвращает тип переменной
    is_numeric($var) →  проверка на число
    is_integer($var) →  проверка на целое число
    is_string($var)  →  проверка на строку
    is_array($var)   →  проверка на массив
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    4. СТРОКИ
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    strpos($str, $needle)   →  позиция первого вхождения подстроки
    explode($delimiter, $str)  →  строка → массив
    implode($delimiter, $arr)  →  массив → строка
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    5. ФАЙЛЫ
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    ОТКРЫТИЕ И ЗАКРЫТИЕ:
    fopen(файл, режим)  →  открывает файл
    fclose(файл)        →  закрывает файл
    
    Режимы fopen():
    "r"  →  чтение           "w"  →  запись (перезаписывает)
    "a"  →  дозапись         "r+" →  чтение и запись
    "w+" →  чтение/запись    "a+" →  чтение/дозапись
    
    ЗАПИСЬ:
    fwrite(файл, строка)  →  записывает строку в файл
    file_put_contents(файл, данные)  →  записывает данные в файл
    
    ЧТЕНИЕ:
    fread(файл, длина)  →  читает из файла
    file_get_contents(файл)  →  читает содержимое файла
    filesize(файл)      →  размер файла
    
    ДРУГИЕ:
    file_exists(файл)  →  проверяет существование файла
    rename(старый, новый)  →  переименовывает файл
    unlink(файл)       →  удаляет файл
    chmod(файл, права)  →  изменяет права доступа
    fileperms(файл)    →  возвращает права доступа
    __FILE__           →  путь к текущему файлу
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    6. СЕРВЕРНЫЕ ПЕРЕМЕННЫЕ ($_SERVER)
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    $_SERVER['HTTP_HOST']       →  хост (домен) например: localhost:8000
    $_SERVER['REQUEST_URI']     →  URI запроса (путь + параметры) например: /about.php?source=123
    $_SERVER['HTTP_USER_AGENT'] →  информация о браузере пользователя
    $_SERVER['REMOTE_ADDR']     →  IP-адрес пользователя
    $_SERVER['REQUEST_METHOD']  →  метод запроса (GET, POST, etc.)
    $_SERVER['QUERY_STRING']    →  строка запроса (все параметры)
    
    print_r($_SERVER)  →  выводит все серверные переменные
    phpinfo()          →  полная информация о PHP
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    7. РЕДИРЕКТ (header)
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    header('Location: URL')  →  перенаправляет на указанный URL
    header('HTTP/1.1 301 Moved Permanently')  →  статус 301 (постоянный редирект)
    exit()  →  останавливает выполнение скрипта
    
    Пример:
    header('Location: /index.php');
    exit();
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    8. ОТПРАВКА ПОЧТЫ (mail)
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    mail(кому, тема, сообщение, заголовки)  →  отправляет письмо
    
    Параметры:
    $to      →  получатель (email)
    $subject →  тема письма (должна быть закодирована для кириллицы)
    $message →  текст сообщения
    $headers →  дополнительные заголовки (From, Reply-to, Content-type)
    
    Кодировка темы для кириллицы:
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    
    Заголовки:
    $headers = "From: $from\r\nReply-to: $to\r\nContent-type: text/plain; charset=utf-8\r\n";
    
    Важно: для работы mail() на локальном сервере нужен SMTP-сервер
    На хостинге обычно работает без дополнительных настроек
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    9. COOKIE И SESSION
    ────────────────────────────────────────────────────────────── -->
    <!-- 
    Cookie - данные, хранящиеся на стороне клиента (в браузере)
    
    setcookie(name, value, expire, path, domain, secure, httponly)
    setcookie("user_name", "Alex", time() + 180);  // живет 180 секунд
    
    Удаление cookie:
    setcookie("user_name", "Alex", time() - 180);  // время в прошлом
    
    Доступ к cookie:
    $_COOKIE['user_name']  →  получает значение cookie
    
    print_r($_COOKIE)  →  выводит все cookie
    
    Session - данные, хранящиеся на стороне сервера
    
    session_start()  →  запускает сессию (должна быть в начале скрипта)
    $_SESSION['key'] = 'value'  →  запись в сессию
    $value = $_SESSION['key']  →  чтение из сессии
    
    ob_start()  →  включает буферизацию вывода (позволяет отправлять заголовки после вывода)
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ============================================================
    КРАТКОЕ РЕЗЮМЕ
    ============================================================ -->
    <!-- 
    ДАТА:   date(), time(), strtotime()
    МАССИВЫ: unset(), array_values(), rsort(), array_slice(), array_merge(), in_array()
    ТИПЫ:   gettype(), is_numeric(), is_integer()
    СТРОКИ: strpos(), explode(), implode()
    ФАЙЛЫ:  fopen(), fwrite(), fread(), fclose(), file_put_contents(), 
            file_get_contents(), file_exists(), rename(), unlink(), chmod(), __FILE__
    СЕРВЕР: $_SERVER, print_r($_SERVER), phpinfo()
    РЕДИРЕКТ: header('Location: ...'), header('HTTP/1.1 301 ...'), exit()
    ПОЧТА:  mail($to, $subject, $message, $headers)
    COOKIE: setcookie(), $_COOKIE
    SESSION: session_start(), $_SESSION, ob_start()
    ============================================================ -->