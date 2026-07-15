<?php
    // === ПЕРЕМЕННАЯ ЗАГОЛОВКА ===
    $title = "Про нас";
    
    // === ПОДКЛЮЧЕНИЕ ШАПКИ ===
    require "blocks/header.php";
?>
<div class="container mt-2">
    <!-- === ОСНОВНОЙ КОНТЕНТ === -->
    <h1>Про нас</h1>

    <!-- === ФОРМА ОТПРАВКИ ДАННЫХ === -->
    <!-- method="get" → данные в URL (check_get.php) -->
    <!-- method="post" → данные в теле запроса (check_post.php) -->
    <!-- <form action="check_get.php" method="get">-->
    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>

<?php
    // === ПОДКЛЮЧЕНИЕ ПОДВАЛА ===
    require "blocks/footer.php";
?>