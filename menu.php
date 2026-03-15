<?php include('header.php'); ?>

<style>
/* CAKES & DESSERTS SECTION */
#cakes{
    min-height: 600px;
    width: 100%;
    padding: 60px;
    background-image: url("img.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* MAIN BOX */
.cakes-box{
    max-width: 1000px;
    margin: auto;
    background: rgba(255,255,255,0.8);
    padding: 45px;
    border-radius: 25px;
}

/* SECTION HEADING */
.cakes-box h2{
    text-align: center;
    color: #c87c9b;
    margin-bottom: 30px;
    letter-spacing: 2px;
}

/* SUB HEADING */
.cakes-box h3{
    text-align: center;
    color: #4a3a3a;
    margin: 40px 0 25px;
}

/* GRID */
.cake-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}

/* CARD */
.cake-card{
    background: rgba(255,255,255,0.9);
    border-radius: 20px;
    padding: 20px;
    text-align: center;
}

/* IMAGE */
.cake-card img{
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 15px;
    margin-bottom: 15px;
}

/* CARD TITLE */
.cake-card h4{
    color: #4a3a3a;
    margin-bottom: 10px;
}

/* CARD TEXT */
.cake-card p{
    font-size: 15px;
    color: #555;
}
</style>

<div id="cakes">
    <div class="cakes-box">

        <h2>Our Menu</h2>

        <!-- CAKES -->
        <h3>Our Cakes</h3>
        <div class="cake-list">

            <div class="cake-card">
                <img src="menu images/chocolate-cake.jpg">
                <h4>Chocolate Cake</h4>
                <p>Rich, moist chocolate cake perfect for birthdays and celebrations.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/vanilla-cake.jpg">
                <h4>Vanilla Cake</h4>
                <p>Soft vanilla sponge with smooth cream frosting.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/red-velvet.jpg">
                <h4>Red Velvet</h4>
                <p>Classic red velvet with mild cocoa flavor and cream cheese frosting.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/butterscotch.jpg">
                <h4>Butterscotch</h4>
                <p>Sweet butterscotch cake topped with crunchy caramel bits.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/black-forest.jpg">
                <h4>Black Forest</h4>
                <p>Chocolate sponge layered with fresh cream and cherries.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/custom-cake.jpg">
                <h4>Custom Cakes</h4>
                <p>Designed based on your theme, size, and special requests.</p>
            </div>

        </div>

        <!-- DESSERTS -->
        <h3>Our Desserts</h3>
        <div class="cake-list">

            <div class="cake-card">
                <img src="menu images/pastries.jpg">
                <h4>Pastries</h4>
                <p>Single-serve pastries in chocolate, vanilla, and fruit flavors.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/cupcakes.jpg">
                <h4>Cupcakes</h4>
                <p>Soft cupcakes with pastel frosting, perfect for small treats.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/dessert-box.jpg">
                <h4>Dessert Boxes</h4>
                <p>Assorted dessert boxes with pastries, brownies, and mini cakes.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/brownies.jpg">
                <h4>Brownies</h4>
                <p>Fudgy chocolate brownies with rich cocoa flavor.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/jar-desserts.jpg">
                <h4>Jar Desserts</h4>
                <p>Layered jar desserts with cream, cake, and toppings.</p>
            </div>

            <div class="cake-card">
                <img src="menu images/mini-treats.jpg">
                <h4>Mini Treats</h4>
                <p>Perfect bite-sized desserts for parties and gifting.</p>
            </div>

        </div>

    </div>
</div>

<?php include('footer.php'); ?>