<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Color Opacity Lister</title>
</head>
<body>
    <div class="container">
        <?php
            if (isset($_GET["color"])) {
                $colordata = $_GET["color"];
            } else{
                $colordata = "#3549e3";
            }
        ?>
        <div class="left">
            <h1 style="color:<?php echo $colordata; ?>;">Color Opacity Lister</h1>
            <p style="color:<?php echo $colordata; ?>;">Choose any color what you want from below pallet. So You'll see some color recommend on right part. This Tool is 100% Free, Let's try and See..</p>
            <form action="" method="get">
                <input type="color" name="color" id="color" value="<?php echo $colordata; ?>">
                <button type="submit">See</button>
            </form>
            <?php
                $hex = $colordata;
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
            ?>
            <img src="pallet.png" alt="Pallet">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="<?php echo $colordata; ?>"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
        </div>
        <div class="right">
            <div class="color first" style="background-color:<?php echo "rgba($r, $g, $b, 1)"; ?>;"><span><?php echo "rgba($r, $g, $b, 1)"; ?></span></div>
            <div class="color second" style="background-color:<?php echo "rgba($r, $g, $b, .9)"; ?>;"><span><?php echo "rgba($r, $g, $b, .9)"; ?></span></div>
            <div class="color third" style="background-color:<?php echo "rgba($r, $g, $b, .8)"; ?>;"><span><?php echo "rgba($r, $g, $b, .8)"; ?></span></div>
            <div class="color fourth" style="background-color:<?php echo "rgba($r, $g, $b, .7)"; ?>;"><span><?php echo "rgba($r, $g, $b, .7)"; ?></span></div>
            <div class="color fiveth" style="background-color:<?php echo "rgba($r, $g, $b, .6)"; ?>;"><span><?php echo "rgba($r, $g, $b, .6)"; ?></span></div>
            <div class="color sixth" style="background-color:<?php echo "rgba($r, $g, $b, .5)"; ?>;"><span><?php echo "rgba($r, $g, $b, .5)"; ?></span></div>
            <div class="color seventh" style="background-color:<?php echo "rgba($r, $g, $b, .4)"; ?>;"><span><?php echo "rgba($r, $g, $b, .4)"; ?></span></div>
            <div class="color eighth" style="background-color:<?php echo "rgba($r, $g, $b, .3)"; ?>;"><span><?php echo "rgba($r, $g, $b, .3)"; ?></span></div>
            <div class="color nineth" style="background-color:<?php echo "rgba($r, $g, $b, .2)"; ?>;"><span><?php echo "rgba($r, $g, $b, .2)"; ?></span></div>
        </div>
    </div>
</body>
</html>