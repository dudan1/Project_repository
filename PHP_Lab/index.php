
<!DOCTYPE html>
<html>
<head>
    <link href="age_input.html">
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

    ?>
</p>

</body>
</html>
