<?php 
    require_once "../../funcion/cargarClass.php";

    $id = $_POST["id"] ?? false;

    $cantidad = $_POST["cantidad"] ?? 1;

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if ($id) {
        (new Carrito())->agregarProd($id,$cantidad);

        header("Location: ../../index.php?sec=carrito");
    }

?>