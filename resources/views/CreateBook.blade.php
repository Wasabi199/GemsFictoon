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
            width: 8vw;
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
        input:hover{
            cursor: pointer;
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
            width: 50vw;
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
          <div class= "g-name"> Book Create </div>
        </div>
        <div class="nav-right">
            <a href="{{route('account.account')}}" class="back-btn">
                Back
            </a>
        </div>
    </div>
    <section class = "page">
    <div class="container-wrapper">
        <div class="desc-box">
            <div class="p-3 border-b border-black">
                <span class="text-lg font-bold">Book Details</span>
                <br>
                <span>Relevant Details for the Book</span>
            </div>
            <form method="POST" action="{{route('book.create.submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="p-5 space-y-4">
                    <div class="w-full">
                        <label class="text-md">Book Title</label>
                        <input name="title" placeholder="Book Title" class="w-full h-8 rounded-md text-md" type="text" required>
                    </div>
          
                    <div class="w-full">
                        <label class="text-md">Summary</label>
                        <textarea name="summary" placeholder="Some Book Summary" class="w-full h-20 rounded-md text-md" type="text" required></textarea>
                    </div>

                    <div class="w-full">
                        <label class="text-md">Genre</label>
                        <select name="genre" class="w-full rounded-md text-md" required>
                            <option  selected disabled>Select Genre</option>
                            @foreach ($genre as $g)
                            <option class="text-md" value="{{ $g->id }}">{{$g->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full">
                        <label class="text-md">Category</label>
                        <select name="category" class="w-full rounded-md text-md" required>
                            <option selected disabled>Select Category</option>
                            @foreach ($category as $c)
                            <option value="{{ $c->id }}">{{$c->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full">
                        <label class="text-md">Cover</label>
                        <input name="image" type="file" class="w-full h-8 bg-white border border-black rounded-md text-md" required/>
                    </div>
                    <div class="create-btn">
                        <input type="submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
    
    
    @props([
        'genre',
        'category'
    ])
    {{-- <script>
            ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script> --}}
</x-app-layout>

