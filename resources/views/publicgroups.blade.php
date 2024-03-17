<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
    <title>Gem's Fictoon</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

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
            min-height: 100vh;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
            display: flex;
            padding-bottom: 10%;
            flex-direction: column;
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
            margin: auto;
            width: 100%;
            background-color: black;
            border-radius: 20px;
            height: 10vh;
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
        a.back-btn{
            text-decoration: none;
            color: white;
            font-family: Verdana;
            font-weight: bold;
            float: right;
            margin: 20px;
            padding: 10px;
        }

        .back-btn:hover {
            color: skyblue;
        }
        .create-btn:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .create-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            padding: 2px;
            text-decoration: none;
            border-radius: 20px;
            padding: 10px; 
            cursor: pointer;
            width: 10vw;
            align-self: center;
        }
        .active{
            color: skyblue;
            font-weight: bold;
        }
        
        .info:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
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
        h4 {
            color: black;
            font-family: Verdana;
            text-align: center;
            font-size: 24px;
        }
        p{
            color: white;
            font-family: Verdana;

        }
        .group-name{
            text-align: left;
            margin: 0px;
            margin-top: 10px;
        }
        .group-intro{
            color: black;
            text-align: left;
            padding: 10px;
            margin: 0;
        }
        .default-text{
            margin-top: 10vh;
            float: center;
        }
        .join-button{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            border-radius: 20px;
            padding: 10px; 
            cursor: pointer;
            display: flex;
            margin-left: auto;
            margin-right: 5px;
        }
        .join-button:hover, .close-button:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .join-btn-form{
            width: 100%;
            
        }
        .container {
            width: 100%;
            min-height: 100vh;
            margin: 20px;
            top: 10%;
            justify-content: center; 
            display: block;
            margin-top: 8%;
            margin-left: auto;
            margin-right: auto;
        }
        .story-container{
            background-image: linear-gradient(darkblue, blue);
            margin: 5px;
            padding: 5px;
            width: 80vw;
            min-height: 32vh;
            border-radius: 20px;
            border: 3px solid black;
            margin-left: auto;
            margin-right: auto;
            
        }
        .group-boxes{
            background-color: lightgray;
            margin: 15px;
            padding: 15px;
            width: 30vw;
            height: 18vh;
            border-radius: 20px;
            border: 3px solid black;
            display: inline-block;
            vertical-align: top;
            margin-left: 69px;
        }
        
        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            margin-top: auto;
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
                <a href = "{{ route('community.community') }}" class = "back-btn">BACK</a>
            </div>
        </div>
        <div class = "container">
            <h4>PUBLIC GROUPS</h4>
            <div class = " story-container">
                @if ($groups)              
                <div class="group-container">
                @foreach ($groups as $group)
                    <div class="group-boxes">
                        <h4 class = "group-name">{{$group->name}} </h4>
                        <p class = "group-intro">{{$group->introduction}}</h4>
                        
                            <form method="POST" class = "join-btn-form" action="{{route('join.group')}}">
                                @csrf
                                @method('PATCH')
                                <input type="number" hidden name="id" value="{{$group->id}}">
                                <input class="join-button" type="submit" value="Join">
                            </form>
                        
                    </div>
                @endforeach
                </div>
                @else
                <p class = "default-text">no data.</p>
                @endif

                
            </div>
            
        </div>
        <a href = "{{ route ('createagroup') }}" class = "create-btn">CREATE A GROUP</a>
        
    </section>
</body>
<!-- <footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer> -->
@props([
    'groups'
])
</html>