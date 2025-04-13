<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        
        .wallet-container {
            width: 80%;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .wallet-header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #333;
        }
        
        .wallet-body {
            padding: 20px;
        }
      </style>
</head>
<body>
<div class="wallet-container">
        <div class="wallet-header">
            <h2>YOUR CART</h2>
        </div>
        <div class="wallet-body">
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $item1 = $_POST["sp"]*150;
        $item2 = $_POST['tp']*169;
        $item3 = $_POST['up']*269;
        $item4 = $_POST['vp']*40;
        
        
       
        echo "Masala Dosa Total Price $item3 dolar<br>";
        
        echo "Poha Total Price $item2 dolar<br>";
        echo "Soup with Total Price $item3 dolar<br>";
        echo "Paratha Total Price $item4 dolar<br>";
         }                          
        ?>
            </div>
</div>
<center>
    <a href="index.htm"><ion-icon name="storefront-outline"></ion-icon>Home</a></center>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</body>
</html>