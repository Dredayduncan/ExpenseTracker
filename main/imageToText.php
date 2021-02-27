<?php

    if (isset($_POST['sub'])){
        $img = $_FILES['image']['tmp_name'];
        $output = shell_exec('python3 imageToText.py '. $img.' 2>&1');
        echo $output;
    }

?>