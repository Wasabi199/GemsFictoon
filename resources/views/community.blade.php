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
        /*Title texts*/
        h1{
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
        }
        h2{
            color: white;
            font-family: Verdana;
        }
        h3 {
            color: black;
            font-family: Verdana;
            text-align: left;
            font-size: 20px;
        }
        h4{
            color: white;
            font-family: Verdana;
            text-align: left;
            font-size: 18px;
        }
        .gnm{
            color: black;
        }
        h3.footer-title{
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 20px;
        }
        .footer-text {
            text-align: center;
        }
        /*Listing*/
        ul.page-list{
            list-style-type: none;
            margin-top: 2%;
            margin-bottom: 2%;
            overflow: hidden;
            padding-left: 42%;
        }
        li.page-list-item{
            float: left;
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
        li.page-list-item a:hover{
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
        /*main content*/
        .container {
            width: 100%;
            justify-content: center; 
            align-items: center;
            display: flex;
            margin-top: 8%;
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
            display: block;
            vertical-align: top;
            
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
        .btn-container{
            width: 100%;
        }
        .info{
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
            float: right;
            margin-top: 20px;
        }
        .info:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        
        
        .fake-button-label:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
 
        p{
            color: white;
            font-family: Verdana;
        }
        /*footer*/
        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .group-sec{
            width: 100%;
            min-height: 60vh;
            margin: 20px;
            top: 10%;
            justify-content: center; 
            display: block;
            margin-top: 8%;
            margin-left: auto;
            margin-right: auto;
        }

        .join-button{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            padding: 10px; 
            width: 10vw;
            cursor: pointer;
            
            
        }
        .close-button {
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
        }
        .fake-button-label{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            border-radius: 20px;
            padding: 10px; 
            width: 20vw;
            margin: 20px;
            cursor: pointer;
            display: block;
        }
        .fake-button-label2{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            border-radius: 20px;
            padding: 10px; 
            width: 10vw;
            margin: 20px;
            cursor: pointer;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        .join-button:hover, .close-button:hover, .fake-button-label2:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .form-popup {
            display: none;
            position: fixed;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            margin-top: -20%;
        }
        .form-buttons{
            padding: 0;
            list-style-type: none;
        }
        .joiningForm{
            width: 24vw;
            height: 30vh;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
            background-color: skyblue;
            color: black;
            margin: 10px; 
            display: block;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 2px 2px 2px 0 black;
        }
        .form-question{
            text-align: justify;
            font-size: 18px;
        }
        .default-text{
            margin-top: 10%;
        }
        .confirmationPopup{
            width: 20vw;
            height: 20vh;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
            background-color: gray;
            color: black;
            margin: 20px; 
        }
        
    </style>
</head>
<body>
    <section class = "page">
        <div class = "navigation-area">
            <div class = "navigation-bar">
                <h1><a href = "{{ route('welcome.welcome') }}" class = "web-name">GEM'S FICTOON</a></h1>
                <ul class = "page-list">
                    <li class = "page-list-item"><a href = "{{ route('welcome.welcome') }}">HOME</a></li>
                    <li class = "page-list-item"><a href = "{{ route('community.community') }}" class = "active">COMMUNITY</a></li>
                    <li class = "page-list-item"><a href = "{{ route('library.library') }}">LIBRARY</a></li>
                    <li class = "page-list-item"><a href = "{{ route('about.about') }}" >ABOUT</a></li>
                    <li class = "page-list-item"><a href = "{{ route('account.account') }}" >ACCOUNT</a></li>
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
        <div class = "group-sec">

            
            @if ($groups)              
                <div class="container">
                @foreach ($groups as $group)
                    <div class="group-boxes">
                        <h4 class = "gnm">{{$group->name}}</h4>
                        <p class = "gnm">{{$group->introduction}}</h4>  

                          <a href="{{route('group-profile',$group->id)}}" class="info">View</a>
                        <br>
                    </div>
                @endforeach
                </div>
                @else
                <h4 class = "default-text"><font color = "black"><center>You currently have no existing group. Do you wish to join on one?</center></font></h4>
                @endif
            <br><br>
            <center><button type = "button" class = "join-button" onClick = "joiningForm()">JOIN A GROUP</button></center>
            <div class = "form-popup" id = "formPopup">
                <form action = "/community.blade.php" class = "joiningForm">
                    <p class = "form-question"><font color = "black">What type of group do you wish to join?</font></p>
                    <ul class = "form-buttons">
                        <li class = "fake-button"><a href = "{{ route('publicgroups') }}" class = "fake-button-label">SEE PUBLIC GROUPS</a></li>
                        <li class = "fake-button"><a href = "{{ route('privategroups') }}" class = "fake-button-label">SEE PRIVATE GROUPS</a></li>
                        <li class = "fake-button2"><a onClick = "closeDetails()" class = "fake-button-label2">CLOSE</a></li>
                    </ul>
                </form>
            </div>
        </div>
        
    </section>
<script>
    /*Open popup and page*/
    function joiningForm() {
        document.getElementById("formPopup").style.display = "block";
    }

    /*Close popup*/
    function closeDetails() {
        document.getElementById("formPopup").style.display = "none";
    }
</script>
</body>
<footer>
        <h3 class = "footer-title"> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>

@props([
    'groups'
])
</html>
