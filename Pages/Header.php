<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap-->
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <!--MainStyle-->
    <link rel="stylesheet" href="../Style/headerStyle.css">
    <link rel="stylesheet" href="../Style/MainStyle.css">

    <!--changing title-->
    <title><?= !empty($title) ? $title : "" ?>Adela's art</title>
</head>
<header class="fixed-top">
    <img class="profileImg" src="../resources/images/Header/headerIcon.png">
    <p>Adela's art</p>
    <nav class="navbar">
        <div class="nav">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Store.php">Shop</a></li>
                <li><a href="Portfolio.php">Portfolio</a></li>
                <li><a href="">More...</a></li>
            </ul>
            <!--Shopping basket-->

        </div>
        <div class = "fixed-right">
            <button type="button" class = "btn position-relative">
                <i class="fa fa-shopping-basket"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
            </button>
        </div>
    </nav>
</header>