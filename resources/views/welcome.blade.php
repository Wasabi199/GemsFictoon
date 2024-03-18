<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img_srcs/gem.png" type="image/x-icon">
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
            height: 90vh;
            margin: auto;
            padding: 0;
            display: flex;
        }
        .navigation-bar{
            position: fixed;
            float: center;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            background-color: #060270;
            border-bottom: 4px solid black;
            border-top: 4px solid black;
            box-shadow: 1px 1px 8px black;
        }
        h1{
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            display: block;
            margin-left: 25px;
        }
        .nav-left{
            float: left;
        }
        .nav-right{
            float: right;
            margin-right: 20px;
            height: 100%;
        }
        /*Listing*/
        ul.nav-page-list{
            list-style-type: none;
            overflow: hidden;
            display: flex;
            margin-top: 30px;
            margin-bottom: 2px;
            width: 50vw;
            justify-content: space-around;
        }
        li.page-list-item{
            display: inline-block;
            color: white;
            padding-right: 10px;
            text-align: center;
            justify-content: center;
        }
        /*Links*/
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
            text-shadow: 2px 2px 4px blue;
        }
        .container {
            width: 100%;
            margin: auto;
            min-height: 100vh;
        }
        .desc-box{
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 50vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }
        .gem-photo{
            background-color: black;
            margin-top: 10%;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            border: 3px solid black;
            width: 180px;
            height: 180px;
            display: block;
        }
        .more-info-link{
            background-color: black;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            padding: 2px;
            text-decoration: none;
            border-radius: 20px;
            padding: 10px;       
        }
        .more-info-link:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        h2{
            color: black;
            font-family: Verdana;
        }
        h3 {
            color: black;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        p{
            color: black;
            font-family: Verdana;
        }
        footer {
            background-color: #060270;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding-top: 5px;
            padding-bottom: 5px;
            box-shadow: 2px 2px 8px black;
            position: relative;
        }
        .footer-title{
            color: white;
        }
        .footer-text {
            color: white;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <section class = "page">
        
            <div class = "navigation-bar">
                <div class = "nav-left">
                    <h1><a href = "welcome.welcome" class = "web-name">GEM'S FICTOON</a></h1>
                </div>
                <div class = "nav-right">
                    <ul class = "nav-page-list">
                        <li class = "page-list-item"><a href = "{{ route('welcome.welcome') }}" class = "active">HOME</a></li>
                        <li class = "page-list-item"><a href = "{{ route('community.community') }}">COMMUNITY</a></li>
                        <li class = "page-list-item"><a href = "{{ route('library.library') }}">LIBRARY</a></li>
                        <li class = "page-list-item"><a href = "{{ route('about.about') }}" >ABOUT</a></li>
                        <li class = "page-list-item"><a href = "{{ route('notif.notif') }}" >NOTIFICATIONS</a></li>
                        <li class = "page-list-item"><a href = "{{ route('account.account') }}" >ACCOUNT</a></li>
                    </ul>
                </div>
                
            </div>
        
        <div class = "container">
        <img src = "/img_srcs/gem.png" alt = "gem pic" class = "gem-photo">
            <div class = "desc-box">
                <h2> WELCOME TO MY WORLD OF FICTION!</h2>
                <p>
                    Hello, I am GEM! I am a visionary character who owns a library of digital books. 
                    In here, books are not just mere manuscripts; they are treasured gems, each 
                    holding a unique brilliance waiting to be discovered. I am a curator, connecting 
                    readers and authors with written gems that will leave an indelible 
                    mark on their hearts and minds.
                </p>
                <p>
                    My library is also your library! A community where ideas flourish, creativity thrives, 
                    and the magic of storytelling continues to captivate hearts.
                </p>
                <br>
                <a href = "{{ route('about.about') }}" class = "more-info-link">More info<a>
            </div>
        </div>
    </section>
</body>
<footer>
        <h3 class= "footer-title"> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>