<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭКОИС</title>
	<link rel="stylesheet" href="wtoroe.css">
</head>
<body>
    <header>
        <div id="main">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <h1>ЭКОИС</h1>
        <button class="exit" onclick="exit()">←</button>
    </header>

    <div id="input">
        <h1>Ввод личных данных</h1>
        <form action="emissions.php" method="post"> 	
        <div class="form-group">
            <label for="ПДВ">ПДВ:</label>
            <input type="text" id="ПДВ" name="ПДВ" required>
        </div>
        <div class="form-group">
            <label for="ВРВ">ВРВ:</label>
            <input type="text" id="ВРВ" name="ВРВ" required>
        </div>
        <div class="form-group">
            <label for="ТНВ">ТНВ:</label>
            <input type="text" id="ТНВ" name="ТНВ" required>
        </div>
        <div class="form-group">
            <label for="ЭКВ">ЭКВ:</label>
            <input type="text" id="ЭКВ" name="ЭКВ" required>
        </div>
            <button type="submit">Внести</button>
        </form>
    </div>
    
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="Main.php">Главная</a>
        <a href="perwoe.php">Актуальные данные</a>
        <a href="wtoroe.php">Ввод личных данных</a>
        <a href="tretie.php">Просмотр личных данных</a>
    </div>

    <footer>
        <p>&copy; 2024 ЭКОИС. Все права сохранены.</p>
    </footer>

	<script src="wtoroe.js"></script>
</body>
</html>