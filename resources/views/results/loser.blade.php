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

    @media (max-width: 1024px) {
        .ferrero-choclat,.first_text,.second_text,.third_text{
            margin-left: 0px;
        }

        .mobile-div-choclat{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .col-lg-9 {
            flex: 0 0 100%;
            max-width: 100%;
            order: 2 !important;
        }

        .col-lg-3 {
            flex: 0 0 100%;
            max-width: 100%;
            order: 1 !important;
        }
         
    }

    @media (max-width: 575.98px) {
        .ferrero-logo{
            height:80px;
            width: 80px;
            object-fit:contain !important;
        }
        .ferrero-choclat{
            margin-top: 10px;
            height: 200px;
            width: 200px;
        }
        .first_text{
            font-size: 28px;   
        }
        .second_text,.third_text{
            font-size:14px;
        }

        .col-lg-9{
            height: 80vh !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
    }
    

  </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 p-5 text-center">
            <div class="mobile-div-choclat">
            <img src="{{ asset('assets/images/ferrero_choclat.png') }}" alt="Ferrero Logo" class="ferrero-choclat">
            <br>
            <div class="first_text">{{ __('lose.str1') }}</div>
            <br>
            <div class="second_text">{{ __('lose.str2') }}</div>
            <div class="third_text">{{ __('lose.str3') }}</div>
            </div>
        </div>
        <div class="col-12 col-lg-3 p-3 text-end">
            <img src="{{ asset('assets/images/ferrero logo.png') }}" alt="Ferrero Logo" class="ferrero-logo">
        </div>
    </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.onbeforeunload = function() { return "Your work will be lost."; };

  </script>
</body>
</html>
