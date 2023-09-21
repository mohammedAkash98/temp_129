<style>
    .header-font {
        font-family: HeaderFont;
        font-weight: bold;
    }

    .header-font-p {
        font-family: HeaderFont;
        font-size: 20px;
        line-height: 2;
    }

    .pt-6 {
        padding-top: 6rem !important;
    }

    .mt-20 {
        margin-top: 20%;
    }

    .mb-10 {
        margin-bottom: 10%;
    }

    .my-10 {
        margin: 10% auto;
    }

    .w-10 {
        width: 10%;
    }

    .top-25 {
        top: 25% !important;
    }

    .start-25 {
        left: 25% !important;
    }

    .translate-middle-50 {
        transform: translate(-50%, -30%) !important;
    }

    .btn-bg {
        background-color: #ffbf00;
        box-shadow: 0 4px #d58f26;
    }

    .btn-bg:hover,
    .btn-bg:focus,
    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
        background-color: #ffbf00;
        border-color: transparent;
        transform: scale(1.05);
    }

    .course .card:hover,
    .adviser .card:hover,
    .team-members .card:hover {
        transform: scale(1.05);
        border: 1px solid #d58f26;
    }

    .webiner .card:hover {
        transform: scale(1.05);
    }

    .adviser .card .card-img,
    .team-members .card .card-img {
        height: 14rem;
    }

    .card-img-top {
        object-fit: cover;
        height: inherit;
    }

    .card-border {
        border: 2px solid #3a6d23;
    }

    /* navbar */
    .navbar_top {
        z-index: 9999;
    }

    .navbar_top .navbar-nav .nav-item a,
    .navbar_top .navbar-nav .nav-item button {
        font-size: 18px;
        letter-spacing: 1px;
        display: block;
        padding: 10px 15px;
        text-decoration: none;
    }

    .navbar_top .navbar-nav .nav-item a img,
    .navbar_top .navbar-nav .nav-item button img {
        display: block;
        margin: 0 auto 4px;
    }

    .navbar_top.navbar-expand-lg {
        box-shadow: 0px 0px 20px 0px hsla(0, 0%, 0%, 0.25);
    }


    .img-fluid {
        max-width: 25px;
        height: auto;
    }

    .course-video {
        width: fit-content;
    }

    .navbar-bottom-img {
        top: 100%;
        position: absolute;
        /* right: 0%; */
        z-index: 9999;
        min-width: 100%;
    }

    .banner-in {
        background-color: #03ac13;
        height: 90%;
        z-index: 10;
    }

    .banner-in .svg {
        top: 100%;
        z-index: -2;
    }

    /* section banner */
    .banner-in::before {
        content: url("/assets/icon/wave1.svg");
        position: absolute;
        width: 100%;
        top: 99%;
        z-index: -1;
    }

    /* .banner::after {
        content: url("/assets/img/Characters/16.png");
        position: absolute;
        width: 100%;
        height: 50vh;
    } */

    /* line */
    .line {
        width: 150px;
        height: 2px;
        background-color: black;
        margin-block: 4px;
        transform-origin: left;
        animation: menuBtn 400ms ease-in-out alternate infinite;
    }

    .gallery .line {
        background-color: white;
    }

    .line.line-h2 {
        animation-delay: 150ms;
    }

    @keyframes menuBtn {
        0% {
            transform: scaleX(1);
        }

        100% {
            transform: scaleX(0.5);
        }
    }

    .fadeInUp {
        animation: fadeInUp 3s alternate both;
    }

    @keyframes fadeInUp {
        from {
            transform: translate3d(0, 80px, 0)
        }

        to {
            transform: translate3d(0, 0, 0);
            opacity: 10
        }
    }

    /* gallery */
    .translate3d {
        transform: translate3d(0px, 0px, 0px)
    }

    .gallery-item {
        transition: transform .8s ease-in-out;
    }

    .gallery-item:hover {
        transform: rotate(9deg);
    }

    .gallery .card {
        background: transparent;
        box-shadow: none;
    }

    /* carousal */
    .carousel-control-next,
    .carousel-control-prev {
        width: 10%;
    }

    .carousel-control-prev {
        right: 100%;
        left: auto;
    }

    .carousel-control-next {
        left: 100%;
        right: auto;
    }

    /* icon */
    .icon span i {
        font-size: 2rem;
    }

    /* footer */
    .bg-img {
        width: 100%;
        height: 100vh;
        background-image: url("/images/home_footer/foot_5.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    @media screen and (max-width: 768px) {

        .carousel-control-next,
        .carousel-control-prev {
            width: 15%;
        }

        .carousel-control-prev {
            right: auto;
            left: 0;
        }

        .carousel-control-next {
            left: auto;
            right: 0;
        }
    }
</style>
<?php /**PATH C:\xampp\htdocs\epushtiN\temp_129\resources\views/home_page/home_page_css.blade.php ENDPATH**/ ?>