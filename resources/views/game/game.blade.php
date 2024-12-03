<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYGT MA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    @media (min-width: 1025px) {
        .container {
            max-width: 2000px !important;
        }
    }
    
    
    /* Responsive adjustments */
    @media only screen and (max-width: 991px) {
        .pyramid-img, .hand-ferrero, .ferrero-logo {
            position: static;
            transform: none;
            margin: 0 auto 20px;
        }
        .form-section {
            width: 100%;
            max-width: none;
            padding: 20px;
        }
        .div_btn {
            justify-content: center;
        }
    }

    /*  */
    body {
        background: url("{{ asset('assets/images/BG.png') }}") no-repeat center center fixed;
        background-size: cover;
        background-position-x: center;
        background-position-y: top;
        color: #fff;
        font-family: Arial, sans-serif;
    }
    .container {
        margin-top: 50px;
        padding: 15px;
    }
    .logo img {
        width: 100px;
        margin-top: 20px;
    }
    .form-section {
        background: rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 510px;
    }

    .form-label {
        color: #fff;
        font-weight: bold;
    }
    .form-control {
        background: rgba(255, 255, 255, 0.9);
        border: none;
        border-radius: 5px;
    }
    .upload-btn {
        background-color: #b28a6a;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .submit-btn {
        background-color: #5c3d2e !important;
        color: #e2cf97 !important;
        border: none;
        padding: 10px 20px;
        font-weight: 600 !important;
        border-radius: 5px;
        font-size:22px !important;
    }

    .pyramid-img {
        width: 450px;
        object-fit: cover;
        position: absolute;
        transform: translate(-62%, -12%);
    }

    .hand-ferrero, .ferrero-logo {
        position: absolute;
        object-fit: contain;
    }

    .hand-ferrero {
        position: absolute;
        transform: translate(-75%, -97%);
        width: 514px !important;
        object-fit: cover;
        z-index: 999;
    }

    .ferrero-logo {
        position: absolute;
        transform: translate(-290%, -374%);
        height: 100px;
        width: 100px;
        object-fit: contain;
    }
    .form-column {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    button:focus{
            background-color: #4f2718 !important;
            color: white !important;
            border-color: #4f2718 !important;
            outline: 0;
            box-shadow: 0 0 0 .25rem #4f27183b !important;
    }
    .form-check-input[type=checkbox] {
        margin-top: 7px;
        width: 35px;
    }
    .form-check-input:checked {
        background-color: #4f2718 !important;
        border-color: #4f2718;
    }
    .form-check-input:focus,
    input:focus,
    button:focus {
        border-color: #4f2718 !important;
        outline: 0;
        box-shadow: 0 0 0 .25rem #4f27183b !important;
    }
    input {
        background-color: #fdf8df !important;
    }
    .input_div {
        position: relative;
    }
    .fake-placeholder {
        position: absolute;
        top: 0;
        left: 10px;
    }
    label {
        color: #4f2718 !important;
    }
    input:focus ~ .fake-placeholder,
    input:not(:placeholder-shown) ~ .fake-placeholder {
        display: none;
    }
    .fake-upload {
        background-color: #e4d4ad !important;
        color: #4f2718 !important;
        text-transform: uppercase !important;
        font-weight: 500 !important;
        border-style: hidden !important;
    }
    .div_btn {
        align-self: center;
    }
    .images_col {
        position: relative;
    }

    /* ipad pro */
    @media only screen and (min-width: 1024px) and (max-width: 1366px) {
        .container {
            margin-top: 150px;
        }
        .form-section {
            max-width: 550px;
        }
        .hand-ferrero{
            transform: translate(-85%, -101%);
        }

        .ferrero-logo {
            transform: translate(-338%, -381%);
        }

        .fake-upload{
            width: 350px !important;
        }

    }


    /* ipad pro */
    @media only screen and (min-width: 1023px) and (max-width: 1024px) { 

        .container {
           transform:translate(0%,50%);
        }
        .form-section {
            max-width: 550px;
        }
        .hand-ferrero{
            transform: translate(-75%, -101%);
        }

        .ferrero-logo {
            transform: translate(-220%, -381%);
        }

        .pyramid-img {
            transform: translate(-49%,-9%);
        }

        .fake-upload{
            width: 350px !important;
        }
        
    }
@media (min-width: 1366px) {
        .form-column {
            align-items: flex-start;
        }
        
        .container {
            margin-top: 150px;
        }
        .form-section {
            max-width: 550px;
        }
        .hand-ferrero{
            transform: translate(-85%, -101%);
        }

        .ferrero-logo {
            transform: translate(-338%, -381%);
        }

        .fake-upload{
            width: 350px !important;
        }
    }

    /* normal tablets */
    @media only screen and (min-width: 768px) and (max-width: 1023px){
        .container {
           transform:translate(0%,50%);
        }
        .form-section {
            max-width: 550px;
            background-color: #fff3cdb0 !important;
        }
        .hand-ferrero{
            transform: translate(-80%, -80%);
        }

        .ferrero-logo {
            transform: translate(250%, -180%);
            height: 100px;
            width: 100px;
        }

        .pyramid-img {
            transform: translate(-54%,12%);
        }

        .form-section{
            transform: translate(0%,50%);
        }

        .fake-upload{
            width: 350px !important;
        }
    }

    /* mobile */
    @media only screen and (max-width: 576px) {
        .form-check-input {
            width: 25px;
        }
        .fake-upload {
            font-size: 0.9rem;
            padding: 8px;
        }
        .submit-btn {
            font-size: 0.9rem;
            padding: 8px;
        }
        .hand-ferrero {
            position: absolute !important;
            transform: translate(-75%, -46%) !important;
            width: 402px !important;
            object-fit: cover;
            z-index: 999;
        }
        .ferrero-logo {
            position: absolute;
            transform: translate(90%, -41%) !important;
            height: 100px !important;
            width: 100px !important;
            object-fit: contain;
        }
        .pyramid-img {
            width: 450px !important;
            object-fit: cover;
            position: absolute;
            transform: translate(-50%, 25%) !important;
        }
        .empty-div{
            /* height: 280px !important; */
        }
        .form-section {
            background-color:#fff3cdb0;
            transform: translate(0%,48%) !important;
        }
        .form-check-input[type=checkbox]{
            height:20px !important;
        }
        
    }
</style>
</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <body> -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0 images_col empty-div">
                <img src="{{ asset('assets/images/ferrero logo.png') }}" alt="Ferrero Logo" class="ferrero-logo">
                <img src="{{ asset('assets/images/hand-ferrero.png') }}" class="hand-ferrero">
                <img src="{{ asset('assets/images/ferrero_pyramid.png') }}" class="img-fluid pyramid-img" alt="Ferrero Pyramid">
            </div>

            <div class="col-lg-6 col-md-12 form-column">
            <div class="form-section">
            <form action="{{ route('customer.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-4 input_div">
            <input type="text" class="form-control" id="name" name="name" placeholder=" " required>
            <label for="name" class="form-label fake-placeholder">{{ __('form.input1') }}</label>
            <small class="error-message text-danger" style="display: none;">Name is required.</small>
        </div>
        <div class="mb-4 input_div">
            <input type="text" class="form-control" id="surname" name="surname" placeholder=" " required>
            <label for="surname" class="form-label fake-placeholder">{{ __('form.input2') }}</label>
            <small class="error-message text-danger" style="display: none;">Surname is required.</small>
        </div>
        <div class="mb-4 input_div">
            <input type="text" class="form-control" id="mobile" name="phone" placeholder=" " required>
            <label for="mobile" class="form-label fake-placeholder">{{ __('form.input3') }}</label>
            <small class="error-message text-danger" style="display: none;">Mobile No. is required.</small>
        </div>
        <div class="mb-4 input_div">
            <input type="text" class="form-control" id="address" name="address" placeholder=" " required>
            <label for="address" class="form-label fake-placeholder">{{ __('form.input4') }}</label>
            <small class="error-message text-danger" style="display: none;">Address is required.</small>
        </div>
        <div class="mb-4 input_div">
            <input type="text" class="form-control" id="receipt" name="receipt_value" placeholder=" " required>
            <label for="receipt" class="form-label fake-placeholder">{{ __('form.input5') }}</label>
            <small class="error-message text-danger" style="display: none;">Receipt No. is required.</small>
        </div>
        <div class="input_div d-flex justify-content-center mb-1">
            <label class="form-label" style="display:none;">Upload Your Receipt</label>
            <input type="file" class="form-control upload-btn" name="receipt" style="display:none;" id="fileInput" accept="image/*" required>
            <button type="button" class="form-control fake-upload" onclick="triggerUpload()">{{ __('form.input6') }}</button>
            <small id="fileError" class="error-message text-danger" style="display: none;">Please upload your receipt image.</small>
        </div>

        <div class="mb-4 d-flex justify-content-center">
            <span class="file-name"></span>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 mb-3 d-flex align-items-center">
                <input class="form-check-input me-2" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                {{ __('form.checkbox') }}
                </label>
                <small class="error-message text-danger" style="display: none;">You must agree to the terms and conditions.</small>
            </div>

            <div class="col-md-6 col-12 text-center div_btn">
                <button type="submit" class="btn submit-btn w-100">{{ __('form.btn') }}</button>
            </div>
        </div>
    </form>
</div>
            </div>
        </div>
    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Uplaod Size
  const fileInput = document.getElementById('fileInput');
    const maxSize = 2 * 1024 * 1024; // 2 MB in bytes

    fileInput.addEventListener('change', function () {
        if (fileInput.files[0] && fileInput.files[0].size > maxSize) {
            alert('The file size exceeds 2 MB. Please upload a smaller file.');
            fileInput.value = ''; // Clear the input
        }
    });
    // End Of Receipt Size 
    
    
    function triggerUpload() {
        document.getElementById("fileInput").click();
    }

  // Event listener to update file name when a file is selected
  document.getElementById("fileInput").addEventListener("change", function(event) {
    const fileName = event.target.files[0] ? event.target.files[0].name : "No file selected";
    document.querySelector(".file-name").textContent = fileName;
  });

//   
function triggerUpload() {
        document.getElementById("fileInput").click();
    }

    function validateForm(event) {
        const fields = document.querySelectorAll('.form-control[required], .form-check-input[required]');
        let valid = true;

        fields.forEach(field => {
            const errorMessage = field.parentElement.querySelector('.error-message');
            if (!field.checkValidity()) {
                errorMessage.style.display = 'block';
                valid = false;
            } else {
                errorMessage.style.display = 'none';
            }
        });

        // Check if file input is empty
        const fileInput = document.getElementById("fileInput");
        const fileError = document.getElementById("fileError");
        if (fileInput.files.length === 0) {
            fileError.style.display = 'block';
            valid = false;
        } else {
            fileError.style.display = 'none';
        }

        if (!valid) {
            event.preventDefault();  // Stop form submission if validation fails
        }
        
        return valid;
    }

    // receipt : 
    const receiptInput = document.getElementById("receipt");

// Add an event listener for the blur event (when input loses focus)
receiptInput.addEventListener("blur", function() {
    // Remove non-numeric characters
    receiptInput.value = receiptInput.value.replace(/[^0-9]/g, '');

    // Clear the field if the length is not exactly 10
    if (receiptInput.value.length !== 10) {
        receiptInput.value = '';
    }
});

// tele :
const teletInput = document.getElementById("mobile");

// Add an event listener for the blur event (when input loses focus)
teletInput.addEventListener("input", function() {
    // Remove non-numeric characters
    teletInput.value = teletInput.value.replace(/[^0-9]/g, '');
});

</script>
</body>
</html>
