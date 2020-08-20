<?php
session_start();
foreach ($_SESSION['list'] as $key => $value) {
    if ($_GET['id'] == $value['id']) {
        $value['sl'] += 1;
        $_SESSION['cart'][] = $value;
    }
}
header('Location:listgh.php');
?>
