
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
    <p><?php $provisionedActivities = array("specs","mugs","sausage rolls");
    foreach ($provisionedActivities as $x) {
        print"<p>$x</p>";
    }
    unset($provisionedActivities[2]);
    $provisionedActivities[1] = "hugs";
    foreach ($provisionedActivities as $x) {
        print"<p>$x</p>";
    }
    ?></p>



</body>
</html>
