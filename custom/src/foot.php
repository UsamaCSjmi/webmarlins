<div class="bubbles_wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>
    <div onclick="scrollToTop()" class="scroll-to-top center-flexbox">
        <img src = "assets/images/scroll-to-top.svg"/>
    </div>
    <div class="whatsapp center-flexbox">
        <a href="https://api.whatsapp.com/send/?phone=919560518618" class="w-100 center-flexbox">
            <img src="./assets/whatsapp.png" alt="WhatsApp">
        </a>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.js"></script>
    <script type="text/javascript" src="./assets/js/index.js"></script>
    <script type="text/javascript" src="./assets/js/owl.carousel.min.js"></script>
    <script>
        $('#slider').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,

            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
        $('#reviews-line').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            autoplay:true,
            
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    <script type="text/javascript" src="./assets/js/font_animation.js"></script>
</body>
</html>