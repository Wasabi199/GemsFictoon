<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
    <title>Gem's Fictoon</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }
        .page{
            width: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            display: flex;
        }
        .navigation-area{
            height: 100px;
            width: 100%;
            padding: 2px;
            margin: 2px;
            position: fixed;
        }
        .navigation-bar{
            position: fixed;
            top: 2;
            margin: auto;
            width: 100%;
            background-color: black;
            border-radius: 20px;
        }
        h1{
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
        }
        ul{
            list-style-type: none;
            margin-top: 2%;
            margin-bottom: 2%;
            overflow: hidden;
            padding-left: 42%;
        }
        li{
            float: left;
            color: white;
            padding-right: 10px;
            text-align: center;
            justify-content: center;
        }
        a{
            text-decoration: none;
            color: white;
            font-family: Verdana;
        }
        li a:hover{
            color: lightblue;
            font-weight: bold;
        }
        li a{    
            padding: 6px;
        }
        .web-name:hover {
            color: skyblue;
        }
        .active{
            color: skyblue;
            font-weight: bold;
        }
        .container {
            width: 100%;
            margin: auto;
            min-height: 100vh;
            
        }
        .dev-box{
            background-image: linear-gradient(darkblue, blue);
            padding: 20px;
            max-width: 30vw;
            max-height: 24vh;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
            display: block;
        }
        .dev-photo{
            background-color: black;
            margin: 10px;
            margin-right: 30px;
            border-radius: 20px;
            border: 3px solid black;
            width: 100px;
            height: 100px;
            float: left;
        }
        h2{
            color: white;
            font-family: Verdana;
        }
        h3 {
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        h4{
            color: white;
            font-family: Verdana;
            text-align: left;
            font-size: 18px;
        }
        .some-title{
            text-align: center;
            margin-top: 5%;
            font-size: 30px;
            color: black;
        }
        h3 {
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        p{
            color: white;
            font-family: Verdana;
        }
        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer-text {
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <section class = "page">
        <div class = "navigation-area">
            <div class = "navigation-bar">
                <h1><a href = "{{ route('welcome.welcome') }}" class = "web-name">GEM'S FICTOON</a></h1>
                <ul>
                    <li><a href = "{{ route('welcome.welcome') }}">HOME</a></li>
                    <li><a href = "{{ route('community.community') }}">COMMUNITY</a></li>
                    <li><a href = "{{ route('library.library') }}">LIBRARY</a></li>
                    <li><a href = "{{ route('about.about') }}" class = "active">ABOUT</a></li>
                    <li><a href = "{{ route('account.account') }}">ACCOUNT</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('LOG OUT') }}
                        </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class = "container">
            <br><br><br>
        <h2 class = "some-title">DEVELOPERS</h2>
        <div class = "dev-box">
            <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
            <h2>JOPET UMALI</h2>
            <h4>Project Manager</h4>
        </div>
        <br>
        <div class = "dev-box">
            <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
            <h2>JIANNE ROSAL</h2>
            <h4>Frontend Developer</h4>
        </div>
        <br>
        <div class = "dev-box">
            <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
            <h2>LARA MAXINE PALMA</h2>
            <h4>UI/UX Designer</h4>
        </div>
        <br>
        <div class = "dev-box">
            <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
            <h2>MARCO GABRIEL ASIA</h2>
            <h4>Web Developer</h4>
        </div>
        <br>
        <div class = "dev-box">
            <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
            <h2>LANCH CABUANG</h2>
            <h4>Mobile App Developer</h4>
        </div>
        <br><br><br>
        <hr>
    </section>
</body>
<footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>