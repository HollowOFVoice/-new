<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивные Задачи на PHP</title>
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
        input[type="text"] {
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
    <h1>Задача 1: Проверка наличия числа 5</h1>
    <form method="POST">
        <input type="text" name="numbers1" placeholder="Введите числа через запятую" required>
        <button type="submit" name="submit1">Проверить</button>
    </form>
    <?php
    if (isset($_POST['submit1'])) {
        $num = explode(',', $_POST['numbers1']);
        function five($arr) {
            foreach ($arr as $item) {
                if (trim($item) == 5) {
                    return true;
                }
            }
            return false;
        }
        if (five($num)) {
            echo '<p class="result">True</p>';
        } else {
            echo '<p class="result">False</p>';
        }
    }
    ?>
</div>

<div class="task">
    <h1>Задача 2: Проверка на делимость</h1>
    <form method="POST">
        <input type="text" name="number2" placeholder="Введите число" required>
        <button type="submit" name="submit2">Проверить</button>
    </form>
    <?php
    if (isset($_POST['submit2'])) {
        $num = intval($_POST['number2']);
        function delitel($x) {
            for ($i = 2; $i < $x; $i++) {
                if ($x % $i == 0) {
                    return true;
                }
            }
            return false;
        }
        if (delitel($num)) {
            echo '<p class="result">True</p>';
        } else {
            echo '<p class="result">False</p>';
        }
    }
    ?>
</div>

<div class="task">
    <h1>Задача 3: Проверка на последовательные дубликаты</h1>
    <form method="POST">
        <input type="text" name="numbers3" placeholder="Введите числа через запятую" required>
        <button type="submit" name="submit3">Проверить</button>
    </form>
    <?php
    if (isset($_POST['submit3'])) {
        $numbers = explode(',', $_POST['numbers3']);
        function has_consecutive_duplicates($array) {
            for ($i = 0; $i < count($array) - 1; $i++) {
                if (trim($array[$i]) === trim($array[$i + 1])) {
                    return 'да';
                }
            }
            return 'нет';
        }
        echo '<p class="result">' . has_consecutive_duplicates($numbers) . '</p>';
    }
    ?>
</div>

</body>
</html>
