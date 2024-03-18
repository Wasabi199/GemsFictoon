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
            min-height: 100vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }
        .page{
            width: 100%;
            min-height: 100vh;
            margin: auto;
            padding: 0;
            display: flex;
        }
        .navigation-bar{
            position: fixed;
            float: center;
            width: 100%;
            height: 90px;
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
        }

        /* texts */
        .g-name {
            font-size: 20px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: flex;
            margin: 20px;
            padding-left: 10px;
        }

        /* buttons */
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
        /* containers */
        .container-wrapper {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            
        }
        .container {
            width: 100%;
            display: block;
            margin: auto;
            margin-top: 10%;
            padding-left: 10%;
            padding-right: 10%;
            font-size: 18px;
        }
    </style>
</head>
<body>

<x-app-layout>
<div class="navigation-bar">
    <div class = "nav-left">
        <div class="g-name">
            <span>{{$chapter->title}}</span>
        </div>
    </div>
    <div class="nav-right">
        <a href="{{route('book.profile',$chapter->book_id)}}" class = "back-btn">
            Back
        </a>
    </div>
</div>
<section class = "page">
    <div class="container-wrapper">
        <div class = "container">
            {!! $chapter->content !!}
        </div>
    </div>
    </section>
    @props([
        'chapter'
    ])
</x-app-layout>
</body>
</html>