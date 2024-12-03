<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYGT MA</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;
        }
        #sec_pwd {
            font-size: 24px;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <p id="sec_pwd">{{ $sec_pwd }}</p>
    <button onclick="copyText()">Copy Text</button>

    <script>
        function copyText() {
            const text = document.getElementById('sec_pwd').innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert('Text copied to clipboard!');
            }).catch(err => {
                console.error('Error copying text: ', err);
            });
        }
    </script>
</body>
</html>
