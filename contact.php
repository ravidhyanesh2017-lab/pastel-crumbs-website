<?php include('header.php'); ?>

<style>
/* CONTACT SECTION */
#contact{
    min-height: 700px;
    width: 100%;
    padding: 40px;

    background-image: url("img.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* CONTACT BOX */
.contact-box{
    max-width: 1100px;
    margin: auto;
    background: rgba(255,255,255,0.85);
    border-radius: 25px;
    overflow: hidden;
}

/* MAP */
.contact-box iframe{
    width: 100%;
    height: 300px;
    border: 0;
}

/* DETAILS ROW */
.contact-details{
    display: flex;
    flex-wrap: wrap;
    padding: 30px;
    background: linear-gradient(to right, #e7b3c7, #c8a2c8);
}

/* LEFT & RIGHT */
.contact-left,
.contact-right{
    flex: 1;
    padding: 20px;
    color: #3d2b2b;
}

/* HEADINGS */
.contact-left h3,
.contact-right h3{
    margin-bottom: 15px;
    letter-spacing: 1px;
}

/* TEXT */
.contact-left p,
.contact-right p{
    line-height: 1.6;
    font-size: 16px;
}
</style>

<div id="contact">
    <div class="contact-box">

        <!-- MAP : AVADI, CHENNAI -->
        <iframe 
            src="https://www.google.com/maps?q=1st%20Street%20EVR%20Nagammai%20Nagar%20Avadi%20Chennai%20100062&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- DETAILS -->
        <div class="contact-details">

            <!-- LOCATION -->
            <div class="contact-left">
                <h3>📍 Location</h3>
                <p>
                    Pastel Crumbs<br>
                    1st Street,<br>
                    EVR Nagammai Nagar,<br>
                    Avadi, Chennai – 100062
                </p>
            </div>

            <!-- CONTACT -->
            <div class="contact-right">
                <h3> Contact</h3>
                <p>
                    Mobile: 9952986689<br>
                    Email: pastelcrumbs@gmail.com
                </p>
            </div>

        </div>

    </div>
</div>

<?php include('footer.php'); ?>