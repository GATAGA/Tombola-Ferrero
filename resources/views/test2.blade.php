<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYGT MA</title>
    <!-- Add Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @font-face {
                font-family: 'Cinzel';
                src: url('/assets/fonts/Cinzel.regular.otf') format('opentype');
                font-weight: 500;
                font-style: normal;
            }

            @font-face {
                font-family: 'GE Elegant';
                src: url('/assets/fonts/GE Elegant Regular.otf') format('opentype');
                font-weight: 700;
                font-style: normal;
            }

            body{
                background: url("{{ asset('assets/images/BG.png') }}") no-repeat center center fixed;
                background-size: cover;
                background-position-x: center;
                background-position-y: top;
            }

            .first_text{
                color: #5c3d2e;
                font-family: 'Cinzel', serif;
                font-weight:700;
                font-size:30px;

            }

            .second_text{
                font-weight:700;
                font-size:40px;
            }

            .third_text,.fourth_text,.second_text{
                color: #5c3d2e;
                font-family: 'Cinzel', serif;
            }

            .third_text{
                color: #5c3d2e;
                font-family: 'Cinzel', serif;
                font-weight:700;
                font-size:25px;
            }

        @media (min-width: 1025px) {

            .col-lg-5{
                padding-left:0px;
            }

            .container {
                max-width: 2000px;
            }

            .col-lg-7{
                padding-left: 0px;
                padding-right: 0px;
            }

            .hand-ferrero{
                height: 300px;
                width: 80%;
                object-fit:cover;
            }

            .pyramid-img{
                /* height: 600px; */
                width: 80%;
                object-fit:cover;
                transform: translateX(147px);
            }

            .ferrero-logo{
                height:150px;
                width: 150px;
                object-fit:contain !important;
            }

            .touch_img{
                /* height:350px; */
                width: 350px;
                object-fit:contain !important;
            }
            /* Desktop version */
            .hand-ferrero {
                height: 300px;
                width: 80%;
                object-fit: cover;
            }

            .pyramid-img {
                width: 80%;
                object-fit: cover;
                transform: translateX(30%);
            }

            .imgs-div{
                margin-top: 6%;
            }

            .touch_img{
                margin-top: 2%;
            }

            .text-toggle-div{
                padding-top: 3%;
            }

            .first_text{
                font-size: 35px;
            }

            .second_text {
                font-weight: 700;
                font-size: 48px;
                width: 17%;
                background-color: red;
                background-color: #5c3d2e;
                color: #dfcb93;
                /* align-self: center; */
                justify-self: center;
                border-radius: 15px;
            }

            .third_text {
                color: #5c3d2e;
                font-family: 'Cinzel', serif;
                font-weight: 700;
                font-size: 30px;
            }

            .fourth_text{
                font-size: 22px;
            }
        }

        /* play now text */
        .toggle-text{
            margin-left: 10px;
        }

        .mobile-pyramid,.mobile-hand{
            display:none;
        }

        /* for ipad pro */
        @media (max-width: 1024px) {
        .col-lg-5, .col-lg-7 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-lg-7{
            height: 95vh;
        }

        .col-lg-5{
            position: absolute;
            width: 100%;
        }

        .touch_img{
            width: 500px;
        }

        .ferrero-logo{
            height: 200px;
        }

        .pyramid-img{
            transform: translate(14%, 8%);
            width: 718px;
        }

        .hand-ferrero{
            width: 660px;
            transform: translate(-6%, 32%);
            position: relative;
            z-index:-1;
        }

        .col-flex{
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .text-toggle-div{
            position: relative;
        }

        .first_text{
            font-size:40px;
        }
        
        .second_text{
            font-weight: 700;
            font-size: 48px;
            width: 13%;
            justify-self: center;
            background-color: #5c3d2e;
            color: #dfcb93;
            border-radius: 13%;
        }

        .third_text{
            color: #5c3d2e;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 34px;
        }

        .fourth_text{
            font-size: 18px;
        }
    
    }

            /* for tablets */
    @media (max-width: 1023px) {
        .col-lg-5{
                display: none !important;
        }

        .pyramid-hand-mobile{
            position: relative;
            z-index: -1;
            transform: translateY(-29%);
        }

        .mobile-pyramid, .mobile-hand {
            display: block;
        }

        .col-lg-7{
            height:100vh;
        }

        .col-lg-5{
            position: absolute;
            width: 90%;
        }

        .touch_img{
            width: 500px;
        }

        .ferrero-logo{
            height: 200px;
        }

        /* .pyramid-img{
            transform: translate(16%, 22%);
            width: 518px;
        }

        .hand-ferrero{
            width: 540px;
            transform: translate(-11%, 41%);
        } */

        .col-flex{
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .mobile-hand{
            width: 600px;
            transform: translate(-20%, -54%);
        }

        .mobile-pyramid{
            position: absolute;
            width: 550px;
            transform: translate(11%, -47%);
        } 
    }

    /* mobile */
    @media only screen and (max-width: 576px) {
        .col-lg-5{
                display: none !important;
        }

        .pyramid-hand-mobile{
            position: relative;
            transform: translateY(-29%);
        }

        .col-lg-7{
            height:100vh;
        }

        .col-lg-5{
            width: 90%;
        }

        .touch_img{
            width: 80%;
        }

        .ferrero-logo{
            height: 150px;
        }

        .col-flex{
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .mobile-hand{
            width: 93%;
            transform: translate(-20%, -54%);
        }

        .mobile-pyramid{
            width: 90%;
            position: absolute;
            transform: translate(7%, -44%);
        }

        .toggle-mobile{
            height:162px;
        }

        .first_text, .second_text {
            font-size: 25px;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Left Column (5 columns on medium and above, 12 columns on small screens) -->
            <div class="col-lg-5 col-12 hand-col">
                <img src="{{ asset('assets/images/hand-ferrero.png') }}" class="hand-ferrero">
                <img src="{{ asset('assets/images/ferrero_pyramid.png') }}" class="img-fluid pyramid-img" alt="Ferrero Pyramid">
            </div>

            <!-- Right Column (7 columns on medium and above, 12 columns on small screens) -->
            <div class="col-lg-7 col-12">
                <div class="p-3 text-center col-flex">
                    <div class="imgs-div">
                        <img src="{{ asset('assets/images/ferrero logo.png') }}" alt="Ferrero Logo" class="ferrero-logo">
                        <div class="golden_touch_img">
                            <img src="{{ asset('assets/images/Golden Touch.png') }}" class="touch_img">
                        </div>
                    </div>

                    <div class="pyramid-hand-mobile">
                        <img src="{{ asset('assets/images/hand-ferrero.png') }}" alt="Ferrero Hand" class="mobile-hand">
                        <img src="{{ asset('assets/images/ferrero_pyramid.png') }}" alt="Ferrero Pyramid" class="mobile-pyramid">
                    </div>

                    <div class="text-toggle-div">
                        <div class="first_text">{{ __('end.str1') }}</div>
                        <div class="second_text">80</div>
                        <div class="third_text">{{ __('end.str2') }}</div>
                        <div class="fourth_text">{{ __('end.str3') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Bootstrap 5.3 JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>