<?php
include('../config/app.php');
include_once('../controller/item-controller.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nama_item" id="nama_item" placeholder="Item Name">
        <input type="number" name="harga" id="harga" placeholder="Item Price">
        <textarea name="keterangan" id="keterangan"></textarea>
        <select name="group" id="group">
            <?php
            $items = new itemController;
            $result = $items->fetch_group_menu();

            if ($result) {
                foreach ($result as $row) {
                    ?>
                    <option value="<?php echo $row['group_id'] ?>"><?= $row['nama_group'] ?></option>
                    <?php
                }
            } else {
                echo ("No Record Found");
            }

            ?>
        </select>
        <select name="addon" id="addon">
            <?php

            $items = new itemController;
            $addon = $items->fetch_addons();
            if ($addon) {
                foreach ($addon as $row) {
                    ?>
                    <option value="<?php echo $row['option_id'] ?>"><?= $row['nama_option'] ?></option>
                    <?php
                }
            } else {
                echo ("No Record Found");
            }

            ?>
        </select>
        <button type="submit" name="save_items">Add Item</button>
    </form>
</body>

</html>
<script>


</script>