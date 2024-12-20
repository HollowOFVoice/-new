<?php
session_start(); // Начинаем сессию

// Проверяем, если страна не установлена, перенаправляем на index.php
if (!isset($_SESSION['country'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сессии в PHP - test.php</title>
</head>
<body>

<h1>Страница test.php</h1>

<!-- Вывод страны пользователя -->
<h2>Ваша страна: <?php echo $_SESSION['country']; ?></h2>

<!-- Форма для ввода имени, фамилии и пароля -->
<h2>Введите ваши данные</h2>
<form method="POST" action="">
    <input type="text" name="first_name" placeholder="Имя" required>
    <input type="text" name="last_name" placeholder="Фамилия" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <input type="email" name="email_field" placeholder="Email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
    <button type="submit">Отправить</button>
</form>

<!-- Ссылка на index.php -->
<h2>Вернуться на страницу index.php</h2>
<a href="index.php">Вернуться</a>

</body>
</html>
