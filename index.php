<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gim Bola</title>
    <style>
        .img {
            position: absolute;
            transition: top 0,5s ease;
        }

        .atas {
            width : 100%;
            height : 90%;
        }

        .bawah {
            width : 100%;
            height : 40%;
            position : fixed;
            bottom : 0;
        }

        body {
            background-image: url('tanah.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
<img src="tankbajamusuh.png" alt="tankbaja" width="200" height="200">
    <div class="atas"></div>
    <div class="bawah">
        <img src="peluru.png"id="tendang"
        class="img"width="25px">
        <img src="tankbajaa.png"id="img" 
        class="img"width="500px">
    </div>
</body>
</html>
<script src="main.js?1"></script>