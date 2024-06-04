<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
          crossorigin="anonymous">
    <link rel="stylesheet" href="/css/motorcycles.css">
</head>
<body>
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
        <li>
            <a href="/FileManager/index">Файловый менеджер</a>
        </li>
        <li class="active">
            <a href="#">Мототехника</a>
        </li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        <h2>Motorcycles</h2>

        <div class="row">
            <div class="filter">
                <form method="post">
                    <h4>Фильтр</h4>
                    <div class="checkbox">
                        <label>
                            <input name="is_discontinued" type="checkbox" <?php if ($isDiscontinued) { echo 'checked'; } ?>> Показывать снятые с производства
                        </label>
                    </div>
                    <button class="btn btn-xs btn-primary btn-block" type="submit">Применить</button>
                </form>
            </div>
        </div>
        <?php if (!empty($motorcycles)) {?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Наименование</td>
                        <td>Тип</td>
                        <td>Выпускается</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($motorcycles as $motorcycle) { ?>
                        <tr>
                            <td><?php echo $motorcycle['id'];?></td>
                            <td><?php echo $motorcycle['name'];?></td>
                            <td><?php echo $motorcycle['brand'];?></td>
                            <td><?php echo ($motorcycle['is_discontinued']) ? 'Да' : 'Нет';?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        <?php } else {?>
            <p class="bg-info">В базе отсутствует информация по мотоциклам</p>
        <?php } ?>
    </div>
</div>
</body>
</html>
