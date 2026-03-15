<?php include('header.php'); ?>

<style>
/* HOME SECTION */
#home{
    min-height:600px;
    width: 100%;
    padding: 40px;

    background-image: url("img.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;  
    padding-top:20px; 
}

/* IMAGE COLUMN */
.col3{
    flex: 1;
    display: flex;
    justify-content: center;
}

/* IMAGE SIZE FIXED */
.col3 img{
    width: 300px;      /* controlled size */
    max-width: 100%;
    border-radius: 20px;
    margin-top:-180px;
}

/* TEXT COLUMN */
.col4{
    flex: 2;
    display: flex;
    justify-content: center;
}

/* TEXT BOX */
.col4 p{
    width: 90%;
    font-size: 20px;
    text-align: justify;
    padding: 15px 20px;
    line-height:1.5;
    color: #4a3a3a;
    background: rgba(255,255,255,0.75);
    border-radius: 20px;
    margin-top:-180px;
}

/* MARQUEE */
marquee h2{
    background: rgba(255,255,255,0.85);
    display: inline-block;
    padding: 10px 25px;
    border-radius: 20px;
    color: #c87c9b;
}
</style>

<div id="home">

    <marquee behavior="scroll" direction="left">
        <h2>Welcome to Pastel Crumbs</h2>
    </marquee>

    <div class="col3">
        <img src="desserts.jpg" alt="Desserts">
    </div>

    <div class="col4">
        <p>
            Pastel Crumbs is a dreamy home-baking brand specializing in soft pastel cakes,
            custom orders, and handcrafted desserts made with love. We focus on quality,
            aesthetics, and taste to make every celebration special. Every dessert is carefully
            crafted using fresh, high quality ingredients to ensure delightful flavors and
            beutiful presentations.
        </p>
    </div>

</div>

<?php include('footer.php'); ?>