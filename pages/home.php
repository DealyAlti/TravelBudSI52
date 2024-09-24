<?php
include '../include/header.php'; 
?>
<section>
    <h2>Available Holiday Packages</h2>
    <div class="paket">
    <div class="paket-item">
            <h3>Osaka Holiday Package & Universal Studio Japan (6D5N)</h3>
            <p> <i class="fa fa-ticket"></i>> The entry ticket for Universal Studios Japan comes with selectable package options: either just the Universal Studios Japan ticket or the "Have Fun in Kansai Pass" bundle.</p>
            <p> <i class="fa fa-bed"></i> 5 Days 4 Nights Hotel Stay </p>
            <p> <i class="fas fa-plane"></i> Round-Trip Flight </p>
            <hr>
            <div class="price-row">
                <p style="color: gray;"><strong>Recommended</strong></p>
                <p style="color: gray;"><strong>Price</strong></p>
            </div>
            <div class="price-row">
                <p><i class="fas fa-calendar-alt"></i> <strong>1-6 October 2024</strong></p>
                <p style="color: red"><strong>Rp 9.070.000</strong>/pax</p>
            </div>
            <br>
            <a href="booking.php" class="btn">Book Now</a>
        </div>
        <div class="paket-item">
            <h3>Swiss Holiday Package & Snow in Mount Titlis (9D8N)</h3>
            <p> <i class="fa fa-ticket"></i> Take a cable car to the summit of Mount Titlis, enjoy skiing & snow tubing, explore the glacier cave, and soak in the iconic scenery during the journey from Zurich.</p>
            <p> <i class="fa fa-bed"></i> 8 Days 7 Nights Hotel Stay </p>
            <p> <i class="fas fa-plane"></i> Round-Trip Flight </p>
            <hr>
            <div class="price-row">
                <p style="color: gray;"><strong>Recommended</strong></p>
                <p style="color: gray;"><strong>Price</strong></p>
            </div>
            <div class="price-row">
                <p><i class="fas fa-calendar-alt"></i> <strong>9-17 January 2025</strong></p>
                <p style="color: red"><strong>Rp 20.740.000</strong>/pax</p>
            </div>
            <br>
            <a href="booking.php" class="btn">Book Now</a>
        </div>
        <div class="paket-item">
            <h3>Hongkong Holiday Package & Disneyland Hongkong (5D4N)</h3>
            <p> <i class="fa fa-ticket"></i> The entry ticket to Hong Kong Disneyland includes access to the World of Frozen and a 2-in-1 meal package from Disneyland. Enjoy the excitement of the rides available at Disneyland!</p>
            <p> <i class="fa fa-bed"></i> 4 Days 3 Nights Hotel Stay </p>
            <p> <i class="fas fa-plane"></i> Round-Trip Flight </p>
            <hr>
            <div class="price-row">
                <p style="color: gray;"><strong>Recommended</strong></p>
                <p style="color: gray;"><strong>Price</strong></p>
            </div>
            <div class="price-row">
                <p><i class="fas fa-calendar-alt"></i> <strong>3-7 November 2024</strong></p>
                <p style="color: red"><strong>Rp 5.860.000</strong>/pax</p>
            </div>
            <br>
            <a href="booking.php" class="btn">Book Now </a>
        </div>
        </div>
    </div>
</section>
<?php
include '../include/footer.php'; 
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #000080;
        color: #FFFFE0;
        padding: 10px;
        text-align: center;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin: 0 10px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
    }

    main {
        padding: 20px;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #000080;
        color: #FFFFE0;
        width: 100%;
        position: relative;
        margin-top: 20px;
    }

    .paket {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 20px;
        gap: 20px;
    }
    .paket-item p {
        text-align: left;
    }


    .paket-item {
        background-color: #F0F8FF;
        border: 1px solid #ddd;
        padding: 20px;
        width: calc(30% - 40px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        min-width: 200px;
        transition: transform 0.3s ease, box-shadow 0.3s ease; 
    }

    
    .paket-item:hover {
        transform: translateY(-5px); 
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); 
    }

    .paket-item h3 {
        margin-top: 0;
    }

    .paket-item p {
        font-size: 14px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #5F9EA0;
        color: white;
        text-decoration: none;
        margin-top: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #218838;
    }
    .price-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .price-row p {
        margin: 0;
    }

</style>
