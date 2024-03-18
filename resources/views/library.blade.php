<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img_srcs/gem.png" type="image/x-icon">
    <title>Gem's Fictoon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            width: 100%;
            min-height: 120vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }

        .page {
            width: 100%;
            height: 150vh;
            margin: auto;
            padding: 0;
            display: flex;
        }

        .navigation-bar {
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

        .nav-left {
            float: left;
        }

        .nav-right {
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
        ul.nav-page-list {
            list-style-type: none;
            overflow: hidden;
            display: flex;
            margin-top: 30px;
            margin-bottom: 2px;
            width: 50vw;
            justify-content: space-around;
        }

        li.page-list-item {
            display: inline-block;
            color: white;
            padding-right: 10px;
            text-align: center;
            justify-content: center;
        }

        /*Links*/
        a {
            text-decoration: none;
            color: white;
            font-family: Verdana;
        }

        li a:hover {
            color: lightblue;
            font-weight: bold;
        }

        li a {
            padding: 6px;
        }

        .web-name:hover {
            color: skyblue;
        }

        .active {
            color: skyblue;
            font-weight: bold;
            text-shadow: 2px 2px 4px blue;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            align-content: center;
        }

        .desc-box {
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            max-width: 50vw;
            min-height: 20vh;
            margin-left: 50px;
            margin-top: 10%;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }

        .gem-photo {
            background-color: black;
            margin: 10px;
            margin-right: 30px;
            border-radius: 20px;
            border: 3px solid black;
            width: 100px;
            height: 100px;
            float: left;
        }

        .info {
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

        .info:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        h2 {
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
            padding-left: 30px;
            font-size: 24px;

        }

        p {
            color: white;
            font-family: Verdana;
        }

        .gnm {
            color: black;
        }

        .container {
            width: 100%;
            min-height: 140vh;
            top: 10%;
            justify-content: center;
            display: block;
            margin-top: 8%;
        }

        .story-container {
            background-image: linear-gradient(darkgray, gray);
            margin: 5px;
            padding: 5px;
            width: 90vw;
            min-height: 32vh;
            border-radius: 20px;
            border: 3px solid black;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }

        .book-display {
            width: 250px;
            height: 250px;
            display: flex;
            margin: 10px;
        }

        .book-cover {
            height: 20vh;
            border-radius: 10px;
        }

        .genre-container {
            display: flex;
            flex: 1;
            float: left;
            height: 34vh;
            width: 20%;
            border: 3px solid black;
            border-radius: 20px;
            margin: 10px;
            background-image: linear-gradient("gray, lightgray");
            text-align: left;
            font-family: Verdana;
            font-size: 18px;
            flex: 1;
        }

        .genre-container:hover {
            cursor: pointer;
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

        .footer-title {
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
                        <li class = "page-list-item"><a href = "{{ route('library.library') }}" class = "active">LIBRARY</a></li>
                        <li class = "page-list-item"><a href = "{{ route('about.about') }}" >ABOUT</a></li>
                        <li class = "page-list-item"><a href = "{{ route('notif.notif') }}" >NOTIFICATIONS</a></li>
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
        <div class = "container">
            <h4>Top Story</h4>
            <div class = "story-container">
                @foreach ($books as $book)
                    <div class = "book-display">
                        <a href="{{ route('book.profile', $book->id) }}">
                            <img class="book-cover" src="{{ URL::to('/') . '/storage/' . $book->image }}" />
                        </a>
                    </div>
                @endforeach
            </div>
            <h4>Genres</h4>
            <div class = "story-container">
                @foreach ($genre as $gen)
                    <div class = "divide">
                        <h3 class = "gnm">{{ $gen->title }}</h3>
                        <div class="book-display">
                            @foreach ($gen->book as $book)
                                <a href="{{ route('book.profile', $book->id) }}">
                                    <div>
                                        <img class="book-cover"
                                            src="{{ URL::to('/') . '/storage/' . $book->image }}" />
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

    </section>
</body>
<footer>
    <h3> GEM'S FICTOON </h3>
    <p class = "footer-text">All rights reserved.</p>
</footer>
@props(['books', 'genre'])

</html>
