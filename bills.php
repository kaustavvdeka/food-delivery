<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Your Meal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #4CAF50;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .item-list {
            margin: 20px 0;
            text-align: left;
        }
        .item-list label {
            display: block;
            margin: 10px 0 5px;
        }
        .item-list input {
            padding: 8px;
            width: 100px;
            margin-bottom: 10px;
        }
        .calculate-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .calculate-btn:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Design Your Meal</h1>

    <form method="POST">
        <div class="item-list">
            <label for="soup">Soup (₹150):</label>
            <input type="number" name="soup" id="soup" value="0" min="0">
        </div>
        <div class="item-list">
            <label for="masala_dosa">Masala Dosa (₹169):</label>
            <input type="number" name="masala_dosa" id="masala_dosa" value="0" min="0">
        </div>
        <div class="item-list">
            <label for="poha_jalebi">Poha with Jalebi (₹269):</label>
            <input type="number" name="poha_jalebi" id="poha_jalebi" value="0" min="0">
        </div>
        <div class="item-list">
            <label for="paratha">Paratha (₹40):</label>
            <input type="number" name="paratha" id="paratha" value="0" min="0">
        </div>

        <button type="submit" name="calculate" class="calculate-btn">Calculate Bill</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        
        $soup = isset($_POST['soup']) ? (int)$_POST['soup'] : 0;
        $masala_dosa = isset($_POST['masala_dosa']) ? (int)$_POST['masala_dosa'] : 0;
        $poha_jalebi = isset($_POST['poha_jalebi']) ? (int)$_POST['poha_jalebi'] : 0;
        $paratha = isset($_POST['paratha']) ? (int)$_POST['paratha'] : 0;

        
        $price_soup = 150;
        $price_masala_dosa = 169;
        $price_poha_jalebi = 269;
        $price_paratha = 40;

        
        $total = ($soup * $price_soup) + ($masala_dosa * $price_masala_dosa) + ($poha_jalebi * $price_poha_jalebi) + ($paratha * $price_paratha);

        
        echo "<div class='result'>";
        if ($soup > 0) {
            echo "Soup: " . $soup . " <br>";
        }
        if ($masala_dosa > 0) {
            echo "Masala Dosa: " . $masala_dosa . " <br>";
        }
        if ($poha_jalebi > 0) {
            echo "Poha with Jalebi: " . $poha_jalebi . " <br>";
        }
        if ($paratha > 0) {
            echo "Paratha: " . $paratha . " <br>";
        }
        echo "<br>Total Bill: ₹" . $total;
        echo "</div>";
    }
    ?>

</div>
<center>
    <a href="index.htm"><ion-icon name="storefront-outline"></ion-icon>Home</a></center>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

</body>
</html>
