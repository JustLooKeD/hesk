<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "header.php"; ?>
</head>
<body>
<!-- Таблица заявок -->
<table class="table table-hover">
    <thead>
    <tr id="blablabla">
        <th scope="col">Пользователь</th>
        <th scope="col">Описание</th>
        <th scope="col">Тип заявки</th>
        <th scope="col">Статус</th>
        <th scope="col">Дата</th>
        <th scope="col">Время</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($connect->query('SELECT * FROM ticket ORDER BY DATE DESC, TIME DESC ') as $item) {
        echo '<tr>'.'<td id="tblUser">'.$item['USER'].'</td> <td id="tblDescription">'.$item['DESCRIPTION'].'</td> <td id="tblType">'.$item['TYPE'].'</td> <td class="tblStatus">'.$item['STATUS'].'</td> <td id="tblDate">'.$item['DATE'].'</td> <td id="tblTime">'.$item['TIME'].'</td></tr>';
    }
    ?>
    </tbody>
</table>
<!-- Конец Таблица заявок -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>