<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img_srcs/gem.png" type="image/x-icon">
     @vite(['resources/css/app.css', 'resources/js/app.js']) 

    <title>Gem's Fictoon</title>

    <style>
        body{
            width: 100%;
            min-height: 100vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }
        .page{
            width: 100%;
            min-height: 90vh;
            margin: auto;
            padding: 0;
            display: flex;
        }
        
        .navigation-bar {
            position: fixed;
            float: center;
            width: 100%;
            height: 94px;
            margin-left: auto;
            margin-right: auto;
            background-color: #060270;
            border-bottom: 4px solid black;
            border-top: 4px solid black;
            box-shadow: 1px 1px 8px black;
        }
        .nav-left{
            float: left;
        }
        .nav-right{
            float: right;
            margin-right: 20px;
            height: 100%;
        }

        h1 {
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
            margin-top: 20px;
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
        .container-wrapper {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            
        }
        .container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
        }
        .desc-box{
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 50vw;
            margin: auto;
            border-radius: 20px;
            margin-top: 5px;
            display: block;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;

        }
        .user-photo{
            background-color: black;
            margin: 10px;
            margin-right: auto;
            margin-left: auto;
            border-radius: 20px;
            border: 3px solid black;
            width: 130px;
            height: 130px;
        }
        .editprofile-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            justify-content: center;
            padding: 10px;
            width: 10vw;
            text-decoration: none;
            border-radius: 20px;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }

        .editprofile-btn:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        h2{
            color: black;
            font-family: Verdana;
            text-align: center;  
            font-size: 20px;   
            font-weight: bold; 
        }
        h3 {
            color: black;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        .profile-section-name {
            color: black;
            font-family: Verdana;
            text-align: left;
        }
        h4{
            color: black;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        p{
            color: black;
            font-family: Verdana;
            text-align: justify;
        }
        .gnm{
            text-align: left;
        }
        

        .book-cover{
            height: 20vh;
            border-radius: 10px;
        }
        /*footer*/
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
                        <li class = "page-list-item"><a href = "{{ route('welcome.welcome') }}">HOME</a></li>
                        <li class = "page-list-item"><a href = "{{ route('community.community') }}">COMMUNITY</a></li>
                        <li class = "page-list-item"><a href = "{{ route('library.library') }}">LIBRARY</a></li>
                        <li class = "page-list-item"><a href = "{{ route('about.about') }}">ABOUT</a></li>
                        <li class = "page-list-item"><a href = "{{ route('notif.notif') }}"  class = "active">NOTIFICATIONS</a></li>
                        <li class = "page-list-item"><a href = "{{ route('account.account') }}">ACCOUNT</a></li>
                    </ul>
                </div>
                
            </div>
        <div class = "container-wrapper">
            
            <div class = "container">
            <h2>NOTIFICATIONS</h2>
                @foreach (Auth::user()->notifications as $notification)
                <div class = "desc-box">
                        <div>{{$notification->data['message']}}</div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section> 
</body>
<footer>
        <h3 class = "footer-title"> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
@props([
    'books'
])
</html>