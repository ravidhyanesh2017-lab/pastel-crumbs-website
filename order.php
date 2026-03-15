<?php include('header.php'); ?><!-- SUCCESS MESSAGE -->
<div id="successMsg" style="
    display:none;
    max-width:450px;
    margin:20px auto;
    background: rgba(255,255,255,0.9);
    border-radius:20px;
    padding:25px;
    text-align:center;
    font-family: Georgia, serif;
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
">
    <h3 style="color:#c87c9b;"> Order Received!</h3>
    <p style="color:#4a3a3a; font-size:16px;">
        Thank you for ordering from <b>Pastel Crumbs</b> <br>
        We’ll contact you shortly to confirm your order.
    </p>
</div>


<style>
/* RESET EXTRA GAPS */
body{
    margin:0;
    padding:0;
}

/* ORDER SECTION */
#order{
    height:700px;
    width:100%;
    margin-top:0;
    padding-top:0;

    background-image:url("img.jpg");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

/* FORM TABLE */
table{
    width:420px;
    font-size:18px;
    position:relative;
    top:40px;        /* pulls form UP */
    left:32%;
    background:rgba(255,255,255,0.85);
    padding:25px;
    border-radius:20px;
}

/* HEADING */
h2{
    margin:0;
    padding-bottom:20px;
    text-align:center;
    color:#4a3a3a;
}

/* INPUTS */
input, select, textarea{
    width:100%;
    padding:6px;
    font-size:16px;
}

/* BUTTONS */
.button{
    width:120px;
    padding:6px;
    font-size:16px;
    cursor:pointer;
}
</style>

<div id="order">

<form action="#" method="post" onsubmit="showMsg(); return false;">
<table>

<tr>
    <td colspan="2">
        <h2>Make your Order</h2>
    </td>
</tr>

<tr>
    <td>Name</td>
    <td><input type="text" name="name" required></td>
</tr>

<tr>
    <td>Mobile</td>
    <td><input type="number" name="mobile" required></td>
</tr>

<tr>
    <td>Cake Type</td>
    <td>
        <select name="cake">
            <option value="">--Select--</option>
            <option>Chocolate</option>
            <option>Vanilla</option>
            <option>Red Velvet</option>
            <option>Butterscotch</option>
            <option>Custom Cake</option>
            <option>Pastries</option>
            <option>Cupcakes</option>
            <option>Dessert-Box</option>
            <option>Brownies</option>
            <option>Jar-Dessert</option>
            <option>Mini-Treats</option>
        </select>
    </td>
</tr>

<tr>
    <td>Delivery Date</td>
    <td><input type="date" name="date"></td>
</tr>

<tr>
    <td>Message</td>
    <td><textarea name="message"></textarea></td>
</tr>

<tr>
    <td></td>
    <td>
        <input class="button" type="submit" value="Order" onclick="orderMsg()">
        <input class="button" type="reset" value="Clear">
    </td>
</tr>

</table>
</form>

</div>
<script>
function showMsg(){
    document.getElementById("successMsg").style.display = "block";
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>

<?php include('footer.php'); ?>