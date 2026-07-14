# Connecting Files 🚀

### Example of including files in PHP (require, include, require_once)

## 📁 Structure

```bash
connecting_files/
├── blocks/
│ ├── header.php # Header (menu, styles)
│ └── footer.php # Footer (copyright)
├── index.php # Main page
└── about.php # About page
```

## 📄 Contents

### `blocks/header.php`
- HTML header with menu
- Bootstrap connection
- Page title from `$title` variable

### `blocks/footer.php`
- Footer with copyright
- Closing tags

### `index.php`
- Main page
- Includes header and footer

### `about.php`
- About page
- Includes header and footer

## 🛠️ Run

### Method 1: Via PHP server

```bash
# Go to project root
cd ~/Dev/Dev_php/connecting_files

# Start server
php -S localhost:8000
```
### Open in browser:

```bash
http://localhost:8000/connecting_files/index.php

http://localhost:8000/connecting_files/about.php
```
#
### Method 2: If port 8000 is busy
```bash
# Find process on port 8000
sudo lsof -i :8000

# Kill process (replace PID with yours)
sudo kill -9 67940

# Start server
php -S localhost:8000
```
#

#

# Connecting Files 🚀

### Пример подключения файлов в PHP (require, include, require_once)

## 📁 Структура
```bash
connecting_files/
├── blocks/
│   ├── header.php      # Шапка (меню, стили)
│   └── footer.php      # Подвал (копирайт)
├── index.php           # Главная страница
└── about.php           # Страница "Про нас"
```
## 📄 Что внутри

### blocks/header.php

- HTML-шапка с меню
- Подключение Bootstrap
- Заголовок страницы из переменной $title
### blocks/footer.php

- Подвал с копирайтом
- Закрывающие теги
### index.php

- Главная страница
- Подключает шапку и подвал
### about.php

- Страница "Про нас"
- Подключает шапку и подвал
## 🛠️ Запуск

### Способ 1: Через PHP-сервер
```bash
# Перейти в корневую папку проекта
cd ~/Dev/Dev_php/connecting_files

# Запустить сервер
php -S localhost:8000
```
### Открой в браузере:
```bash
http://localhost:8000/connecting_files/index.php

http://localhost:8000/connecting_files/about.php
```
### Способ 2: Если порт 8000 занят
```bash
# Найти процесс на порту 8000
sudo lsof -i :8000

# Убить процесс (замени PID на свой)
sudo kill -9 67940

# Запустить сервер
php -S localhost:8000
```