<?php

session_start();

$_SESSION["kundis"] = array();

$_SESSION["kundis"]["cykel"] = array("prod"=>1, "pris"=>3999,  "besk"=>"hållbar", "farg"=>"brun");
$_SESSION["kundis"]["kattunge"] = array("prod"=>2, "pris"=>100,  "besk"=>"kramgo", "farg"=>"svartprickig");
$_SESSION["kundis"]["hylla"] = array("prod"=>3, "pris"=>499,  "besk"=>"exklusiv", "farg"=>"vit");
$_SESSION["kundis"]["toffs"] = array("prod"=>4, "pris"=>2,  "besk"=>"elastisk meed en ros på", "farg"=>"rosafluffig");
$_SESSION["kundis"]["keps"] = array("prod"=>5, "pris"=>79,  "besk"=>"Bamsekeps", "farg"=>"Bamse-blå");
$_SESSION["kundis"]["dator"] = array("prod"=>6, "pris"=>5099,  "besk"=>"HP Laptop", "farg"=>"slimegrön");
$_SESSION["kundis"]["toapapper"] = array("prod"=>7, "pris"=>100,  "besk"=>"Lambi, 10-pack", "farg"=>"vit");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
