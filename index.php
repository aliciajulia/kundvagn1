<?php
session_start();

$_SESSION["kundis"] = array();
//varor
$_SESSION["kundis"]["cykel"] = array("prod" => 1, "pris" => 3999, "besk" => "hållbar", "farg" => "brun", "antal" => 0);
$_SESSION["kundis"]["kattunge"] = array("prod" => 2, "pris" => 100, "besk" => "kramgo", "farg" => "svartprickig", "antal" => 0);
$_SESSION["kundis"]["hylla"] = array("prod" => 3, "pris" => 499, "besk" => "exklusiv", "farg" => "vit", "antal" => 0);
$_SESSION["kundis"]["toffs"] = array("prod" => 4, "pris" => 2, "besk" => "elastisk meed en ros på", "farg" => "rosafluffig", "antal" => 0);
$_SESSION["kundis"]["keps"] = array("prod" => 5, "pris" => 79, "besk" => "Bamsekeps", "farg" => "Bamse-blå", "antal" => 0);
$_SESSION["kundis"]["dator"] = array("prod" => 6, "pris" => 5099, "besk" => "HP Laptop", "farg" => "slimegrön", "antal" => 0);
$_SESSION["kundis"]["toapapper"] = array("prod" => 7, "pris" => 100, "besk" => "Lambi, 10-pack", "farg" => "vit", "antal" => 0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="varor">
            <form>
                Cykel
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="cykel" name="prod1">
            </form>
        </div>
        <div class="varor">
            <form>
                Kattunge
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="katunge" name="prod1">
            </form>
        </div>
        <div class="varor">
            <form>
                Hylla
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="hylla" name="prod1">
            </form>
        </div>
        <div class="varor">
            <form>
                Toffs
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="toffs" name="prod1">
            </form>
        </div>
        <div class="varor">
            <form>
                Keps
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="keps" name="prod1">
            </form>
        </div>
        <div class="varor">
            <form>
                Dator
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="dator" name="prod1">
            </form>
        </div>
        <div class="varor">
            <form>
                Toapapper
                <input type="number" value="1"> 
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="toapapper" name="prod1">
            </form>
        </div>  


    </body>
</html>
