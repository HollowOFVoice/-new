<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции на PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .task {
            background: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .result {
            font-weight: bold;
            color: #5cb85c;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="task">
    <h1>Задача 1: Проверка равенства</h1>
    <form method="POST">
        <input type="number" name="number1_a" placeholder="Введите первое число" required>
        <input type="number" name="number1_b" placeholder="Введите второе число" required>
        <button type="submit" name="submit1">Проверить</button>
    </form>
    <?php
    if (isset($_POST['submit1'])) {
        $a = $_POST['number1_a'];
        $b = $_POST['number1_b'];
        function ravenstvo($a, $b)
        {
            return $a == $b;
        }
        echo '<p class="result">Результат: ' . (ravenstvo($a, $b) ? 'True' : 'False') . '</p>';
    }
    ?>
</div>

<div class="task">
    <h1>Задача 2: Проверка суммы</h1>
    <form method="POST">
        <input type="number" name="number2_a" placeholder="Введите первое число" required>
        <input type="number" name="number2_b" placeholder="Введите второе число" required>
        <button type="submit" name="submit2">Проверить</button>
    </form>
    <?php
    if (isset($_POST['submit2'])) {
        $a = $_POST['number2_a'];
        $b = $_POST['number2_b'];
        function summa($a, $b)
        {
            return ($a + $b) > 10;
        }
        echo '<p class="result">Результат: ' . (summa($a, $b) ? 'True' : 'False') . '</p>';
    }
    ?>
</div>

<div class="task">
    <h1>Задача 3: Проверка на отрицательное число</h1>
    <form method="POST">
        <input type="number" name="number3_x" placeholder="Введите число" required>
        <button type="submit" name="submit3">Проверить</button>
    </form>
    <?php
    if (isset($_POST['submit3'])) {
        $x = $_POST['number3_x'];
        function otric($x)
        {
            return $x < 0;
        }
        echo '<p class="result">Результат: ' . (otric($x) ? 'True' : 'False') . '</p>';
    }
    ?>
</div>

</body>
</html>
