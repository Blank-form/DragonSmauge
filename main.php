<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/1-167.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>DragonPHP</title>
</head>

<body>
    <div class="MainContainer">

        <header class="header">
            <?php include 'head_inc.php' ?>
        </header>

        <main>
            <h1><?php echo $h ?> <span>Смауг Золотой</span></h1>
            <div class="aboutDragon">
                <div class="Img"> <?php echo $a ?> </div>
                <div class="Description">
                    <p>
                        <?php echo 'Его зовут ', $name . '<br>';
                        echo 'Место обитания - ', ' ', $city; ?>
                    </p>

                    <p>
                        <?php echo ' Его возраст неизвестен, примерно ~', $age, ' лет ';   ?>
                    </p>
                </div>
            </div>
            <div class="knowledge">

                <?php include 'knowledge_inc.php'; ?>
                <?php echo $a, ' ', $b, ' золотых.'; ?> <br>
                <?php echo 'Любая частичка дракона стоит по разному:'; ?> <br>
                <?php
                echo 'Чешуя - ', $a = 100, ' золотых'; ?> <br>
                <?php echo 'Зуб - ', $b = 200, ' золотых'; ?> <br>
                <?php echo 'Зуб и чешуя - ', $c = $a + $b + 50; ?>
                <br>
                <?php
                echo $d;
                ?>
            </div>
        </main>

        <footer>
            <?php include 'footer_inc.php' ?>
        </footer>

    </div>
</body>

</html>