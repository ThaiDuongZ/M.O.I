<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mỹ Phẩm M.O.I</title>
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./Css/base.css">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./modules/Qldm/qldm.css">
    <link rel="stylesheet" href="./modules/product/product.css">
    <link rel="stylesheet" href="./modules/home/home.css">
    <link rel="stylesheet" href="./js/style.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet"> -->
</head>
<body>
    <div class="gird">
        <?php
            include('modules/menu.php');
        ?>
        <div class="main">
            <?php
                include('modules/header.php')
            ?>
            <div class="content">
                <?php
                    include('modules/main.php')
                ?>
            </div>           
        </div>
    </div>
</body>
</html>