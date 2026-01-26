<?php
    
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $gender = $_GET["gender"];
    $country = $_GET["country"];
    $color = $_GET["color"];
?>

<?php
    echo "Hello student: " . $firstname. " " . $lastname . "<br>";
    echo "Gender: ". $gender. " " . "<br>";
    echo "Country: " . $country . "<br>";
    echo "Favourite Color: ";
    echo implode(", ", $color);
?>