<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭКОИС</title>
	<link rel="stylesheet" href="Main.css">
</head>
<body>
    <header>
        <div id="main">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <h1>ЭКОИС</h1>
        <button class="exit" onclick="exit()">←</button>
    </header>

    <div id="explanation"><p>ЭКОИС — это сервис для мониторинга актуальных экологических норм, разработанный специально для коммерческих организаций. Он помогает легко и быстро сравнить имеющиеся данные о загрязнении с установленными стандартами для конкретной отрасли.</p>
        <p>Основные функции и преимущества сервиса ЭКОИС:</p>
        <p>1 Единая информационная система для экологического учёта и отчётности.</p>
        <p>2 Возможность удобного ввода данных в систему.</p>
        <p>3 Контроль динамики отклонений реальных показателей от утверждённых планов.</p>
        <p>4 Отказоустойчивость системы благодаря хранению данных в собственной базе данных.</p>
        <p>5 Оперативная корректировка данных перед формированием отчётности.</p>
        <p>Сервис ЭКОИС помогает организациям экономить время и ресурсы, снизить риск штрафов и повысить уровень экологической безопасности.</p>
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

	<script src="Main.js"></script>
</body>
</html>

