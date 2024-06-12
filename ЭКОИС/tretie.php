<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭКОИС</title>
	<link rel="stylesheet" href="tretie.css">
</head>
<body>
    <header>
        <div id="main">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <h1>ЭКОИС</h1>
        <button class="exit" onclick="exit()">←</button>
    </header>

    <div id="table">
    <?php
    require_once('db.php');

    $sql = "SELECT ПДВ, ВРВ, ТНВ, ЭКВ FROM emissions";
    $result = $conn->query($sql);

    if ($result === false) {
        die('Ошибка SQL: ' . $conn->error);
    }

    echo "<table id='myTable'>";
    echo "<tr><th>ПДВ</th><th>ВРВ</th><th>ТНВ</th><th>ЭКВ</th></tr>";

    if ($result->num_rows > 0) {
        // вывод данных для каждой строки
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["ПДВ"]."</td><td>".$row["ВРВ"]."</td><td>".$row["ТНВ"]."</td><td>".$row["ЭКВ"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
    }

    echo "</table>";

    $conn->close();
    ?>
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

	<script src="tretie.js"></script>
</body>
</html>