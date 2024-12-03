<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYGT MA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #67492b;
            font-family: 'Arial', sans-serif;
        }
        .login-form {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #582009;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-control {
            border-radius: 30px;
            border: none;
        }
        .btn-primary,.btn-primary:hover {
            width: 100%;
            border-radius: 30px;
            background-color: #eb9c2c;
            border: none;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .pwd_icon{
            height:20px;
            width: 20px;
        }

        .form-control:focus{
            border:0;
            color:black;
            background-color: white;
            outline: 0px;
            box-shadow: none;
        }

        #brand{
            height:80px;
            width:240px;
            object-fit:contain;
        }
        
        .login-form{
            margin-top:50px;
        }

        section .container{
            padding-top: 200px;
        }

        .toggle-sec-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .pwd_sec_icon{
            height:20px;
            width: 20px;
        }
    </style>
</head>
<body>

<section>
<div class="container">
<div class="login-form">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('assets/images/ferrero_logo.svg.png') }}" alt="Eye Icon" class="pwd_icon" id="brand">
    </div>

    <form method="POST" action="{{ url('/GROWTH`MARKETING`PARTENER/login') }}">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        @error('username')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3 position-relative">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <span class="toggle-password" style="cursor: pointer;">
            <img src="{{ asset('assets/images/oeil.png') }}" alt="Eye Icon" class="pwd_icon" id="pwdIcon">
        </span>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3 position-relative">
        <input type="password" class="form-control" name="sec_pwd" id="sec_password" placeholder="Security Password" required>
        <span class="toggle-sec-password" style="cursor: pointer;">
            <img src="{{ asset('assets/images/oeil.png') }}" alt="Eye Icon" class="pwd_sec_icon" id="SecPwdIcon">
        </span>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Login</button>

    @if ($errors->has('error'))
        <div class="mt-2 text-danger">
            {{ $errors->first('error') }}
        </div>
    @endif
</form>





</div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>

<script>
    let passwordField = document.getElementById('password');
    let eyePlace = document.querySelector('.toggle-password');
    let pwdIcon = document.getElementById('pwdIcon'); // Reference to the eye icon

    // Define the URLs for the images
    let eyeOpenURL = "{{ asset('assets/images/oeil.png') }}";
    let eyeClosedURL = "{{ asset('assets/images/oeil2.png') }}";

    eyePlace.addEventListener('click', function() {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            pwdIcon.src = eyeClosedURL; // Change to the 'closed' eye icon
        } else {
            passwordField.type = "password";
            pwdIcon.src = eyeOpenURL; // Change back to the 'open' eye icon
        }
    });


    // Security Pwd
    let SecpasswordField = document.getElementById('sec_password');
    let SecEyePlace = document.querySelector('.toggle-sec-password');
    let pwdSecIcon = document.getElementById('SecPwdIcon'); // Reference to the eye icon

    // Define the URLs for the images
    // let eyeOpenURL = "{{ asset('assets/images/oeil.png') }}";
    // let eyeClosedURL = "{{ asset('assets/images/oeil2.png') }}";

    SecEyePlace.addEventListener('click', function() {
        if (SecpasswordField.type === "password") {
            SecpasswordField.type = "text";
            pwdSecIcon.src = eyeClosedURL; // Change to the 'closed' eye icon
        } else {
            SecpasswordField.type = "password";
            pwdSecIcon.src = eyeOpenURL; // Change back to the 'open' eye icon
        }
    });
</script>




</body>
</html>
