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
            wwidth: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            display: flex;
            padding-bottom: 20%;
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
            min-height: 20vh;
            margin: 20px;
            justify-content: center; 
            text-align: center;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }
        .container2 {
            width: 100%;
            min-height: 20vh;
            margin: 20px;
            justify-content: center; 
            text-align: center;
            float: center;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }
        .ques-box{
            background-image: linear-gradient(darkblue, blue);
            margin: 5px;
            padding: 20px;
            width: 70vw;
            min-height: 18vh;
            border-radius: 20px;
            border: 3px solid black;
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            
        } 
        .con-container {
            width: 100%;
            min-height: 100vh;
            margin: 20px;
            justify-content: center; 
        }
        hr{
            border: 1px solid gray;
        }
        .dev-box{
            background-image: linear-gradient(darkblue, blue);
            margin: 5px;
            padding: 5px;
            width: 30vw;
            height: 18vh;
            border-radius: 20px;
            border: 3px solid black;
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
            text-align: center;
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
        .question{
            display: flex;
            padding-left: 20px;
        }
        ol{
            font-family: Verdana;
            font-size: 16px;
            list-style-type: disc;
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }
        p{
            color: white;
            font-family: Verdana;
        }
        .answer{
            text-align: justify;
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
        <div class = "con-container">
            <br><br><br>
            <h2 class = "some-title">FAQs</h2>
            <div class = "container">
                <br><br><br>
                
                <div class = "ques-box">
                    <h4 class = "question">WHAT IS GEM'S FICTOON?</h4>
                    <ol>
                        <li class = "answer">Gem's Fictoon is a web and mobile digital library featuring an original fictional
                            character of ours.
                        </li>
                    </ol>
                    <br>
                    <h4 class = "question">WHY "GEM" OF ALL NAMES?</h4>
                    <ol>
                        <li class = "answer">We believe that every writing of an author is a treasured gem; meaning, well-made,
                            eye-catching, and valuable.
                        </li>
                    </ol>
                    <br>
                    <h4 class = "question">WHY DID YOU COME UP OF THIS TYPE OF PROJECT?</h4>
                    <ol>
                        <li class = "answer">There are so many social media platforms that authors can post their works to. However, 
                            we cannot assure that they will reach their target readers. As for the real-life 
                            experiences of our known amateur authors, they feel a little discouraged at times whenever 
                            they encounter unsafe environment where their works are unfairly unappreciated. With this 
                            project of ours, we aim to provide a safer and gentle community for those who share the same 
                            interests.
                        </li>
                    </ol>
                </div>
            </div>
            <hr>
            <h2 class = "some-title">DEVELOPERS</h2>
            <div class = "container">
                <div class = "dev-box">
                    <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
                    <h2>JOPET UMALI</h2>
                    <h4>Project Manager</h4>
                </div>
                <div class = "dev-box">
                    <img src = "img_srcs/jlr.jpg" alt = "dev pic" class = "dev-photo">
                    <h2>JIANNE ROSAL</h2>
                    <h4>Frontend Developer</h4>
                </div>
                <div class = "dev-box">
                    <img src = "img_srcs/lmbp.jpg" alt = "dev pic" class = "dev-photo">
                    <h2>LARA MAXINE PALMA</h2>
                    <h4>UI/UX Designer</h4>
                </div>
            </div>
            <div class = "container2">
                <div class = "dev-box">
                    <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
                    <h2>MARCO GABRIEL ASIA</h2>
                    <h4>Web Developer</h4>
                </div>
                <div class = "dev-box">
                        <img src = "img_srcs/default-img.jpg" alt = "dev pic" class = "dev-photo">
                        <h2>LANCH CABUANG</h2>
                        <h4>Mobile App Developer</h4>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>