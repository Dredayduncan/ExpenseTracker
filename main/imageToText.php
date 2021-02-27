<?php

    $img = $_FILES['img']['tmp_name'];
    $output = shell_exec('python imageToText.py '. $img.' 2>&1');
    echo $output;

?>