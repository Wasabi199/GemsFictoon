<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
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
        p{
            color: white;
            font-family: Verdana;

        }
        .default-text{
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
        .desc-box{
            background-color: white;
            padding: 26px;
            max-width: 50vw;
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
        .user-photo{
            background-color: black;
            margin: 10px;
            display: flex;
            border-radius: 20px;
            border: 3px solid black;
            width: 130px;
            height: 130px;
            margin-left: auto;
            margin-right: auto;
        }
        .info{
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
        .info:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .change-btn{
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
        .change-btn:hover{
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
                <a href = "{{ route('account.account') }}">BACK</a>
            </div>
        </div>
        <div class = "container-wrapper">
            <div class = "container">
                <div class = "desc-box">
                    <div class = "user-photo">
                        <img> <!--allow user to change their photo-->
                    </div>
                    <button type = "button" class = "info">Change Photo</button>
                    <div class = "editable-sec">
                        <h4 class = "profile-section-name">{{Auth::user()->username}}</h2> 
                        <button type = "button" class = "change-btn">Change Username</button>
                        <br>
                        <h4 class = "profile-section-name">BIO</h4>
                        <p>
                        {{Auth::user()->biography}} <!--change this-->
                        </p>
                        <button type = "button" class = "change-btn">Change Bio</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>