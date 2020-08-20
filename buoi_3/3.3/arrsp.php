<?php
    session_start();
    $sp1 = array(
      'id' => 'SP1',
      'name' => 'Iphone 4',
      'price' => '4000000',
      'sl' => '0'
    );
    $sp2 = array(
        'id' => 'SP2',
        'name' => 'Iphone 5',
        'price' => '5000000',
        'sl' => '0'
    );
    $sp3 = array(
        'id' => 'SP3',
        'name' => 'Iphone 6',
        'price' => '6000000',
        'sl' => '0'
    );
    $sp4 = array(
        'id' => 'SP4',
        'name' => 'Iphone 7',
        'price' => '7000000',
        'sl' => '0'
    );
    if (empty($_SESSION['list'])) {
        $_SESSION['list'][] = $sp1;
        $_SESSION['list'][] = $sp2;
        $_SESSION['list'][] = $sp3;
        $_SESSION['list'][] = $sp4;
    }
    echo '<pre>';
    print_r($_SESSION['list']);
    echo '</pre>';
?>
