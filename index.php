<?php
    include_once("function/helper.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Toko Online | Semua ada</title>
    </head>

    <body>
        <div id="container">
            <div id="header">
                <a href="<?php echo BASE_URL."index.php"; ?>">
                    <img src="<?php echo BASE_URL."img/logo.png"; ?>" />
                </a>
            </div>

            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."login.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL."login.php?page=register"; ?>">register</a>
                </div>

                <a href="<?php echo BASE_URL."login.php?page=keranjang" ;?>" id="button-keranjang">
                    <img src="<?php echo BASE_URL."img/cart.png"; ?>" />
                </a>
            </div>
        </div>

        <div id="content"></div>

        <div id="footer">
            <p>copyright fearhunt</p>
        </div>
    </body>
</html>