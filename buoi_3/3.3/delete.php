<?php
session_start();
foreach ($_SESSION['cart'] as $key => $value) {
    if ($_GET['id'] == $value['id']) {
        unset($_SESSION['cart'][$key]);
        // echo "yes";
    }
}
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";
header('Location:listgh.php');
?>