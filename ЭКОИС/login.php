<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭКОИС</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>
    <div class="container">
        <h1>Авторизация</h1>
        <form action="loga.php" method="post">
            <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Войти</button>
            <a href="registration.php">Регистрация</a>
        </form>
    </div>
</body>
</html>