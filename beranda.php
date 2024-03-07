<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        @keyframes moveText {
            0% { transform: translateX(0); }
            50% { transform: translateX(-20px); }
            100% { transform: translateX(0); }
        }

        h1 {
            animation: moveText 2s infinite;
        }

        /* Optional: Center the text and image */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <center>
        <h1>SELAMAT DATANG DI WEB INPUT DATA PASIEN!</h1>
        <img src="tt.png" alt="" width="300">
    </center>
</body>
</html>
