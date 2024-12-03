<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AYGT MA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        background: url('/assets/images/BG.png') no-repeat center center;
        background-size: cover;
        color: #5c3d2e;
        text-align: center;
        font-family: Arial, sans-serif;
        height:80vh;
    }
    h2 {
        margin-top: 20px;
        font-weight: bold;
    }
    .game-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 50px;
        /* padding: 20px; */
    }
    .game-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        /* margin: 20px auto; */
        margin-top:40px;
        max-width: 600px;
    }
    .ball {
        cursor: pointer;
        transition: transform 0.2s;
        height: 125px;
        width: 125px;
        object-fit: contain;
    }
    .ball:hover {
        transform: scale(1.1);
    }
    .tap-text {
        font-size: 1.2rem;
        margin-top: 15px;
    }

    .ferrero-logo{
        height: 100px;
        width: 100px;
        object-fit: contain;
    }

    .logo-container{
        display:flex;
        justify-content:end;
        margin-top:50px !important;
    }
    
    .first_text{
        color: #5c3d2e;
        font-weight:500;
        font-size:23px;
    }
    
    .second_text{
        color: #5c3d2e;
        font-weight:600;
        font-size:37px;
    }

    .third_text{
        color: #5c3d2e;
        font-weight:600;
        font-size:26px;
    }

    /*  */
    @media only screen and (min-width: 576px) and (max-width: 1024px) {
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

    .first_text{
        color: #5c3d2e;
        font-weight:500;
        font-size:19px;
    }
    
    .second_text{
        color: #5c3d2e;
        font-weight:600;
        font-size:30px;
    }

    .third_text{
        color: #5c3d2e;
        font-weight:600;
        font-size:21px;
    }
     }

    /* Responsive Design for screens 576px and smaller */
    @media only screen and (max-width: 576px) {
        h2 {
            font-size: 1.5rem;
        }
        .tap-text {
            font-size: 1rem;
        }
        .game-container {
            align-items: center;
            width: 75%;
        }
        .game-grid {
            grid-template-columns: repeat(3, 1fr); /* Adjusting to two columns for small screens */
            gap: 10px;
            max-width: 90%;
        }
        .ball {
            height: 12vh;
            width: 21vw;
            object-fit: cover;
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
            height: 10vh;
        }

        .first_text{
        color: #5c3d2e;
        font-weight:500;
        font-size:19px;
    }
    
    .second_text{
        color: #5c3d2e;
        font-weight:600;
        font-size:25px;
    }

    .third_text{
        color: #5c3d2e;
        font-weight:600;
        font-size:21px;
    }
    }
</style>

</head>
<body>
<div class="logo-container container">
    <img src="{{ asset('assets/images/ferrero logo.png') }}" alt="Ferrero Logo" class="ferrero-logo">
</div>
<div class="game-container">
    <div style="line-height: 1.7rem;">
        <span class="first_text">{{ __('game-page.str1') }}</span><br>
        <span class="second_text">{{ __('game-page.str2') }}</span><br>
        <span class="third_text">{{ __('game-page.str3') }}</span>
    </div>
    <div class="game-grid">
        @for ($i = 1; $i <= 12; $i++)
            <img src="/assets/images/ferrero_choclat.png" alt="Ferrero Rocher" class="ball dgg" onclick="selectBall({{ $i }})">
        @endfor
    </div>
    <p class="tap-text">{{ __('game-page.str4') }}</p>
</div>

<!-- Hidden form to submit the selected number -->
<form id="game-form" method="POST" action="{{ route('validate-guess') }}">
    @csrf
    <input type="hidden" id="selected_number" name="selected_number" value="">
    <button type="submit" style="display: none;">Submit</button>
</form>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function selectBall(number) {
        // Set the value of the hidden input field to the selected number
        document.getElementById('selected_number').value = number;

        // Submit the form
        document.getElementById('game-form').submit();
    }
</script>

</body>
</html>
