<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
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
        .form-group {
            margin: 15px 0;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin: 5px 0;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .submit-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .profile-display {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }
        .error {
            color: red;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var address = document.getElementById("address").value;
            var dob = document.getElementById("dob").value;
            var favoriteFood = document.getElementById("favorite_food").value;
            var favoriteRestaurant = document.getElementById("favorite_restaurant").value;

            
            if (name == "" || phone == "" || email == "" || address == "" || dob == "" || favoriteFood == "" || favoriteRestaurant == "") {
                alert("All fields are required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Create Your Profile</h1>

    <form method="POST" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="favorite_food">Favorite Food:</label>
            <input type="text" id="favorite_food" name="favorite_food">
        </div>
        <div class="form-group">
            <label for="favorite_restaurant">Favorite Restaurant:</label>
            <input type="text" id="favorite_restaurant" name="favorite_restaurant">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">
        </div>

        <button type="submit" name="submit" class="submit-btn">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
    
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $favorite_food = htmlspecialchars($_POST['favorite_food']);
        $favorite_restaurant = htmlspecialchars($_POST['favorite_restaurant']);
        $dob = htmlspecialchars($_POST['dob']);

        
        echo "<div class='profile-display'>";
        echo "<h2>Your Profile</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Favorite Food:</strong> $favorite_food</p>";
        echo "<p><strong>Favorite Restaurant:</strong> $favorite_restaurant</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
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
