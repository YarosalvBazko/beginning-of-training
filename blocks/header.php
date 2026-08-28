<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'PHP Справочник'; ?></title>
    
    <!-- Подключаем Bootstrap для красивых стилей -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <style>
        /* --- Стили для карточек с демонстрациями --- */
        .demo-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            transition: box-shadow 0.3s ease;
        }
        .demo-card:hover {
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        /* --- Стили для кода (левая колонка) --- */
        .code-section {
            background: #1e1e1e; /* Темный фон как в редакторе кода */
            color: #d4d4d4;
            padding: 15px;
            border-radius: 6px;
            margin: 10px 0;
            overflow-x: auto; /* Если код широкий — появляется прокрутка */
        }
        .code-section pre {
            margin: 0;
            color: #d4d4d4;
            font-size: 14px;
            font-family: 'Courier New', monospace;
        }
        
        /* --- Стили для результата (правая колонка) --- */
        .result-section {
            background: #ffffff;
            padding: 15px;
            border-radius: 6px;
            margin: 10px 0;
            border-left: 4px solid #28a745; /* Зеленая полоса слева */
            min-height: 60px;
        }
        .result-content {
            font-family: 'Courier New', monospace;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 4px;
            min-height: 40px;
        }
        
        /* --- Заголовки и описание --- */
        .demo-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .demo-description {
            margin-bottom: 15px;
        }
        
        .badge {
            font-size: 12px;
            padding: 4px 10px;
            margin-bottom: 8px;
            display: inline-block;
        }
        
        /* --- Меню навигации --- */
        .nav-menu {
            background: #f8f9fa;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border: 1px solid #dee2e6;
            display: flex;
            flex-wrap: wrap;
            gap: 8px 15px;
        }
        .nav-menu a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            padding: 4px 8px;
            border-radius: 4px;
            transition: background 0.2s;
        }
        .nav-menu a:hover {
            background: #e9ecef;
            text-decoration: none;
        }
        
        /* --- Общие стили --- */
        .section-title {
            color: #2c3e50;
            margin: 30px 0 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #007bff;
        }
        
        .back-link {
            display: inline-block;
            margin: 20px 0;
            padding: 8px 16px;
            background: #f8f9fa;
            border-radius: 6px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            background: #e9ecef;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Меню навигации -->
        <nav class="nav-menu">
            <a href="/index.php">🏠 Главная</a>
            <a href="/pages/arrays.php">📊 Массивы</a>
            <a href="/pages/cycles.php">🔄 Циклы</a>
            <a href="/pages/functions.php">⚡ Функции</a>
            <a href="/pages/strings.php">📝 Строки</a>
            <a href="/pages/math.php">🔢 Математика</a>
            <a href="/pages/switch.php">🔀 Switch</a>
            <a href="/pages/cookies.php">🍪 Cookies</a>
            <a href="/pages/datetime.php">⏰ Дата и время</a>
            <a href="/pages/types.php">📦 Типы данных</a>
            <a href="/pages/files.php">📁 Файлы</a>
            <a href="/pages/forms.php">📝 Формы</a>
            <!-- Сюда будем добавлять новые темы -->
        </nav>
</header>

    <!-- ============================================================
    ПОДРОБНЫЙ СПРАВОЧНИК ПО ТОМУ, ЧТО БЫЛО В КОДЕ
    ============================================================ -->
    
    <!-- ──────────────────────────────────────────────────────────────
    1. ПОДКЛЮЧЕНИЕ ФАЙЛОВ
    ────────────────────────────────────────────────────────────── -->
    <!-- require     →  подключает файл (если нет файла → ошибка) -->
    <!-- require_once → подключает файл 1 раз (если уже подключен → игнорирует) -->
    <!-- include     →  подключает файл (если нет файла → warning) -->
    <!-- include_once → подключает файл 1 раз -->
    <!-- 
    require 'blocks/header.php';   // подключить шапку
    require_once 'blocks/header.php'; // подключить шапку один раз
    -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    2. ПЕРЕМЕННЫЕ МЕЖДУ ФАЙЛАМИ
    ────────────────────────────────────────────────────────────── -->
    <!-- $title = "Главная страница";  →  переменная объявлена в index.php -->
    <!-- <?php echo $title; ?>       →  выводится в header.php -->
    <!-- Переменные из родительского файла доступны в подключенных -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ──────────────────────────────────────────────────────────────
    3. СТРУКТУРА САЙТА
    ────────────────────────────────────────────────────────────── -->
    <!-- header.php   →  шапка (меню, стили) -->
    <!-- index.php    →  главная страница -->
    <!-- about.php    →  страница "Про нас" -->
    <!-- footer.php   →  подвал (копирайт) -->
    <!-- ────────────────────────────────────────────────────────────── -->


    <!-- ============================================================
    КРАТКОЕ РЕЗЮМЕ
    ============================================================ -->
    <!-- 
    require 'blocks/header.php';   →  подключить шапку
    require 'blocks/footer.php';   →  подключить подвал
    require_once →  подключить один раз
    $title       →  переменная для заголовка страницы
    
    Структура:
    header.php → шапка с меню
    index.php  → главная
    about.php  → страница "Про нас"
    footer.php → подвал
    ============================================================ -->
</body>
</html>