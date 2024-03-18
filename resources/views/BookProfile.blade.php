<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img_srcs/gem.png" type="image/x-icon">

    <title>Gem's Fictoon</title>
    <style>
        body {
            width: 100%;
            min-height: 150vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }

        .page {
            width: 100%;
            min-height: 160vh;
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

        .grp-name {
            font-size: 20px;
            color: black;
            font-family: Verdana;
            font-weight: bolder;
            text-align: center;
        }

        .intro {
            font-size: 16px;
            color: black;
            font-family: Verdana;
            text-align: center;
        }

        .post-text {
            font-size: 14px;
            color: black;
            font-family: Verdana;
        }

        /* buttons */
        a.back-btn {
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

        .create-btn {
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            border: 2px solid blue;
            text-align: center;
            justify-content: center;
            padding: 5px;
            width: 8vw;
            text-decoration: none;
            border-radius: 20px;
            display: block;
            float: right;
            margin: auto;
            margin: 20px;
        }

        .create-btn:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        .read-btn {
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            text-align: center;
            justify-content: center;
            padding: 3px;
            width: 5vw;
            text-decoration: none;
            border-radius: 5px;
            display: flex;
            float: right;
            margin-top: 26px;
        }

        .read-btn:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        .update-btn {
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            text-align: center;
            justify-content: center;
            padding: 3px;
            width: 5vw;
            text-decoration: none;
            border-radius: 5px;
            display: flex;
            float: right;
            margin-top: 26px;
        }

        .update-btn:hover {
            background-color: blue;
            cursor: pointer;
        }

        .delete-btn {
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            text-align: center;
            justify-content: center;
            padding: 3px;
            width: 5vw;
            text-decoration: none;
            border-radius: 5px;
            display: flex;
            float: right;
            margin-top: 26px;
        }

        .delete-btn:hover {
            background-color: darkred;
            cursor: pointer;
        }

        .like-btn {
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

        .desc-box {
            background-image: linear-gradient(darkgray, gray);
            padding: 26px;
            width: 50vw;
            min-height: 50vh;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: 20vh;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }

        .desc-box2 {
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
    </style>
</head>

<body>
    <x-app-layout>
        <div class="navigation-bar">
            <div class = "nav-left">
                <div class="g-name">
                    <span>Book</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <span> {{ $book->title }}</span>
                </div>
            </div>
            <div class = "nav-right">
                <a href="{{ route('library.library') }}"class="back-btn">
                    Back
                </a>
            </div>

        </div>
        <section class = "page">
            <div class="container-wrapper">
                <div class="desc-box">
                    <div class="flex justify-between">
                        <div class="p-3 text-4xl font-black">Book Cover</div>
                        <img class="h-52 w-52" src="{{ URL::to('/') . '/storage/' . $book->image }}" />
                    </div>
                    <div>
                        <div class="text-2xl font-bold">Title</div>
                        <div class="text-lg">{{ $book->title }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold">Summary</div>
                        <div class="text-lg">{{ $book->summary }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold">Genre</div>
                        <div class="text-lg">{{ $book->genre_title }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold">Category</div>
                        <div class="text-lg">{{ $book->category_title }}</div>
                    </div><br>
                    <hr>
                    <table class="w-full">
                        <tr>
                            <thead>
                                <th class="text-2xl font-bold">Table of Contents</th>
                                @if (Auth::user()->id == $book->user_id)
                                    <th class="flex justify-end px-5">
                                        <a href="{{ route('create.book.chapter', $book->id) }}" class="create-btn">Create
                                            Page</a>
                                    </th>
                                @endif
                            </thead>
                        </tr>
                        @foreach ($book->bookChapters as $chapter)
                            <tr>
                                <tbody>
                                    <td class="text-lg font-bold">{{ $chapter->title }}</td>
                                    <td class="flex justify-end gap-4 p-5">
                                        <a class="read-btn" href="{{ route('chapter.read', $chapter->id) }}">Read</a>
                                        @if (Auth::user()->id == $book->id)
                                            <a class="update-btn"
                                                href="{{ route('update.book.chapter', $chapter->id) }}">Update</a>
                                            <form method="POST" action="{{ route('chapter.delete') }}"
                                                class="delete-btn">
                                                @csrf
                                                @method('DELETE')
                                                <input type="number" hidden name="id"
                                                    value="{{ $chapter->id }}">
                                                <input type="submit" value="Delete">
                                            </form>
                                        @endif
                                    </td>
                                </tbody>
                            </tr>
                        @endforeach
                    </table>
                    <hr>
                </div>
            </div>


            @props(['book'])
    </x-app-layout>
    <script>
  
    </script>
</body>

</html>
