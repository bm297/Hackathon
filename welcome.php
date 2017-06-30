<!DOCTYPE html>
<html>
<title>Welcome</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<head>

</head>

<body class="w3-container">

        <!--Header Bar-->
        <div class = " w3-bar w3-panel w3-highway-brown w3-text-amber">

                <h3 class = "w3-bar-element w3-panel w3-xxxlarge w3-center-align"><strong>UPS Grill</strong></h3>

                <button class = "w3-bar-item w3-button w3-xlarge w3-padding-14 w3-margin-top w3-highway-brown w3-text-white w3-hover-brown">Breakfast</button>
                <button class="w3-bar-item w3-button w3-xlarge w3-padding-14 w3-margin-top w3-highway-brown w3-text-white w3-hover-brown">Lunch</button>

                <div class = "w3-dropdown-hover">

                        <button class = "w3-button w3-xlarge w3-padding-14 w3-margin-top w3-highway-brown w3-text-white w3-hover-brown">Extras</button>

                        <div class="w3-dropdown-content w3-bar-block w3-card-4">

                                <a href="C:\Users\ZDS6TQS\Desktop\ActiveIncidents.html" class="w3-bar-item w3-button">Drinks</a>
                                <a href="C:\Users\ZDS6TQS\Desktop\ClosedIncidents.html" class="w3-bar-item w3-button">Chips</a>
                                <a href="#Dinner" class="w3-bar-item w3-button">Dessert</a>

                        </div>
                </div>

                <button class="w3-button w3-xlarge w3-right w3-margin-right w3-highway-brown w3-hover-brown">Cart</button>

        </div>


        <form action="cart.php" method="post">
        <?php

        ini_set('display_errors', '1');

        $conn = mysqli_connect("localhost", "cs288", "cs288pass");

        $db = mysqli_select_db($conn,"nyse");

        $tbl = "bitems";

        $query = "select * from $tbl";

        $rows = mysqli_query($conn, $query);

        $cols = mysqli_num_fields($rows); # Returns 6

        echo "<table>";
        echo "<tr>";
        for($col = 0; $col<$cols; $col++){
                echo "<th>";
                $field = mysqli_fetch_field($rows);
                echo $field->name;
                echo "</th>";
        }

        while($elem = mysqli_fetch_array($rows)){
                echo "<tr>";

                for($i = 0; $i < $cols; $i++){

                        echo "<td>$elem[$i]  </td>";

                }

                echo '<td><input type="number" name="quantity" min="1" max="5">', '<input type="submit"></td>';
                echo "</tr>";
        }

        echo "</tr>";   
        echo "</table>";
        echo '<button type="button"> Add to Cart </button>';
        ?>

    </form>


<body>