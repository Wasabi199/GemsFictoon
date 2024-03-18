<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img_srcs/gem.png" type="image/x-icon">
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

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

        h1 {
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
        }
        /*Listing*/
        ul.nav-page-list{
            list-style-type: none;
            overflow: hidden;
            display: flex;
            margin-top: 30px;
            margin-bottom: 2px;
            width: 40vw;
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
            margin: auto;
        }
        .container {
            width: 100%;
            display: block;
        }
        .desc-box{
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 40vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10vh;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }
        .desc-box2{
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 60vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 6vh;
            border-radius: 20px;
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
        
        table{
            padding-bottom: 2px;
            border-style: none;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
        }
        th, td {
            border-style: none;
            text-align: center;
            height: 18px;
        }
        .shelf-data{
            display: flex;
            padding: 20px;
            float: center; 
        }
        
        .shelf{
            padding: 2px;
            border-style: none;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
            height: 60px;
        }
        .shelf-name, .shelf-content {
            border-style: none;
            text-align: center;
        }
        .shelf-content {
            padding: 20px;
            border: 2px solid black;
            background-color: lightgray;
            border-radius: 20px;
            height: 30vh;
            width: 100%;
        }
        button:hover {
            cursor: pointer;
        }
        button {
            background: none;
            border: none;
            font-size: 16px;
        }
        .create-btn{
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
            margin-top: 20px;
        }
        .create-btn:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .delete-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            text-align: center;
            justify-content: center;
            padding: 10px;
            display: block;
            width: 6vw;
            margin-left: auto;
            margin-right: auto;
            text-decoration: none;
            border-radius: 20px;
        }
        .delete-btn:hover{
            background-color: darkred;
            color: white;
            cursor: pointer;
        }
        .view-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            text-align: center;
            justify-content: center;
            padding: 10px;
            width: 69px;
            height: 20px;
            align-self: center;
            text-decoration: none;
            border-radius: 20px;
            margin-bottom: 20px;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }
        .view-btn:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
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
                        <li class = "page-list-item"><a href = "{{ route('account.account') }}" class = "active">ACCOUNT</a></li>
                        <li class = "page-list-item">
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
        <div class = "container-wrapper">
            <div class = "container">
                <div class = "desc-box">
                    <div class = "user-photo">
                        <img :src={{Auth::user()->user_image_link}}/>
                    </div>
                    <h2>{{Auth::user()->username}}</h2> 
                    <h3>username</h3> <!--change this-->
                    <br>
                    <h4 class = "profile-section-name">BIO</h4>
                    <p>
                        {{Auth::user()->biography}} <!--change this-->
                    </p>
                    <table>
                        <tr>
                            <th><h3>{{Auth::user()->following}}</h3></th> 
                            <th><h3>{{Auth::user()->follower}}</h3></th> 
                        </tr>
                        <tr>
                            <td><h4>FOLLOWING</h4></td>
                            <td><h4>FOLLOWERS</h4></td>
                        </tr>
                    </table>
                    <a href = "{{ route('editprofile') }}" class = "editprofile-btn">Edit Profile</a>
                </div>
            </div>
            <div class = "container">
                <div class = "desc-box2">
                        <h2 style="text-transform:uppercase">{{Auth::user()->username}}'s Shelf</h2>
                    <table class ="shelf-content">
                        @foreach ($books as $book)
                        <tr>
                                <td class="shelf-data">
                                    <img class = "book-cover" src="{{URL::to('/').'/storage/'.$book->image}}"/>
                                </td>
                                <td>
                                    <div>
                                        <h4 class = "gnm">{{$book->title}}</h4>
                                        <p class = "gnm">{{$book->summary}}</p>
                                    </div>
                                </td>
                                <td>
                                    <a class="view-btn" href="{{route('book.profile',$book->id)}}">View</a>
                                    
                                    <form method="POST" action="{{route('book.delete')}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type = "number" hidden name="id" value="{{$book->id}}">
                                        <input class = "delete-btn" type="submit" value="Delete">
                                    </form></td>
                            </tr>
                            @endforeach
                    </table>
                    <a href="{{route('book.create')}}" class="create-btn">Create a Book</a>
                </div>
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