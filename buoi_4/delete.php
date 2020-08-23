<?php
session_start();
foreach ($_SESSION['document'] as $key => $value) {
    if ($_GET['id'] == $value['name']) {
        unset($_SESSION['document'][$key]);
        header('Location:listfile.php');
    }
}
echo '<pre>';
print_r($_SESSION['document']);
echo '</pre>';
