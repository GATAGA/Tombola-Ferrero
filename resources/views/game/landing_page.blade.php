<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYGT MA</title>
    <!-- Add Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">


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

            .first_text,.second_text{
                color: #5c3d2e;
                font-family: 'Cinzel', serif;
                font-weight:700;
                font-size:30px;

            }

            /* lang */
            .row{
                position: relative;
            }

            #lan{
                background-color: transparent;
                border-style: none;
                color: #5c3d2e;
                font-size: 30px;
                font-weight: 600;
                position: absolute;
                top: 0;
                right: 10px;
            }

            #lan option{
                background-color: transparent;
                border-style: none;
                color: #5c3d2e;
                font-size: 30px;
                font-weight: 600;
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
                /* transform: translateX(147px); */
                transform: translate(24%, 5%);
            }

            .ferrero-logo{
                height:150px;
                width: 150px;
                object-fit:contain !important;
            }

            .touch_img{
                height:350px;
                width: 350px;
                object-fit:contain !important;
            }
            
        }

        .toggle-btn {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
            color: #5c3d2e;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 250px;
            height: 80px;
            justify-content: flex-end;
            font-size:26px;
            justify-self: center;
        }

        .toggle-btn img {
            /* width: 40px;
            height: 40px; */
            border-radius: 50%;
            margin-right: 10px;
        }

        .toggle-btn .arrow {
            font-size: 20px;
        }

        /* toggle image */
        .toggle-img{
            height: 115px;
            width: 115px;
            /* transform: translate(-80px, -98px); */
            /* transform: translate(-71%, -86%); */
            position: absolute;
            transform:  translate(-100%, 0%);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .toggle-active{
            background-color: #5c3d2e;
            color: white;
        }

        .toggle-active-img{
            transform: translate(38%, 0%) !important;
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
            height:100vh;
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

        .toggle-btn{
            justify-self:center;
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
                        <div class="toggle-container toggle-mobile" onclick="toggleSwitch(this)">
                            <div class="rules_text">
                                <div class="first_text">{{ __('landing-page.str1') }}</div>
                                <div class="second_text">{{ __('landing-page.str2') }}</div>
                            </div>
                            <div class="toggle-btn" id="toggler"> 
                                <span class="arrow">→</span>    
                                <span class="toggle-text">{{ __('landing-page.str3') }}</span>
                                <img src="{{ asset('assets/images/toggle-img.png') }}" class="toggle-img" id="toggle-img" alt="Ferrero Rocher">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lang">
            <select id="lan">
                <option value="{{ route('lang.switch', ['locale' => 'en']) }}">EN</option>
                <option value="{{ route('lang.switch', ['locale' => 'fr']) }}">FR</option>
                <option value="{{ route('lang.switch', ['locale' => 'ar']) }}">AR</option>
            </select>
            </div>
        </div>
    </div>


    <script>
        function toggleSwitch(element) {
            let image = document.getElementById("toggle-img");
            let toggle = document.getElementById("toggler");
            image.classList.toggle("toggle-active-img");
            toggle.classList.toggle("toggle-active");
            setTimeout(function() {
                window.location.href = "{{ route('game') }}";
            }, 500);
        }

        // multilang
        document.getElementById('lan').addEventListener('change', function () {
            const selectedUrl = this.value;
            if (selectedUrl) {
                window.location.href = selectedUrl; // Redirect to the selected URL
            }
        });
        
</script>

    <!-- Add Bootstrap 5.3 JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>