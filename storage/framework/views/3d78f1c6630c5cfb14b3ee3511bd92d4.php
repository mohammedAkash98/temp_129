<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     window.addEventListener('scroll', function() {
    //         if (window.scrollY > 50) {
    //             document.getElementById('navbar_top').classList.add('fixed-top');
    //             // add padding top to show content behind navbar
    //             navbar_height = document.querySelector('.navbar').offsetHeight;
    //             document.body.style.paddingTop = navbar_height + 'px';
    //         } else {
    //             document.getElementById('navbar_top').classList.remove('fixed-top');
    //             // remove padding top from body
    //             document.body.style.paddingTop = '0';
    //         }
    //     });
    // });

    /**
     * PRELOAD
     * 
     * loading will be end after document is loaded
     */

    const preloader = document.querySelector("[data-preaload]");

    window.addEventListener("load", function() {
        preloader.classList.add("loaded");
        document.body.classList.add("loaded");
        // document.getElementById("circle").classList.add("d-none");
    });

</script>
<?php /**PATH C:\xampp\htdocs\epushtiN\temp_129\resources\views/home_page/home_page_script.blade.php ENDPATH**/ ?>