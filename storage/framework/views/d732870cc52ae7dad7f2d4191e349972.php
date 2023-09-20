<style>
    .fill {
        display: flex;
        /* justify-content: center; */
        /* align-items: center; */
        overflow: hidden;
    }
    /* Default styles for larger screens */


/* ... (your other styles) */

/* Media query for screens up to 768px wide (typical mobile devices) */
@media (max-width: 768px) {
    .fill {
        flex-direction: column; /* Stack elements vertically on smaller screens */
    }

    /* Adjust styles for the footer elements on smaller screens */
    .col {
        margin-top: 20px; /* Increase spacing between columns */
    }

    .pages-title {
        text-align: center; /* Center align the title */
        margin-top: 20px; /* Adjust margin */
    }

    .pages-list {
        text-align: center; /* Center align the list items */
    }

   

    /* Add more mobile-responsive styles as needed */
}


    .fill img {
        flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
        object-fit:fill;
    }

    .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
    }

    .top-right {
        position: absolute;
        top: 8px;
        right: 16px;
    }

    .cp-txt {
        position: absolute;
        top: 50%;
        
        left: 50%;
        transform: translate(-50%, 400%);
    }
    /* Add this CSS to your existing styles */
.footer-information {
    color: white;            /* Set font color to white */
    margin-top: 40px;        /* Add some top margin for spacing */
    text-align: left;        /* Align text to the left */
    line-height: 2;  
    font-size: 17px;
          /* Adjust line spacing as needed */
}
.footer-information strong {
    font-size: 30px;    /* Increase font size as needed */
    font-weight: 600px;  /* Apply a bold font weight */
}
.social-icons {
        margin-top:30px;
        display: flex; /* Display icons in a row */
        align-items: left;
        flex-direction: column;
        /* Center vertically within the container */
    }

.social-icon img {
        border-radius: 50%; /* Make the icons rounded */
        width: 30px; /* Adjust the icon size as needed */
        height: 40px; /* Adjust the icon size as needed */
        margin-right: 10px;
        padding: 5px; /* Add spacing between icons */
    }
    .social-text {
        margin-bottom: 10px; /* Add spacing between text and icons */
        font-weight: bolder; /* Make the text bold */
        color: white;
        font-size:20px;
        text-align:left;
    }
    .social-icons-row {
        display: flex; /* Display icons in a row */
        justify-content: left; /* Center horizontally */
    }
    .col {
        margin-top:50px;
        padding: 0;
    }
    .pages-title {
        font-weight: bold;
        color: white; /* Set text color to white */
        font-size: 30px;
        text-align: center; /* Adjust the font size as needed */
    }
    .pages-list {
        list-style: none;
        padding: 0;
        
    }

    .pages-list li {
        margin: 5px 0;
        color: white; /* Set text color to white */
    }
    .partner-pictures {
    display: inline-block; 
    text-align: center;
    display: flex; /* Display icons in a row */
    justify-content: left;
    max-width: 100px;/* Set the display property to inline */
}

 /* Add some margin between the partner images */

.partners-title {
    font-weight: bold;
        color: white; /* Set text color to white */
        font-size: 30px;
        text-align: left;/* Adjust the font size as needed */
    margin-bottom: 10px;
    margin-top: 40px;
     /* Add margin below the title for spacing */
}
.partner-pictures img {
    max-width: 800px;
    margin-right: 10px;
    max-height:80px;/* Add some margin between the partner images */
    background-color: rgba(241, 241, 241, 0.8);
    padding:5px;
}
.email{
    text-align: center;
    padding: 20px;
    opacity: 0.8;
    border-radius: 5px;
    background-color: rgba(241, 241, 241, 0.8);
}

    
.email p {
    font-size: 20px;
    font-weight:400px;
    margin-bottom: 10px;
    color: black;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    opacity: 0.7;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}


    
</style>

<!-- Footer -->
<footer>
    <div class="fill position-relative">
        <img src="<?php echo e(asset('images/home_footer/foot_5.jpg')); ?>" alt="" style="width:100%;">

        <div class="container position-absolute">
            <div class="row m-2">
                <div class="col-4">
                    
                    <address class="footer-information">
                    <strong class="footer-information">INFORMATION</strong><br>
                        info@biid.org.bd<br>
                        Call us: (+880) 2 8714169, (+880) 2 9845909<br>
                        Bangladesh Institute of ICT in Development (BIID)<br>
                        House No. 174, Level-2, Apt.B3, Road No. 02,
                        Mohakhali DOHS, Dhaka- 1206,<br>
                        Bangladesh
                    </address>
                    <div class="social-icons">
                    <div class="social-text">Let’s Get Social!</div>
                    <div class="social-icons-row">
                            <a href="#" class="social-icon"><img src="https://static-00.iconduck.com/assets.00/facebook-icon-512x512-seb542ju.png" alt="Facebook"></a>
                            <a href="#" class="social-icon"><img src="https://toppng.com/uploads/preview/twitter-x-icon-logo-116902890413xbfexhf8l.webp" alt="Twitter"></a>
                            <a href="#" class="social-icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/1024px-Instagram-Icon.png" alt="Instagram"></a>
                            <a href="#" class="social-icon"><img src="https://static-00.iconduck.com/assets.00/pinterest-icon-2048x2048-d7p0u7c5.png" alt="Pinterest"></a>
                            <a href="#" class="social-icon"><img src="https://www.cdnlogo.com/logos/l/66/linkedin-icon.svg" alt="LinkedIn"></a>
                            <!-- Add more social media icons as needed -->
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-7">
                    
                    <div class="row float-left">
                        <div class="col">
                            <strong class="pages-title">Pages</strong>
                            <ul class = "pages-list">
                                <li>হোম</li>
                                <li>কোর্সসমূহ</li>
                                <li>ভ্লগ</li>
                                <li>ওয়েবিনার</li>
                                <li>সহায়িকা</li>
                                <li>আমাদের সম্পর্কে</li>
                                <li>যোগাযোগ</li>
                            </ul>
                            <h2 class="partners-title">PARTNERS</h2>
            <!-- Add partner pictures below -->
            <div class="partner-pictures">
                
                <img src="https://e-pushti.netlify.app/static/media/partners.8b938f8d07452f431bd3.png" alt="Partner 1">
                
<!-- Add more partner images as needed -->
            </div>
                            
        </div>
                        
                        <div class="col">
                            <div class = "email">
                        <p>BE OUR HEALTH CLUB MEMBER</p>
    <p>We will send updates once a week</p>
    
    <!-- Placeholder -->
    <input type="email" placeholder="Enter your email">
    
    <!-- Button -->
    <button>Subscribe</button>
                        </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer -->

<!-- Copyright -->
<div class="container position-relative text-center" style="margin-top: -70px">
    <p class="">&copy; <?php echo e(date('Y')); ?> <b>Bee Technology and Research Hub</b> </p>
    <p class="">The contents of this website are the sole responsibility of BIID Foundation and MUCH, and do not necessarily reflect the views of the FAO, EU, USAID.</p>
</div>
<!-- Copyright --><?php /**PATH G:\laragon\www\temp_129\resources\views/home_page/home_footer.blade.php ENDPATH**/ ?>