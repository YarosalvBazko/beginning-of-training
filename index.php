<?php
$title = "PHP Справочник";
require_once "blocks/header.php";
?>

<h1 class="section-title">📚 PHP Справочник с примерами</h1>

<p class="lead">Выберите тему, чтобы увидеть код и результат его выполнения:</p>

<div class="row mt-4">
    <!-- --- Карточка: Массивы --- -->
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">📊 Массивы</h5>
                <p class="card-text">Создание, изменение, удаление, сортировка, ассоциативные массивы.</p>
                <a href="pages/arrays.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>
    
    <!-- --- Карточка: Циклы --- -->
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">🔄 Циклы</h5>
                <p class="card-text">for, while, do-while, break, continue, перебор массивов.</p>
                <a href="pages/cycles.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>
    
    <!-- --- Карточка: Функции --- -->
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">⚡ Функции</h5>
                <p class="card-text">Объявление, параметры, return, global, static.</p>
                <a href="pages/functions.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">📝 Строки</h5>
                <p class="card-text">strlen, trim, strtoupper, explode, implode.</p>
                <a href="pages/strings.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">🔢 Математика</h5>
                <p class="card-text">Арифметические операции, функции округления, случайные числа.</p>
                <a href="pages/math.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">🔀Switch</h5>
                <p class="card-text">Конструкция switch-case, break, default.</p>
                <a href="pages/switch.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">🍪 Cookie</h5>
                <p class="card-text">Установка, чтение, удаление cookie.</p>
                <a href="pages/cookies.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">⏰ Дата и время</h5>
                <p class="card-text">date, time, strtotime, форматирование даты.</p>
                <a href="pages/datetime.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">📦 Типы данных</h5>
                <p class="card-text">gettype, is_numeric, is_integer, is_string</p>
                <a href="pages/types.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">📁 Файлы</h5>
                <p class="card-text">fopen, fwrite, fread, file_get_contents, file_exists.</p>
                <a href="pages/files.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">📝 Формы</h5>
                <p class="card-text">GET, POST, валидация, сессии, безопасность.</p>
                <a href="pages/forms.php" class="btn btn-primary">Перейти →</a>
            </div>
        </div>
    </div>

        
</div>

<?php require_once "blocks/footer.php"; ?>