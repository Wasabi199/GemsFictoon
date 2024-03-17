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
            padding-bottom: 10%;
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
        .create-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            border-radius: 20px;;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }
        .create-btn:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .generate-btn{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            border: 2px solid blue;
            text-align: center;
            padding: 6px;
            margin: 5px;
            text-decoration: none;
            border-radius: 20px;;
            display: inline;
        }
        .generate-btn:hover{
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
        label{
            color: black;
            font-family: Verdana;
            font-size: 18px;
            font-weight: bold;
        }
        .display-text{
            margin: 5px;
            width: 30%;
            display: inline;
            height: 30px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 18px;
        }
        .type-text{
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
        .type-longtext{
            margin: 5px;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 80px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 18px;
            resize: none;
        }
        .type-longtext2{
            margin: 5px;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 160px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 18px;
            resize: none;
        }
        .center-this{
            justify-content: center;
            display: flex;
            margin-left: auto;
            margin-right: auto;
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
        <div class = "navigation-area">
            <div class = "navigation-bar">
                <a href = "{{ route('privategroups') }}">BACK</a>
            </div>
        </div>
        <div class = "container-wrapper">
            <div class = "container">
                <div class = "desc-box">
                    <!-- <button type = "button" class = "info">Change Photo</button> -->
                    <div class = "editable-sec">
                        <label for = "group-name">GROUP NAME</label>
                        <br>
                        <input type = "text" class = "type-text" name = "groupname" id = "groupname">
                        <label for = "group-topic">MAIN TOPIC</label>
                        <br>
                        <input type = "text" class = "type-text" name = "grouptopic" id = "grouptopic">
                        <label for = "group-intro">GROUP INTRODUCTION</label>
                        <br>
                        <span><font color = "gray" size = "3px"> *this will be displayed publicly below the group name.</font></span>
                        <textarea class = "type-longtext" name = "groupintro" id = "groupintro"></textarea>
                        <label for = "group-desc">GROUP DESCRIPTION</label>
                        <br>
                        <textarea class = "type-longtext2" name = "groupdesc" id = "groupdesc"></textarea>
                        <br>
                        <center><label for = "group-code">GROUP CODE</label></center>
                        <div class = "center-this">
                            <input type = "text" class = "display-text" readonly = "readonly"/>
                            <button type = "button" class = "generate-btn">GENERATE CODE</button>
                        </div>
                        <br>
                        <button type = "button" class = "create-btn">CREATE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>