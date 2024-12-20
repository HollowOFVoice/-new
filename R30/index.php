<?php
session_start(); // Начинаем сессию

// 1. По заходу на страницу запишите в сессию текст 'test'
if (!isset($_SESSION['test'])) {
    $_SESSION['test'] = 'test';
}

// 3. Счетчик обновления страницы
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
} else {
    $_SESSION['counter']++;
}

// 5. Записываем время захода пользователя на сайт
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

// 4. Запись страны в сессию
if (isset($_POST['country'])) {
    $_SESSION['country'] = htmlspecialchars($_POST['country']);
}

// 6. Сохранение email
if (isset($_POST['email'])) {
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сессии в PHP - index.php</title>
</head>
<body>

<h1>Отслеживание сеансов (session)</h1>

<!-- 1. Вывод содержимого сессии -->
<p>Содержимое сессии 'test': <?php echo $_SESSION['test']; ?></p>

<!-- 3. Счетчик обновления страницы -->
<p>Количество обновлений страницы: <?php echo $_SESSION['counter'] > 0 ? $_SESSION['counter'] : 'Вы еще не обновляли страницу.'; ?></p>

<!-- 5. Вывод времени захода на сайт -->
<p>Вы зашли на сайт <?php echo time() - $_SESSION['start_time']; ?> секунд назад.</p>

<!-- Форма для ввода страны -->
<h2>Введите вашу страну</h2>
<form method="POST" action="">
    <input type="text" name="country" placeholder="Страна" required>
    <button type="submit">Отправить</button>
</form>

<!-- Форма для ввода email -->
<h2>Введите ваш email</h2>
<form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Отправить</button>
</form>

<!-- Ссылка на test.php -->
<h2>Перейти на страницу test.php</h2>
<a href="test.php">Перейти</a>

</body>
</html>
