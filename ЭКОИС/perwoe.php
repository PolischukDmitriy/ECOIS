<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭКОИС</title>
	<link rel="stylesheet" href="perwoe.css">
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

    $sql = "SELECT ПДВ, ВРВ, ТНВ, ЭКВ FROM norms";
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
     
    <div id="sokr">
    <p>
    <strong>Предельно допустимые выбросы (ПДВ)</strong> - это максимальные уровни выбросов, которые могут быть выпущены в окружающую среду без каких-либо последствий для здоровья человека.<br>
    <strong>Временно разрешённые выбросы (ВРВ)</strong> - это уровни выбросов, которые могут быть выпущены в окружающую среду в течение ограниченного периода времени.<br>
    <strong>Технологические нормативы выбросов (ТНВ)</strong> - это стандарты, которые определяют максимальные уровни выбросов, которые могут быть выпущены в окружающую среду в результате производства или использования определенного оборудования или технологии.<br>
    <strong>Экологические нормативы качества атмосферного воздуха (ЭКВ)</strong> - это стандарты, которые определяют минимальные уровни качества атмосферного воздуха, которые должны быть обеспечены в определенной зоне.
    </p>
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

	<script src="perwoe.js"></script>
</body>
</html>