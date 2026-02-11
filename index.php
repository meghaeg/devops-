<?php
// Simple PHP variable usage
$shopName = "Frosty Scoops Ice Cream Parlour";
$tagline = "Happiness served one scoop at a time 🍨";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $shopName; ?></title>

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(120deg, #ffdde1, #ee9ca7);
        color: #333;
    }

    header {
        background: linear-gradient(90deg, #ff6f61, #ffcc70);
        padding: 25px;
        text-align: center;
        color: white;
    }

    header h1 {
        margin: 0;
        font-size: 40px;
    }

    header p {
        font-size: 18px;
    }

    .container {
        padding: 40px;
        text-align: center;
    }

    .section-title {
        font-size: 30px;
        margin-bottom: 20px;
        color: #ff4d6d;
    }

    .flavours {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }

    .card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        padding: 20px;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 15px;
    }

    .card h3 {
        margin: 15px 0 5px;
        color: #ff6f61;
    }

    .price {
        font-weight: bold;
        color: #444;
    }

    .about {
        background: #fff3f6;
        padding: 40px;
        margin-top: 50px;
        border-radius: 20px;
    }

    footer {
        background: #ff6f61;
        color: white;
        text-align: center;
        padding: 15px;
        margin-top: 40px;
    }

    button {
        background: #ff6f61;
        border: none;
        color: white;
        padding: 12px 25px;
        border-radius: 30px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 15px;
    }

    button:hover {
        background: #ff4d6d;
    }
</style>
</head>

<body>

<header>
    <h1><?php echo $shopName; ?></h1>
    <p><?php echo $tagline; ?></p>
</header>

<div class="container">
    <h2 class="section-title">Our Popular Flavours</h2>

    <div class="flavours">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1505253216365-3a7f6f07f96b" alt="Vanilla">
            <h3>Classic Vanilla</h3>
            <p class="price">₹120</p>
            <button>Order Now</button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f" alt="Chocolate">
            <h3>Rich Chocolate</h3>
            <p class="price">₹150</p>
            <button>Order Now</button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1589712235274-8a49b3c37a47" alt="Strawberry">
            <h3>Strawberry Delight</h3>
            <p class="price">₹140</p>
            <button>Order Now</button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1590080877777-1c23db1e7ef6" alt="Mango">
            <h3>Mango Magic</h3>
            <p class="price">₹160</p>
            <button>Order Now</button>
        </div>
    </div>

    <div class="about">
        <h2 class="section-title">About Us</h2>
        <p>
            Welcome to <strong><?php echo $shopName; ?></strong>!  
            We serve freshly made ice creams using premium ingredients, natural flavors,
            and lots of love. Perfect place for families, friends, and ice cream lovers 💖
        </p>
    </div>
</div>

<footer>
    <p>© <?php echo date("Y"); ?> Frosty Scoops | Made with 🍦 & ❤️</p>
</footer>

</body>
</html>
