<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            display: block;
            align-items: center;
            justify-content: center;
        }
        #banner-area{
            text-align: center;
            -webkit-animation: spin 5s infinite;
            animation: spin 5s infinite;
            animation-delay: 3s;

        }
        @-webkit-keyframes spin{
        from {
            -webkit-transform: rotateY(0deg);
        }
        to {
            -webkit-transform: rotateY(-360deg);
        }
        }
        
        @keyframes spin{
        from {
            -moz-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
        }
        
        to {
            -moz-transform: rotateY(-360deg);
            -ms-transform: rotateY(-360deg);
            transform: rotateY(-360deg);
        }
        }
    </style>
    <title>BANNER</title>
</head>
<body>
    <h1>WHO WANTS TO BE A MILLIONAIRE</h1></br>
    <div id="banner-area">
        <img src="./logo.jpeg" alt="logo" style="border-radius: 50%;">
    </div>
    
</body>
</html>