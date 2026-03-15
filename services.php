<?php include('header.php'); ?>

<style>
#services{
    min-height: 600px;
    width: 100%;
    padding: 60px;
    background-image: url("img.jpg");
    background-size: cover;
    background-position: center;
}

.services-box{
    max-width: 1100px;
    margin: auto;
    background: rgba(255,255,255,0.85);
    padding: 40px;
    border-radius: 25px;
}

.services-box h2{
    text-align: center;
    color: #c87c9b;
    margin-bottom: 30px;
}

.service-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.service-card{
    background: #fff;
    border-radius: 20px;
    padding: 20px;
    text-align: center;
}

.service-card img{
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 15px;
    margin-bottom: 15px;
}

.service-card h3{
    color: #4a3a3a;
    margin-bottom: 8px;
}

.service-card p{
    font-size: 14px;
    color: #555;
}
</style>

<div id="services">
    <div class="services-box">
        <h2>Our Services</h2>

        <div class="service-list">

            <div class="service-card">
                <img src="custom-cake.jpg">
                <h3>Custom Cake Orders</h3>
                <p>Personalized cakes designed for birthdays and special occasions.</p>
            </div>

            <div class="service-card">
                <img src="dessert.jpg">
                <h3>Desserts & Pastries</h3>
                <p>Fresh desserts, pastries, cupcakes, and brownies.</p>
            </div>

            <div class="service-card">
                <img src="dessert-box.jpg">
                <h3>Dessert Boxes</h3>
                <p>Assorted dessert boxes perfect for gifting.</p>
            </div>

            <div class="service-card">
                <img src="event.jpg">
                <h3>Event Catering</h3>
                <p>Desserts for weddings, parties, and corporate events.</p>
            </div>

            <div class="service-card">
                <img src="booking.jpg">
                <h3>Advance Booking</h3>
                <p>Pre-book cakes and desserts for important dates.</p>
            </div>

            <div class="service-card">
                <img src="delivery.jpg">
                <h3>Home Delivery</h3>
                <p>Freshly baked desserts delivered to your doorstep.</p>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>