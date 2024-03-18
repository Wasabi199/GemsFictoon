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
            min-height: 150vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }
        .page{
            width: 100%;
            min-height: 160vh;
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
        .nav-left{
            float: left;
        }
        .nav-right{
            float: right;
            margin-right: 20px;
            height: 100%;
        }

        /* texts */
        .g-name {
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            margin-top: 25%;
            float: left;
            margin: 20px;
            padding-left: 10px;
        }
        .grp-name{
            font-size: 20px;
            color: black;
            font-family: Verdana;
            font-weight: bolder;
            text-align: center;
        }
        .intro{
            font-size: 16px;
            color: black;
            font-family: Verdana;
            text-align: center;
        }
        .post-text{
            font-size: 14px;
            color: black;
            font-family: Verdana;
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
        .create-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            justify-content: center;
            padding: 5px;
            width: 10vw;
            text-decoration: none;
            border-radius: 20px;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }
        .create-btn:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .like-btn{
            font-family: Verdana;
            font-size: 14px;
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
            
        }
        .desc-box{
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 50vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: 20vh;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: left;
        }
        .desc-box2{
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 60vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: 2vh;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }

        /* additional */
        .add-color{
            background-color: white;
        }
    </style>
</head>
<body>
<x-app-layout>
    <div class="navigation-bar">
        <div class="nav-left">
          <h1 class = "g-name">{{$group->name}}</h1>  
        </div>
        <div class="nav-right">
            <a href="{{route('community.community')}}" class = "back-btn">
                Back
            </a>
        </div>
    </div>
    <section class = "page">
        <div class="container-wrapper">
        <div class="desc-box">
            <div class="p-3 border-b border-black">
                <span class="text-lg font-bold">Post Details</span>
                <br>
                <span>Relevant Details for the Post</span>
            </div>
            <form method="POST" action="{{route('create-post-submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="p-5 space-y-4">
                    <input name="id" value="{{$group->id}}" hidden/> 
                    <div class="w-full">
                        <label class="text-md">Post Title</label>
                        <input name="title" placeholder="Post Title" class="w-full h-8 rounded-md text-md" type="text">
                    </div>
          
                    <div class="w-full">
                        <label class="text-md">Content</label>
                    <input id="data" name="content" hidden/> 
                        <trix-editor input="data" class = "bg-white"></trix-editor>
                    </div>

                    <div class="flex justify-end mt-4">
                        <input type="submit" class="px-4 py-2 text-gray-200 rounded-md bg-slate-900"/>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
    
        
    @props([
        'group'
    ])
</x-app-layout>
    </body>
    </html>