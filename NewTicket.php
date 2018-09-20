<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "header.php"; ?>
    <?php
    $username = get_current_user();
    ?>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            1 из 3
        </div>
        <!-- Форма заявки начало -->
        <div class="col-6">
            <form action="config.php" method="post">
                <div class="form-group">
                    <label for="title">Опишите проблему</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-align-justify"></i>
                        </div>
                        <input id="title" name="title" placeholder="Буквально в двух словах" type="text" class="form-control here" aria-describedby="titleHelpBlock" required="required">
                    </div>
                    <span id="titleHelpBlock" class="form-text text-muted">К примеру: Не работает интернет/Не печатает принтер/Убежала мышка/Компьютер улетел.</span>
                </div>
                <div class="form-group">
                    <label for="description">Опишите проблему подробнее.</label>
                    <textarea id="description" name="description" cols="40" rows="3" class="form-control" aria-describedby="descriptionHelpBlock" required="required"></textarea>
                    <span id="descriptionHelpBlock" class="form-text text-muted">По возможности опишите когда или после чего проблема появилась, если это имеет место быть</span>
                </div>
                <div class="form-group">
                    <label for="type">Тип проблемы</label>
                    <div>
                        <select id="type" name="type" class="custom-select" aria-describedby="typeHelpBlock" required="required">
                            <option value="Неполадки с ПК">Неполадки с ПК</option>
                            <option value="breakmfu">Неполадки с МФУ</option>
                            <option value="Неполадки с доступом в интернет">Неполадки с доступом в интернет</option>
                            <option value="Неполадки с телефоном">Неполадки с телефоном</option>
                            <option value="Замена картриджа">Замена картриджа</option>
                            <option value="Установка ПО">Установка ПО</option>
                        </select>
                        <span id="typeHelpBlock" class="form-text text-muted">Выберете, к какой категорий ближе относится ваша проблема</span>
                    </div>
                </div>
                <div class="form-group">
                    <button name="CreateTicket" type="submit" class="btn btn-primary">Создать заявку</button>
                </div>
            </form>
        </div>
        <!-- Форма заявки конец -->
        <div class="col">
            3 из 3
        </div>
    </div>
</div>

</body>
</html>