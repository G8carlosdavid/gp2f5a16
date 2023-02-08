<!DOCTYPE html>
<html lang="ca">
<head>
        <meta charset="utf-8">
        <title>Preu de reserva</title>
</head> 
<body>
        <h1><u>Preu de reserva</u></h1>

        <?php

        $room_type = $_POST['room_type'];
        $room_price = 0;
        if ($room_type == "basic") {
          $room_price = 40;
        } else {
          $room_price = 50;
        }
        
        $num_rooms = $_POST['num_rooms'];
        $num_persons = $_POST['num_persons'];
        $num_doubles = $_POST['num_doubles'];
        $num_singles = $_POST['num_singles'];
        $num_nights = $_POST['num_nights'];

        $total_price = ($room_price * $num_nights * $num_rooms * $num_persons) +
                       ($num_doubles * 15) +
                       ($num_singles * 10);
        
        $preu_total = "El preu total de la reserva és de: " . $total_price . "€\n";
        
        echo $preu_total;

        ?>
        <br>
        <a href="index.html">Tornar a la pagina anterior</a>
</body>
</html> 

