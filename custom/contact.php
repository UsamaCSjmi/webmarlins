<?php 
include "./src/head.php";
?>
    <div class="site-wrapper w-100">

    <?php 
        include "./src/header.php";
    ?>     





        <section class="about-banner-section w-100 center-flexbox col-flexbox">
            <img src="./assets/images/about.jpg" alt="About Us" class="about-background">
            <h1>Contact Us</h1>
            <div class="banner-links center-flexbox">
                <a href="./" class="previous-link">Home</a>
                <p class="this-page">Contact Us</p>
            </div>
        </section>


        <div class="main-site-content w-100">
            
            <section class="services-section grid-1-lg grid-1-md grid-1-sm w-100">                
                <div class="main-heading w-100">
                    <h5 class="small-heading">Business</h5>
                    <h4 class="mid-heading">Find the Perfect Solution for Your Business</h4>
                    <p class="grey-para">
                        Lorem Ipsum ogravida nibh vel velit auctor alinean sollicitudi orem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh porttitor aliquam ex est
                    </p>
                </div>
               <img src="./assets/images/background7.jpg" class="w-100" alt="background">
            </section>
            
            
            <section class="grid-2-lg grid-1-md grid-1-sm">
                
                <section class="contact-info">
                    <div class="main-heading w-100" style="text-align: left;">
                        <h5 class="small-heading">GET IN TOUCH</h5>
                        <h4 class="mid-heading">Contact Us</h4>
                        <p class="grey-para w-80" >
                            I have worls-class, flexible support via live chat, email and hone. I guarantee that you'll be able to have any issue resolved within 24 hours.
                        </p>
                    </div>
                    <div class="main-heading w-100" style="text-align: left;">
                        <h5 class="small-heading">Phone:</h5>
                        <a href="tel:+919560518618" class="grey-para">+91 - 95605 18618</a>
                    </div>
                    <div class="main-heading w-100" style="text-align: left;">
                        <h5 class="small-heading">Send Email:</h5>
                        <a href="mailto:contact@webmarlins.com" class="grey-para">contact@webmarlins.com</a>
                    </div>
                    <div class="main-heading w-100" style="text-align: left;">
                        <h5 class="small-heading">Address:</h5>
                        <p class="grey-para">
                            Paryavaran Complex, B - 77/3,<br>
                            IGNOU Main Rd, Sainik Farm,<br>
                            New Delhi, Delhi 110030
                            </p>
                    </div>
                </section>
                
                <section class="cloud-background contact-container services-section w-100 col-flexbox">
                    <div class="main-heading w-100" style="text-align: left;">
                        <h4 class="mid-heading" >Drop Us a Line</h4>
                        <p class="grey-para">Programs provi patient peace mind when option.</p>
                    </div>
                    <form action="#" method="POST" class="contact-form w-100">
                        <div class="grid-2-lg grid-1-md grid-1-sm">
                            <input type="text" id="name" placeholder="Name*" required>
                            <input type="email" id="email" placeholder="Email*" required>
                        </div>
                        <div class="grid-2-lg grid-1-md grid-1-sm">
                            <input type="text" id="website" placeholder="Website">
                            <!-- <input type="text" id="phone" placeholder="Phone"> -->
                            <select name="sevice" id="service">
                                <option>Select</option>
                                <option value="seo-services">SEO</option>
                                <option value="ppc-services">PPC</option>
                                <option value="social-media-services">Social Media Marketing</option>
                                <option value="web deignining">Web Designing</option>
                                <option value="web development">Web Development</option>
                                <option value="email marketing">Email Marketing</option>
                                <option value="content writing">Content Writing</option>
                            </select>
                        </div>
                        <div class="grid-1-lg grid-1-md grid-1-sm">
                            <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <button type="button" onclick="send_contact()" class="button secondary-button">SEND MESSAGE</button>
                        <p id="final-msg" ></p>
                    </form>
                
                </section>
            </section>
            
        </div>
        
        <section class="services-section grid-1-lg grid-1-md grid-1-sm w-100">                
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14023.393561058225!2d77.2048113!3d28.5142088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce179ef7bc3dd%3A0xddded4208b0de778!2sWeb%20Marlins!5e0!3m2!1sen!2sin!4v1686058080968!5m2!1sen!2sin" width="100%" height="450" style="border:0;margin-top: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
        </section>
                    
     
      
    <?php 
        include "./src/footer.php";
    ?>     

    </div>
  
    <?php 
        include "./src/foot.php";
    ?>     