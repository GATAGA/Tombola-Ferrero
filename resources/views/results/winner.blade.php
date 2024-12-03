<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AYGT MA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @font-face {
        font-family: 'Cinzel';
        src: url('/assets/fonts/Cinzel Medium.otf') format('opentype');
        font-weight: 500;
        font-style: normal;
    }

    @font-face {
        font-family: 'GE Elegant';
        src: url('/assets/fonts/GE Elegant Regular.otf') format('opentype');
        font-weight: 700;
        font-style: normal;
    }


    body {
        background: url("{{ asset('assets/images/BG.png') }}") no-repeat center center fixed;
        background-size: cover;
        background-position-x: center;
        background-position-y: top;
        color: #fff;
        font-family: Arial, sans-serif;
    }

    .ferrero-logo{
        height:150px;
        width: 150px;
        object-fit:contain !important;
    }

    .ferrero-choclat{
        height: 300px;
        width: 300px;
        object-fit: contain;
        margin-top: 180px;
    }

    .first_text{
        font-family: 'GE Elegant', serif;
        color: #4f2718;
        font-size: 35px;
    }

    .second_text,.third_text{
        font-size:22px;
        color:#4f2718;
        font-weight:500;
    }

    .ferrero-choclat,.first_text,.second_text,.third_text{
        margin-left: 270px;
    }

    .hand-ferrero{
        height: 300px;
        width: 300px;
        object-fit: cover;
    }

    .text1,.text2,.text3,.text4,.text5{
        color: #4f2718;
    }

    .text3,.text5{
        color: #dfcb93;
        background-color: #4f2718;
        border-radius: 15px;
    }

    .pyramid-ferrero{
        display: none;
    }

    @media (min-width: 1025px) {

        .container {
            max-width: 1700px !important;
        }

        .row{
            height: 100vh;
        }

        .hand-ferrero {
            height: 600px;
            width: 500px;
            object-fit: cover;
            transform: translate(12%, 22%);
        }

        .text1{
            font-size:60px;
            font-weight:600;
            line-height: 60px;
        }

        .text2{
            font-size:47px;
            font-weight:600;
            line-height: 60px;
        }

        .text3{
            font-size:40px;
            font-weight:600;
            /* line-height: 40px; */
            padding-left:30px;
            padding-right:30px;
            margin-top:30px;
            justify-self: center;
        }

        .text4{
            margin-top:80px;
            font-size:30px;
            font-weight:600;
        }

        .text5{
            width:60%;
            justify-self: center;
            margin-top:30px;
            font-size:20px;
            padding: 10px 30px;
        }
    }

    /* for ipad pro */
    @media (max-width: 1024px) {
        .col-lg-4{
            display: none;
        }

        .col-lg-8 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-lg-8{
            height:100vh;
        }

        .ferrero-logo {
            height: 250px;
            width: 250px;
            object-fit: contain !important;
            justify-self: center;
        }

        .pyramid-ferrero{
            display: block;
            margin-top: 20px;
            height: 600px;
            width: 600px;
            object-fit: cover;
            justify-self: center;
        }

        .text1{
            margin-top: 50px;
            font-size:60px;
            font-weight:500;
            line-height: 60px;
        }

        .text2{
            font-size:47px;
            font-weight:500;
            line-height: 60px;
        }

        .text3{
            font-size:40px;
            font-weight:500;
            /* line-height: 40px; */
            padding-left:30px;
            padding-right:30px;
            margin-top:30px;
            justify-self: center;
        }

        .text4{
            margin-top:0px !important;
            font-size:30px;
            font-weight:500;
        }

        .text5{
            width:80%;
            justify-self: center;
            margin-top:30px;
            font-size:20px;
            padding: 10px 30px;
        }

        .text-end{
            text-align : center !important;
        }
    }

    /* for tablets */
    @media (max-width: 1023px) {
        .col-lg-4{
            display: none;
        }

        .col-lg-8 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-lg-8{
            height:100vh;
        }

        .ferrero-logo {
            height: 200px;
            width: 200px;
            object-fit: contain !important;
            justify-self: center;
        }

        .pyramid-ferrero{
            display: block;
            margin-top: 20px;
            height: 500px;
            width: 500px;
            object-fit: cover;
            justify-self: center;
        }

        .text1{
            margin-top: 50px;
            font-size:60px;
            font-weight:500;
            line-height: 60px;
        }

        .text2{
            font-size:47px;
            font-weight:500;
            line-height: 60px;
        }

        .text3{
            font-size: 34px;
            font-weight: 500;
            line-height: 59px;
            padding-left: 30px;
            padding-right: 30px;
            margin-top: 30px;
            justify-self: center;
        }

        .text4{
            margin-top:0px !important;
            font-size:30px;
            font-weight:500;
        }

        .text5{
            width:90%;
            justify-self: center;
            margin-top:30px;
            font-size:20px;
            padding: 10px 30px;
        }

        .text-end{
            text-align : center !important;
        }
    }

    /* mobile */
    @media only screen and (max-width: 576px) {
        .col-lg-4{
            display: none;
        }

        .col-lg-8 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-lg-8{
            height:100vh;
        }

        .ferrero-logo {
            height: 150px;
            width: 150px;
            object-fit: contain !important;
            justify-self: center;
        }

        .pyramid-ferrero{
            display: block;
            margin-top: 20px;
            height: 400px;
            width: 80%;
            object-fit: cover;
            justify-self: center;
        }

        .text1{
            margin-top: 30px;
            font-size: 215%;
            font-weight:500;
            line-height: 60px;
        }

        .text2{
            font-size:180%;
            font-weight:500;
            line-height: 20px;
        }

        .text3{
            font-size: 18px;
            font-weight: 500;
            line-height: 20px;
            padding-left: 10px;
            padding-right: 10px;
            margin-top: 30px;
            justify-self: center;
            border-radius: 5px !important;
            padding-top: 5px;
            padding-bottom: 7px;
        }

        .text4{
            margin-top:-8px !important;
            font-size:14px;
            font-weight:500;
        }

        .text5{
            width:90%;
            justify-self: center;
            margin-top:30px;
            font-size:13px;
            padding: 10px 0px;
            border-radius: 5px !important;
        }

        .text-end{
            text-align : center !important;
        }
    }

  </style>
</head>
<body>

<div class="container">
        <div class="row">
            <!-- First column: 4 units wide -->
            <div class="col-lg-4">
                <img src="{{ asset('assets/images/winner-pyramid.png') }}" class="hand-ferrero">
            </div>
            <!-- Second column: 8 units wide -->
            <div class="col-12 col-lg-8">
                <div class="logo-div text-end pt-2">
                    <img src="{{ asset('assets/images/ferrero logo.png') }}" alt="Ferrero Logo" class="ferrero-logo">
                    <div class="text1 text-center">{{ __('win.str1') }}</div>
                    <div class="text2 text-center">{{ __('win.str2') }}</div>
                    <div class="text3 text-center">{{ __('win.str3') }}</div>
                    <img src="{{ asset('assets/images/winner-pyramid.png') }}" class="pyramid-ferrero">
                    <div class="text4 text-center">{{ __('win.str4') }}</div>
                    <div class="text5 text-center">AFTER VERIFYING THE INFORMATION YOU PROVIDED WE WILL CONTACT YOU WITHIN 3 WORKING BUSINESS DAYS TO ARRANGE THE DELIVERY OF YOUR PRIZE</div>
                </div>
            </div>
        </div>
    </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
