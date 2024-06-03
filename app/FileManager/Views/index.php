<h1>File Manager</h1>

<?php if (empty($folders) && empty($images)) { ?>
    <h4>Директория пуста</h4>
<?php } ?>

<a href="<?php echo "/FileManager/index?dir={$prevDirectory}";?>">
    Назад
</a>

<?php if (!empty($folders)) { ?>
    <h2>Folders</h2>
    <ul>
        <?php foreach ($folders as $folder) { ?>
            <li>
                <a href="<?php echo "/FileManager/index?dir={$prevDirectory}/{$currentDirectory}/{$folder}";?>">
                    <?php echo $folder;?>
                </a>
            </li>
        <?php } ?>
    </ul>
<?php } ?>

<?php if (!empty($images)) { ?>
    <h2>Images</h2>
    <ul>
        <?php foreach ($images as $image) { ?>
            <li>
                <img src="<?php echo $image;?>" alt="<?php echo $image;?>">
            </li>
        <?php } ?>
    </ul>
<?php } ?>
