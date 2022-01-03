<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Sklad</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM sklads ORDER BY name';
    if($result = $mysqli->query($sql)) {

        printf("Список продуктів: <br><br>");   
        printf("<table><tr><th>Айді</th><th>Назва</th><th>Кількість</th></tr>");
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['cnt']);
        };
        printf("</table>");
        $result->close();
    };
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoStudentsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateStudentsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromStudentsForm.php">Видалити рядок</a><br></li>
        <li><a href="showStudentsGroupsKurators.php">Звіт Продукти - Юніти</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
