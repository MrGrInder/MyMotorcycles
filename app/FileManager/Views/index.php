<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
              integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
              crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Файловый менеджер</a>
                </li>
                <li>
                    <a href="/Motorcycles/index">Мототехника</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <h1>Файловый менеджер</h1>

                <?php if (empty($folders) && empty($images)) {?>
                    <h4>Директория пуста</h4>
                <?php }?>

                <?php
                    if ($prevDirectory === '' && $currentDirectory === '') {
                        $link = '';
                    } elseif ($prevDirectory === '' && $currentDirectory !== '') {
                        $link = '/FileManager/index';
                    } else {
                        $link = "/FileManager/index?dir={$prevDirectory}";
                    }
                ?>

                <?php if ($link !== '') {?>
                    <a href="<?php echo $link;?>">
                        Назад
                    </a>
                <?php }?>

                <?php if (!empty($folders)) {?>
                    <h2>Folders</h2>
                    <ul>
                        <?php foreach ($folders as $folder) {
                            $dir = '';

                            if ($prevDirectory !== '') {
                                $dir = "{$prevDirectory}/";
                            }

                            $dir .= ($currentDirectory !== '') ? "{$currentDirectory}/{$folder}" : $folder;
                        ?>
                            <li>
                                <a href="<?php echo "/{$dir}";?> target="_blank">
                                    <?php echo $folder;?>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                <?php }?>

                <?php if (!empty($images)) {?>
                    <h2>Folders</h2>
                    <ul>
                        <?php foreach ($images as $image) { ?>
                            <li>
                                <?php echo $image;?>
                            </li>
                        <?php }?>
                    </ul>
                <?php }?>
            </div>
        </div>
    </body>
</html>
