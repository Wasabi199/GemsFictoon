<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .desc-box{
            background-image: linear-gradient(darkblue, blue);
            padding: 26px;
            max-width: 50vw;
            min-height: 20vh;
            margin-left: 50px;
            margin-top: 18%;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }
        .gem-photo{
            background-color: black;
            margin: 10px;
            margin-right: 30px;
            border-radius: 20px;
            border: 3px solid black;
            width: 100px;
            height: 100px;
            float: left;
        }
        .info{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            padding: 2px;
            text-decoration: none;
            display: inline-block;
            border-radius: 20px;
            padding: 10px;
            
        }
        .info:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <section class = "page">
        <div class = "navigation-area">
            <div class = "navigation-bar">
                <h1><a href = "#" class = "web-name">GEM'S FICTOON</a></h1>
                <ul>
                    <li><a href = "#" class = "active">HOME</li>
                    <li><a href ="{{route('dashboard')}}">DASHBOARD</a></li>
                    <li><a href = "#">LIBRARY</a></li>
                    <li><a href = "#">ABOUT</a></li>
                    <li><a href = "#">ACCOUNT</a></li>
                </ul>
            </div>
        </div>
        <div class = "container">
            <div class = "desc-box">
                <div class = "gem-photo">
                    <!--img src-->
                </div>
                <h2> HELLO, I AM GEM!</h2>
                <p>
                    description description description description description description 
                    description description description description description description 
                    description description description description description description 
                    description description description description description description 
                    description description description description description description 
                    description description description description description description 
                </p>
                <p>
                    description description description description description description 
                    description description description description description description 
                    description description description description description description 
                </p>
                <button type = "button" class = "info">More info</button>
            </div>
        </div>
    </section>
</body>
</html>
<style>
    h1{
        color: red
    }
</style>