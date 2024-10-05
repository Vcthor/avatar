<?php

$luiz = "Mark Luiz";
$bobis = "Bobis";
$markLuiz = $luiz . " " . $bobis;

$mark = "Mark Anthony";
$belardo = "Belardo";
$markAnthony = $mark . " " . $belardo;

$steven = "lance steven";
$bauzon = "Bauzon";
$lanceSteven = $steven . " " . $bauzon;

$vic = "vic tor";
$delosSantos = "Delos Santos";
$vicTor = $vic . " " . $delosSantos;


$age = 21;
$email = "avatar@gmail.com";
$phone = "0912-6574-987";
$address = "Blk 127 Lot 6 Biglang Liko St. Sogo City";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>

    
    
    
    <div id="wrapper">

        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg" alt="Profile">
        <div id="container">


            <h1><?= $markLuiz ?></h1>
            <p id="desc">A I R B E N D E R</p>
            <p><?= $age ?></p>
            <p id="email"><?= $email ?></p>
            <p id="phone"><?= $phone ?></p>
            <p id="address"><?= $address ?></p>


        </div>

    </div>
    
    <div id="wrapper">

        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg" alt="Profile">
        <div id="container">


            <h1><?= $markAnthony ?></h1>
            <p id="desc">A I R B E N D E R</p>
            <p><?= $age ?></p>
            <p id="email"><?= $email ?></p>
            <p id="phone"><?= $phone ?></p>
            <p id="address"><?= $address ?></p>


        </div>

    </div>
    <div id="wrapper">

        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg" alt="Profile">
        <div id="container">


            <h1><?= $lanceSteven ?></h1>
            <p id="desc">A I R B E N D E R</p>
            <p><?= $age ?></p>
            <p id="email"><?= $email ?></p>
            <p id="phone"><?= $phone ?></p>
            <p id="address"><?= $address ?></p>


        </div>

    </div>
    
    <div id="wrapper">

        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg" alt="Profile">
        <div id="container">


            <h1><?= $vicTor ?></h1>
            <p id="desc">A I R B E N D E R</p>
            <p><?= $age ?></p>
            <p id="email"><?= $email ?></p>
            <p id="phone"><?= $phone ?></p>
            <p id="address"><?= $address ?></p>


        </div>

    </div>
    

</body>

</html>