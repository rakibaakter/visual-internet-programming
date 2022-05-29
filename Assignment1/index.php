<?php
    $heading ="My First Project";
    $gridArray=array(
        array(
            "id" => "1",
            "imgSrc" => "grid-1.jpg",
            "title" => "The Mind",
            "subTitle" =>"Photoshop, Print Design"
        ),
        array(
            "id" => "2",
            "imgSrc" => "grid-2.jpg",
            "title" => "The Police",
            "subTitle" =>"Illustration, Icons"
        ),
        array(
            "id" => "3",
            "imgSrc" => "grid-3.jpg",
            "title" => "The Glasses",
            "subTitle" =>"Typography, Illustration"
        ),
        array(
            "id" => "4",
            "imgSrc" => "grid-4.jpg",
            "title" => "The Mustache",
            "subTitle" =>"Photoshop, Icons"
        ),
        array(
            "id" => "5",
            "imgSrc" => "grid-5.jpg",
            "title" => "The Leaf",
            "subTitle" =>"Icons, Print Design"
        ),
        array(
            "id" => "6",
            "imgSrc" => "grid-6.jpg",
            "title" => "The Shield",
            "subTitle" =>"Illustration, Icons"
        ),
    );
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Assignment 1</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1><?php echo $heading ?></h1>
        </div>
        <div class="container">
            <?php
                foreach($gridArray as $grid){?>
                    <div class="sub_container">
                        <img src="images/<?php echo $grid["imgSrc"]?>" alt=" grid-<?php echo $grid["id"]?>" >
                        <p><?php echo $grid["title"]?></p>
                        <span><?php echo $grid["subTitle"]?></span>
                    </div>
                <?php } ?>
        </div>
    </body>
</html>