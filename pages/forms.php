<?php
$title = "Формы в PHP";
require_once "../blocks/header.php";
require_once "../includes/DemoHelper.php";
?>

<h1 class="section-title">📝 Формы в PHP</h1>

<p class="lead">GET, POST, валидация, сессии, безопасность.</p>

<a href="/index.php" class="back-link">← Назад к списку</a>

<?php
// ============================================================
// ДЕМОНСТРАЦИЯ 1: GET-запросы
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем, как получить данные из URL-строки
// ССЫЛКА: https://www.php.net/manual/ru/reserved.variables.get.php
// ============================================================
DemoHelper::show(
    'echo "Пример URL: /about.php?username=Alex&age=25<br>";
    print_r($_GET);',
    'GET-запросы',
    'Данные передаются через URL после знака ?'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 2: POST-запросы
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем, как получить данные из тела POST-запроса
// ССЫЛКА: https://www.php.net/manual/ru/reserved.variables.post.php
// ============================================================
DemoHelper::show(
    'if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Это POST-запрос<br>";
        print_r($_POST);
    } else {
        echo "Это не POST-запрос<br>";
        echo "Отправить форму методом POST";
    }',
    'POST-запросы',
    'Данные передаются в теле запроса (скрыто от пользователя)'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 3: Проверка метода запроса
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем, как определить, какой метод (GET/POST) использовался
// ССЫЛКА: https://www.php.net/manual/ru/reserved.variables.server.php
// ============================================================
DemoHelper::show(
    'echo "Метод запроса: " . $_SERVER["REQUEST_METHOD"];',
    'Проверка метода запроса',
    '$_SERVER["REQUESR_METHOD"] показывет GET или POST'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 4: Валидация данных
// ============================================================
// ЧТО ДЕЛАЕМ: Проверяем, что обязательные поля не пустые и имеют корректную длину
// ССЫЛКА (strlen): https://www.php.net/manual/ru/function.strlen.php
// ССЫЛКА (trim): https://www.php.net/manual/ru/function.trim.php
// ============================================================
DemoHelper::show(
    '$errors = [];
    $name = trim($_POST["username"] ?? "");
    
    if(empty($name)) {
        $errors[] = "Имя обязательно";
    } elseif(strlen($name) < 2) {
        $errors[] = "Имя должно быть не менее 2 символов";
    }

    if(!empty($errors)) {
        echo "Ошибка:<br>";
        foreach($errors as $error) {
            echo "- $error<br>";
        }
    } else {
        echo "Привет, $name!";
    }',
    'Валидация данных',
    'Проверяем данные перед обработкой'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 5: Проверка email
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/function.strpos.php
// ============================================================
DemoHelper::show(
    '$email = trim($_POST["email"] ?? "");
    if(strpos($email, "@") === false) {
        echo "Введите корректный email (должен содержать @)";
    } else {
        echo "Email: $email";
    }',
    'Проверка email',
    'strpos() проверяет наличие @ в email'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 6: Хеширование пароля
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/function.md5.php
// ============================================================
DemoHelper::show(
    '$password = "qwerty123";
    echo "Пароль: $password<br>";
    echo "Хеш (md5): " . md5($password) . "<br>";
    echo "Хеш (sha1): " . sha1($password);',
    'Хеширование пароля',
    'md5() и sha1() создают необратимый хеш'

);

// ============================================================
// ДЕМОНСТРАЦИЯ 7: Безопасность (htmlspecialchars)
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/function.htmlspecialchars.php
// ============================================================
DemoHelper::show(
    '$input = "<script>alert(\"XSS\")</script>";
    echo "Без защиты: $input<br>";
    echo "С защитой: " . htmlspecialchars($input);',
    'Защита от XSS (htmlspecialchars)',
    'Превращает < > в &lt; &gt;, чтобы код не выполнялся'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 8: Сессии
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/function.session-start.php
// ССЫЛКА: https://www.php.net/manual/ru/reserved.variables.session.php
// ============================================================
DemoHelper::show(
    'session_start();
    if(!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
    }
    $_SESSION["count"]++;
    echo "Вы обновили страницу " . $_SESSION["count"] . " раз(а)";',
    'Сессии (session)',
    'session_start() сохраняет данные между запросами'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 9: Редирект (header)
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/function.header.php
// ============================================================
DemoHelper::show(
    'echo "header(\'Location: /index.php\');<br>";
    echo "Перенаправляет пользователя на другою страницу<br>";
    echo "Важно: вызвывать до любого вывода";',
    "Редирект (header)",
    'Перенаправляет пользователя на другую страницу'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 10: GET vs POST
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/faq.html.php#faq.html.get-post
// ============================================================
DemoHelper::show(
    'echo "GET: данные видны в URL<br>";
    echo "POST: данные не видны в <URL<br>";
    echo "GET: ограничение по длине ~2048 символов<br>";
    echo "POST: нет ограничения по длине<br>";
    echo "GET: для поиска, фильтров<br>";
    echo "POST: для паролей, форма";',
    'GET vs POST',
    'Различия между GET и POST запросами'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 11: Полный пример обработки формы
// ============================================================
// ССЫЛКА: https://www.php.net/manual/ru/tutorial.forms.php
// ============================================================
DemoHelper::show(
    'if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["username"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $pass = trim($_POST["password"] ?? "");
        $message = trim($_POST["message"] ?? "");
        
        if($name == "") {
            echo "Вы не ввели имя пользователя";
        } elseif(strlen($name) <= 1) {
            echo "Такого имени не существует";
        } elseif($email == "" || $pass == "" || $message == "") {
            echo "Введите все данные";
        } else {
            echo "Успешная отправка!<br>";
            echo "Имя: $name<br>";
            echo "Email: $email<br>";
            echo "Пароль (захеширован): " . md5($pass) . "<br>";
            echo "Сообщение: $message";
        }
    } else {
        echo "Это не POST-запрос. Отправьте форму методом POST";
    }',
    'Полный пример обработки формы',
    'Валидация всех полей: имя, email, пароль, сообщение'
);

// ============================================================
// ДЕМОНСТРАЦИЯ 12: Обработка формы с сессиями и ошибками
// ============================================================
// ЧТО ДЕЛАЕМ: Показываем, как сохранять данные и ошибки в сессии
// ССЫЛКА: https://www.php.net/manual/ru/function.session-start.php
// ССЫЛКА: https://www.php.net/manual/ru/reserved.variables.session.php
// ССЫЛКА: https://www.php.net/manual/ru/function.htmlspecialchars.php
// ============================================================
DemoHelper::show(
    'session_start();
    
    function redirect() {
        header("Location: contact.php");
        exit;
    }
        
    $user_name = htmlspecialchars(trim($_POST["username"] ?? ""));
    $from = htmlspecialchars(trim($_POST["email"] ?? ""));
    $subject = htmlspecialchars(trim($_POST["subject"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));
    
    $_SESSION["user_name"] = $user_name;
    $_SESSION["email"] = $from;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;

    if(strline($user_name) <= 1) {
        $_SESSION["error_username"] = "Введите корректное имя";
        echo "Ошибка: имя слишком короткое<br>";
        echo Сохренено в сессии: " . $_SESSION["error_username"];
    } elseif(strlen($from) < 5 || strpos($from, "@") == false) {
        $_SESSION["erroe_email"] = "Вы ввели некорректный email";
        echo "Ошибка: email некорректен <br>";
        echo "Сохранено в сессии: " . $_SESSION["erroe_email"];
    } elseif(strlen($subject) <= 5) {
        $_SESSION["error_subject"] = "Тема сообщения не меньше 5 символов";
        echo "Ошибка: тема слишком короткая<br>";
        echo "Сохранено в сессии: " . $_SESSION["error_subject"];
    } elseif(strlen($message) <= 15) {
        $_SESSION["error_message"] = "Сообщение не меньше 15 символов";
        echo "Ошибка: сообщение слишком короткое<br>";
        echo "Сохранено в сессии: " . $_SESSION["error_message"];
    } else {
        $_SESSION["error_username"] = "";
        $_SESSION["erroe_email"] = "";
        $_SESSION["error_message"] = "";
        $_SESSION["error_message"] = "";
        echo "Успешная отправка!<br>";
        echo "Имя: $user_name<br>";
        echo "Email: $from<br>";
        echo "Тема: $subject<br>";
        echo "Сообщение: $message";
    }',
    'Обработка формы с сессиями и ошибками',
    'Сохраняет данные и ошибки в сессии. Использует htmlspecialchars() для защиты. Показывает, как работает валидация с redirect.'
);

?>