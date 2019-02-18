
<!DOCTYPE html>
<html>
<head>
    <link href="index.html">
</head>
<body>

<p>
    <?php
    $myage = $_GET["age"];

    if($myage<16){
         echo "You cannot purchase any products";
    }
    else if($myage>=16 and $myage<18){
        echo "You may purchase specs but not mugs or sausage rolls";
    }
    else if($myage>=18 and $myage<21){
        echo "You may purchase specs and mugs but not sausage rolls";
    }
    else{
        echo "You may purchase any products";
    }
    ?></p><p><?php
    $wantedgood = $_GET["product"];

    switch($wantedgood){
        case "mugs":
            echo "You must be 18 to buy mugs";
            break;
        case "specs":
            echo "You must be 16 to buy specs";
            break;
        case"sausage rolls":
            echo "You must be 21 to buy sausage rolls";
            break;
        default:
            echo "That product is not available";
    }

    ?></p>
    <p><?php echo "The following products<br>";
        $provisionedActivities = array("specs","mugs","sausage rolls");
    foreach ($provisionedActivities as $x) {
        print"<p>$x</p>";
    }
    echo "<br>Have been amended to<br>";
    unset($provisionedActivities[2]);
    $provisionedActivities[1] = "hugs";
    foreach ($provisionedActivities as $x) {
        print"<p>$x</p>";
    }
    ?></p>
<p>The products available on each day are as follows<?php

    for($i = 1;$i <31; $i++) {
        $products = array("specs", "mugs", "sausage rolls");
        if ($i % 2 == 0 and $i % 3 !== 0 and $i % 4 !== 0) {
            unset($products[1]);
            unset($products[2]);
        } else if ($i % 2 !== 0 and $i % 3 == 0 and $i % 4 !== 0) {
            unset($products[0]);
            unset($products[2]);
        } else if ($i % 2 !== 0 and $i % 3 !== 0 and $i % 4 == 0) {
            unset($products[0]);
            unset($products[1]);
        } else if ($i % 2 == 0 and $i % 3 == 0 and $i % 4 !== 0) {
            unset($products[2]);
        } else if ($i % 2 == 0 and $i % 3 !== 0 and $i % 4 == 0) {
            unset($products[1]);
        } else if ($i % 2 !== 0 and $i % 3 == 0 and $i % 4 == 0) {
            unset($products[0]);
        } else if ($i % 2 == 0 and $i % 3 == 0 and $i % 4 == 0) {
        } else {
            unset($products[1]);
            unset($products[2]);
            $products[0] = "no products";
        }
            foreach ($products as $x) {
                print "<br>On $i/06/2019 $x are available";
            }
        }

    ?></p>

</body>
</html>
