<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Wallet</title>
    <style>
        /* Internal CSS */
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
        
        .user-details {
            margin-bottom: 20px;
        }
        
        .user-details label {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
     
    </style>
</head>
<body>
    <div class="wallet-container">
        <div class="wallet-header">
            <h2>Food Delivery Wallet</h2>
        </div>
        <div class="wallet-body">
        <?php
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $amount = $_POST['amount'];

        // Display input values
        echo "Name: $name<br>";
        echo "Phone: $phone<br>";
        echo "Email: $email<br>";
        echo "Address: $address<br>";
        echo "Amount to Add: $amount<br>";
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

