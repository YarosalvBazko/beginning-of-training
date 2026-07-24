<?php
    error_reporting(0);
    session_start();
    // === ПЕРЕМЕННАЯ ЗАГОЛОВКА ===
    $title = "Контакты";

    // === ПОДКЛЮЧЕНИЕ ШАПКИ ===
    require_once "blocks/header.php";
    
?>
<!-- === ОСНОВНОЙ КОНТЕНТ === -->
<h2 class="mt-5"><?=$title?></h2>
<form action="check_contact.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Введите имя" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_username']?></div><br>
    <input type="text" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите email" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_email']?></div><br>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Тема сообщение" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
    <textarea name="message" placeholder="Ваше сообщения" class="form-control"><?=$_SESSION['message']?></textarea>
    <div class="text-danger"><?=$_SESSION['error_message']?></div><br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>

<?php
    // === ПОДКЛЮЧЕНИЕ ПОДВАЛА ===
    require "blocks/footer.php";
?>