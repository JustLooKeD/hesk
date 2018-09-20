<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'config.php'; ?>
</head>
<body>
<!-- Шапка -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/hesk/">Система учета заявок ФГБОУ ВО "КамчатГТУ"</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/hesk/ListTicket.php">Список текущих заявок<span class="sr-only">(current)</span></a></>
            <a class="nav-item nav-link"  href="/hesk/NewTicket.php">Создать заявку</a></>
            <a class="nav-item nav-link disabled" href="#">Coming soon</a></>
        </div>
    </div>
</nav>
</body>
<!-- Конец шапка -->