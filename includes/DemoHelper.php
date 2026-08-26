<?php
/**
 * Класс DemoHelper помогает показывать PHP-код и результат его выполнения
 * 
 * Использование:
 * DemoHelper::show('echo "Привет!";', 'Пример', 'Выводит приветствие');
 */
class DemoHelper {
    /**
     * Показывает блок с кодом и результатом его выполнения
     * 
     * @param string $code PHP-код для выполнения (как строка)
     * @param string $title Заголовок примера
     * @param string $description Краткое описание
     */
    public static function show($code, $title = '', $description = '') {
        // --- Шаг 1: Включаем буферизацию ---
        // Буферизация "ловит" весь вывод (echo, print) и сохраняет его
        // вместо отправки в браузер
        ob_start();
        
        try {
            // --- Шаг 2: Выполняем код ---
            // eval() выполняет строку как PHP-код
            // ВНИМАНИЕ: eval() опасна с пользовательским вводом!
            // Но здесь мы используем только свой код, поэтому безопасно
            eval($code);
            
            // --- Шаг 3: Получаем результат ---
            // ob_get_clean() забирает всё, что накопилось в буфере,
            // очищает буфер и возвращает как строку
            $result = ob_get_clean();
        } catch (Throwable $e) {
            // --- Шаг 4: Обрабатываем ошибки ---
            // Если в коде ошибка — показываем её вместо результата
            // Это не даст странице упасть
            $result = '⚠️ Ошибка: ' . $e->getMessage();
        }
        ?>
        
        <!-- --- Шаг 5: Выводим HTML-карточку --- -->
        <div class="demo-card">
            <?php if ($title): ?>
                <h5 class="demo-title"><?php echo htmlspecialchars($title); ?></h5>
            <?php endif; ?>
            
            <?php if ($description): ?>
                <p class="demo-description text-muted small">
                    <span class="badge badge-info">📖 Описание</span>
                    <?php echo htmlspecialchars($description); ?>
                </p>
            <?php endif; ?>
            
            <div class="row">
                <!-- Левая колонка: Код -->
                <div class="col-md-6">
                    <div class="code-section">
                        <div class="badge badge-secondary">📄 Код</div>
                        <pre><code><?php 
                            // htmlspecialchars() превращает < и > в &lt; и &gt;
                            // Это нужно, чтобы код отображался как текст, а не выполнялся
                            echo htmlspecialchars($code); 
                        ?></code></pre>
                    </div>
                </div>
                <!-- Правая колонка: Результат -->
                <div class="col-md-6">
                    <div class="result-section">
                        <div class="badge badge-success">▶ Результат</div>
                        <div class="result-content">
                            <?php 
                            if (trim($result) === '') {
                                // Если результат пустой — показываем сообщение
                                echo '<span class="text-muted">(нет вывода)</span>';
                            } else {
                                // Иначе выводим результат
                                echo $result;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
