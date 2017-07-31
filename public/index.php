<?php
require "../config.php";
?>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>Header</header>
    <main>Content</main>
    <footer>footer</footer>
    <form action="">
    <input type="text" value="asd@asd.ru" name="email">
    <input type="text" value="11" name="age">
    <button class="submit">Отправить</button>
    </form>

    <h1>Ваш возраст: <div class="age"></div></h1>
    <h2>Ваш email: <div class="email"></div></h2>
    <div class="result">
        Ничего
    </div>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

