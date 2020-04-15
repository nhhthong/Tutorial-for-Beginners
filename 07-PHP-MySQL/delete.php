<?php
    require_once ('config.php');
    $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_STRING);

    if (empty(($id))){
        redirect('index.php');
        exit();
    }

    $status = deleteProduct($id);
    if ($status){
        setOneTimeMessage('Delete product success');
        redirect('index.php');
    }else{
        setOneTimeMessage('Delete product failed');
        redirect('index.php');
    }
?>

