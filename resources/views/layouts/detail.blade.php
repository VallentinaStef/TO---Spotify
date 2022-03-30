<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Detail Buku</title>

    <style>
        .button{
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #000;
                background-color: #fff;
                border: none;
                border-radius: 45px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
        }   
        body{
            font-family: montserrat;
            background-color: rgb(31, 28, 28);
        }
        .container{
                border: 1px solid #ddd;
                display: inline-block;
                padding: 2em;
                font-family: Montserrat;
                background-color: #ddd;
        }
        </style>
</head>
<body>

    <div class="container">
    <h2 class="card-title">Judul : {{$data->JudulLagu}} </h2>
    <p class="card-text">Penyanyi : {{$data->PenciptaLagu}}</p>
    <h5 class=text-center>Lirik</h5>
    <p class="card-text">{{ $data->Lirik }}</p>
     
    <audio controls>
        <source src="{{ asset('lagu/swipe.mp3')}}" type="audio/mpeg">
        </audio> <br><br>
    <a href="/dashboard" class="button">Back</a>
</div>

</body>
</html>