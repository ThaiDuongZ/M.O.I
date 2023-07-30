<?php
    if(isset($_GET['admin']) && isset($_GET['query'])){
        $_admin = $_GET['admin'];
        $_query = $_GET['query'];
    }else{
        $_admin = '';
        $_query = '';
    }
    if($_admin=='category' && $_query =='add'){
        include('modules/category/add.php');
        include('modules/category/select.php');
    }elseif($_admin=='category' && $_query =='update'){
        include('modules/category/update.php');
    }elseif($_admin=='product' && $_query =='add'){
        include('modules/product/add.php');
        include('modules/product/select.php');
    }elseif($_admin=='product' && $_query =='update'){
        include('modules/product/update.php');
    // }elseif($_admin=='home' && $_query =='add'){
    //     include('modules/home/update.php');
    //     include('modules/home/select.php');
    }else{
        include('modules/dashboard.php');
    }
?>