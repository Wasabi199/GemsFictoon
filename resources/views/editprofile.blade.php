<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
    <title>Gem's Fictoon</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }

        .page {
            width: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            display: flex;
            flex-direction: column;
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

        h1 {
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
        }

        a {
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

        .active {
            color: skyblue;
            font-weight: bold;
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
            color: black;
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

        p {
            color: white;
            font-family: Verdana;

        }

        span {
            color: black;
            font-family: Verdana;
            font-size: 14px;
        }

        .default-text {
            margin-top: 10vh;
            float: center;
        }

        .container-wrapper {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: auto;
        }

        .container {
            width: 100%;
            margin: auto;
            min-height: 100vh;
        }

        .desc-box {
            background-color: white;
            padding: 20px;
            max-width: 40vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
            display: block;
        }

        .info {
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            border: 2px solid blue;
            text-align: center;
            padding: 5px;
            text-decoration: none;
            border-radius: 10px;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }

        .info:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        .create-btn {
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            border-radius: 20px;
            ;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }

        .create-btn:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        .profile-section-name {
            color: black;
            font-family: Verdana;
            text-align: center;
            font-size: 20px;
        }

        /* .editable-sec{

        } */
        label {
            color: black;
            font-family: Verdana;
            font-size: 18px;
            font-weight: bold;
        }

        .type-text {
            margin: 5px;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 30px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 18px;
        }

        .type-longtext {
            margin: 5px;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 90px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 18px;
            resize: none;
            margin-bottom: 20px;
        }

        .select-type {
            margin: 5px;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 30px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 18px;
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
        <div class = "navigation-bar">
            <a href = "{{ route('account.account') }}">BACK</a>
        </div>
        <div class = "container-wrapper">
            <div class = "container">

                <div class = "desc-box">
                    <h4>EDIT USER PROFILE</h4>
                    <hr><br>
                    <form method="POST" action="{{ route('submit-profile-update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class = "editable-sec">
                            <label for = "group-name">USERNAME</label>
                            <br>
                            <span>Current: {{ Auth::user()->username }} </span>
                            <br>
                            <input type = "text" class = "type-text" name = "username" id = "username" required>


                            <label for = "group-intro">BIO</label>
                            <br>
                            <span>Current: {{ Auth::user()->biography }} </span>
                            <br>
                            <textarea type = "text" class = "type-longtext" name = "biography" id = "groupintro" required></textarea>
                            <input class="create-btn" type="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
