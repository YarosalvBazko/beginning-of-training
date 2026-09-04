<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'PHP Справочник'; ?></title>
    
    <!-- Подключаем Bootstrap для красивых стилей -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Подключаем свои стили -->
    <link rel="stylesheet" href="/css/style.css">
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

        <!-- ============================================================
        ЗАГОЛОВОК СТРАНИЦЫ (через переменные)
        ============================================================ -->
        <?php if (isset($title) && isset($lead)): ?>
            <h1 class="section-title"><?php echo $title; ?></h1>
            <p class="lead"><?php echo $lead; ?></p>
            
            <!-- Навигация внизу: Назад + Документация -->
            <div class="page-nav">
                <a href="/index.php" class="back-link">← Назад к списку</a>
                
                <?php if (isset($doc_link)): ?>
                    <a href="<?php echo $doc_link; ?>" target="_blank" class="doc-link-nav">
                        Документация →
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
