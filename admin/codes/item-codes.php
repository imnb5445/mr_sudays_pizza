<?php
include('../../config/app.php');
include('../../controller/item-controller.php');

if (isset($_POST['save_items'])) {
    $data = [
        'nama_item' => validate_input($db->conn, $_POST['nama_item']),
        'harga' => validate_input($db->conn, $_POST['harga']),
        'keterangan' => validate_input($db->conn, $_POST['keterangan']),
        'group' => validate_input($db->conn, $_POST['group']),
        'addon' => validate_input($db->conn, $_POST['addon'])
    ];

    $items = new ItemController;
    try {
        $result = $items->add_items($data);

        redirect("item added succesfully", "../item-input.php");
    } catch (\Throwable $th) {
        //throw $th;
    }
}


?>