<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Кількість засобів вимірювання</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Кількість засобів вимірювання</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT units, COUNT(units) as "name" FROM groups AS g LEFT JOIN Units AS s ON g.id = id GROUP BY name';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Кількість засобів вимірювання: </h3><br>");   
        printf("<table><tr><th>Назва засобу</th><th>Айді засобу</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['name'], $row['id']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>


    <br><br><br>

    <ul>
        <li><a href="showSklad.php">Таблиця Students</a><br></li>
        <li><a href="showUnits.php">Таблиця Units</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
