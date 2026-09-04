# 📚 PHP Справочник с примерами 🚀

### Интерактивный справочник по PHP. Код и результат его выполнения на одной странице.

---

## 📁 Структура проекта

```bash
Beginning of training/
├── blocks/                     # Шапка и подвал сайта
│   ├── header.php              # Меню, стили, заголовок
│   └── footer.php              # Копирайт
├── css/                        # Стили
│   └── style.css               # Все CSS-стили
├── includes/                   # Вспомогательный код
│   └── DemoHelper.php          # Класс для демонстрации кода
├── pages/                      # Страницы-демонстрации (11 тем)
│   ├── arrays.php              # Массивы
│   ├── cycles.php              # Циклы
│   ├── functions.php           # Функции
│   ├── strings.php             # Строки
│   ├── math.php                # Математика
│   ├── switch.php              # Switch-case
│   ├── cookies.php             # Cookie
│   ├── datetime.php            # Дата и время
│   ├── types.php               # Типы данных
│   ├── files.php               # Файлы
│   └── forms.php               # Формы (GET, POST, сессии)
├── templates/                  # HTML-шаблоны
│   └── forms/
│       └── form.php            # Практическая форма
├── index.php                   # Главная страница-каталог
└── README.md                   # Документация
```

## 📚 Список тем
| № | Тема | Файл | Описание |
|---|------|------|----------|
| 1 | 📊 Массивы | `pages/arrays.php` | Создание, изменение, удаление, сортировка |
| 2 | 🔄 Циклы | `pages/cycles.php` | for, while, do-while, break, continue |
| 3 | ⚡ Функции | `pages/functions.php` | Объявление, параметры, return, global, static |
| 4 | 📝 Строки | `pages/strings.php` | strlen, trim, strtoupper, explode, implode, md5 |
| 5 | 🔢 Математика | `pages/math.php` | +, -, *, /, %, abs, ceil, floor, round, mt_rand |
| 6 | 🔀 Switch-case | `pages/switch.php` | switch, case, break, default |
| 7 | 🍪 Cookie | `pages/cookies.php` | setcookie, $_COOKIE, удаление cookie |
| 8 | ⏰ Дата и время | `pages/datetime.php` | date, time, strtotime, форматирование |
| 9 | 📦 Типы данных | `pages/types.php` | gettype, is_numeric, is_integer, is_string |
| 10 | 📁 Файлы | `pages/files.php` | fopen, fwrite, fread, file_get_contents, file_exists |
| 11 | 📝 Формы | `pages/forms.php` | GET, POST, валидация, сессии, безопасность |
|

# 🛠️ Как запустить
# Перейдите в папку проекта
cd ~/Dev/Dev_php/Beginning\ of\ training

# Запустите сервер
php -S localhost:8000

## Откройте в браузере:
http://localhost:8000/

## 📄 Что внутри

blocks/header.php

- HTML-шапка с меню навигации
- Подключение Bootstrap
- CSS-стили для карточек с демонстрациями
- Заголовок страницы из переменной $title
## blocks/footer.php

- Подвал с копирайтом
- Автоматическое обновление года: <?php echo date('Y'); ?>
## includes/DemoHelper.php

- Класс для демонстрации кода и его выполнения
- Использует ob_start() и eval() для выполнения кода
- Показывает код и результат в красивой карточке
## pages/*.php

- 11 страниц-демонстраций по разным темам
- Каждая страница содержит примеры кода и их результат
## index.php

- Главная страница-каталог
- Карточки со всеми темами для навигации
## 💡 Как это работает

## DemoHelper::show()

### Главный инструмент проекта. Он:

- Принимает PHP-код как строку
- Выполняет его через eval()
- Показывает код и результат в красивой карточке
- Ключевые функции PHP

## Ключевые функции PHP

| Функция |	Описание |	Документация |
|---------|----------|---------------|
ob_start()	| Включает буферизацию вывода |	[php.net/ob_start](https://www.php.net/ob_start)
ob_get_clean() |	Получает и очищает буфер |	[php.net/ob_get_clean](https://www.php.net/manual/ru/function.ob-get-clean.php)
eval() |	Выполняет код из строки |	[php.net/eval](https://www.php.net/manual/ru/function.eval.php)
htmlspecialchars() |	Преобразует спецсимволы в HTML |	[php.net/htmlspecialchars](https://www.php.net/manual/ru/function.htmlspecialchars.php)
---
## 🔗 Полезные ссылки


- [Официальная документация PHP](https://www.php.net/manual/ru/)
- [Bootstrap](https://getbootstrap.com) — фреймворк для стилей
- [Функции](https://www.php.net/manual/ru/functions.user-defined.php)
- [Массивы](https://www.php.net/manual/ru/language.types.array.php)
- [Циклы](https://www.php.net/manual/ru/control-structures.for.php)
