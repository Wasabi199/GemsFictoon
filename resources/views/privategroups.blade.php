<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
    <title>Gem's Fictoon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            top: 2;
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
        a{
            text-decoration: none;
            color: white;
            font-family: Verdana;
            font-weight: bold;
            float: right;
            margin: 20px;
            padding: 10px;
        }

        a:hover {
            color: skyblue;
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
        }
        .join-button:hover, .close-button:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
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
            width: 90vw;
            min-height: 32vh;
            border-radius: 20px;
            border: 3px solid black;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
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
                <a href = "{{ route('community.community') }}">BACK</a>
            </div>
        </div>
        <div class = "container">
            <h4>PRIVATE GROUPS</h4>
            <div class = "story-container">
                <!-- existing public groups-->
                @if ($groups)              
                <div class="grid grid-cols-2 gap-4 p-5 grid-cols-row">
                @foreach ($groups as $group)
                    <div class="p-5 bg-gray-300 border-2 border-black rounded-md text-start">
                        <div>{{$group->name}}</div>
                        <div>{{$group->introduction}}</div>
                        <div>
                            <form method="POST" class="flex justify-end" action="{{route('join.group')}}">
                                @csrf
                                @method('PATCH')
                                <input type="number" hidden name="id" value="{{$group->id}}">
                                <input class="px-4 py-2 text-black border border-black rounded-md cursor-pointer" type="submit" value="Join">
                            </form>
                        </div>
                    </div>
                @endforeach
                </div>
                @else
                <p class = "default-text">You have not joined any private group.</p>
                @endif

                <button type = "button" class = "join-button">CREATE OWN PRIVATE GROUP</button>
                <button type = "button" class = "join-button">JOIN A PRIVATE GROUP</button>
            </div>
        </div>
        
    </section>
</body>
<footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
@props([
    'groups'
])
</html>