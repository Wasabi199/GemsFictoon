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
            height: 80vh;
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
            margin-top: 10%;
            font-size: 18px;
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
        ul.nav-page-list.page-list{
            list-style-type: none;
            margin-top: 2%;
            margin-bottom: 2%;
            overflow: hidden;
            float: right;
            margin-right: 10px;
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
            margin: auto;
            min-height: 80vh;
        }
        
        li.fake-button:hover, li.fake-button2:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        a.fake-button-label:hover{
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
            margin-top: 10%;
            min-height: 80vh;
            width: 100%;
        }

        .join-button, .close-button {
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
        }
        /* .close-button{

        } */
        .join-button:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        
        .close-button:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
            padding: 10px; 
            width: 10vw;
            cursor: pointer;
        }
        ul.form-buttons{
            padding: 0;
        }
        li.fake-button{
            background-color: black;
            color: white;
            font-family: Verdana;
            width: 14vw;
            font-size: 14px;
            font-weight: bold;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            padding: 10px; 
            margin: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        li.fake-button:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .fake-button{
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
        .fake-button2{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid blue;
            text-align: center;
            border-radius: 20px;
            padding: 10px; 
            width: 8vw;
            margin: 20px;
            cursor: pointer;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        .join-button:hover, .close-button:hover {
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
            margin-top: -10%;
        }
        .form-buttons{
            padding: 0;
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
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
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
            background-color: skyblue;
            color: black;
            width: 30vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 2px 2px 2px 2px black;
        }
        .form-question{
            text-align: center;
            font-size: 18px;
        }
        
    </style>
</head>
<body>
    <section class = "page">
        <div class = "navigation-area">
            <div class = "navigation-bar">
                <h1><a href = "{{ route('welcome.welcome') }}" class = "web-name">GEM'S FICTOON</a></h1>
                <ul class = "nav-page-list">
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
            <!--default display text-->
            <h4><font color = "black"><center>You currently have no existing group. Do you wish to join on one?</center></font></h4>
            <center><button type = "button" class = "join-button" onClick = "joiningForm()">JOIN GROUP</button></center>
            <div class = "form-popup" id = "formPopup">
                <form action = "/community.blade.php" class = "joiningForm">
                    <p class = "form-question"><font color = "black">What type of group do you wish to join?</font></p>
                    <ul class = "form-buttons">
                        <li class = "fake-button"><a href = "{{ route('publicgroups') }}" class = "fake-button-label">SEE PUBLIC GROUPS</a></li>
                        <li class = "fake-button"><a href = "{{ route('privategroups') }}" class = "fake-button-label">SEE PRIVATE GROUPS</a></li>
                        <li class = "fake-button"><a onClick = "closeDetails()" class = "fake-button-label">CLOSE</a></li>
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
</html>


<!-- 

<div class = "public-group-sec">
            <h3>PUBLIC GROUPS</h3>
            <table class = "public-groups">

                <tr class = "created-group">
                    <td class = "group-info">
                        <h4>GROUP NAME</h4> 
                        <p>group name description/introduction</p>
                        <button type = "button" class = "view-details" onClick = "viewDetails()">View Details</button>

                        <div class = "details-popup" id = "detailForm">
                            <form action = "/community.blade.php" class = "view-details-container">
                                <button type = "submit" class = "join-button">Join Group</button>
                                <button type = "button" class = "close-button" onClick = "closeDetails()">Close</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        <div class = "group-sec">
            <h4 class = "default-text"><font color = "black"><center>You currently have no existing group. Do you wish to join on one?</center></font></h4>
            <center><button type = "button" class = "join-button" onClick = "joiningForm()">JOIN GROUP</button></center>
            <div class = "form-popup" id = "formPopup">
                <form action = "/community.blade.php" class = "joiningForm">
                    <p class = "form-question"><font color = "black">What type of group do you wish to join?</font></p>
                    <ul class = "form-buttons">
                        <li class = "fake-button"><a href = "{{ route('publicgroups') }}" class = "fake-button-label">SEE PUBLIC GROUPS</a></li>
                        <li class = "fake-button"><a href = "{{ route('privategroups') }}" class = "fake-button-label">SEE PRIVATE GROUPS</a></li>
                        <li class = "fake-button2"><a onClick = "closeDetails()" class = "fake-button-label">CLOSE</a></li>
                    </ul>
                </form>
            </div>
        </div>

        <div class = "public-group-sec">
            <h3>PRIVATE GROUPS</h3>
            <!--For each, getting created group from users-->
            <table class = "public-groups">
                <!--iterate table row-->
                <tr class = "created-group">
                    <td class = "group-info">
                        <h4>GROUP NAME</h4> <!-- get data from user(group creator)-->
                        <p>group name description/introduction</p>
                        <button type = "button" class = "view-details" onClick = "viewPrivDetails()">View Details</button>

                        <div class = "details-popup" id = "detailPrivForm">
                            <form action = "/community.blade.php" class = "view-details-container">
                            <h4><font color = "black">GROUP NAME</font></h4>
                                <p><font color = "black">group name description/introduction</font></p>
                                <button type = "submit" class = "join-button">Request to Join</button>
                                <button type = "button" class = "close-button" onClick = "closePrivDetails()">Close</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
<script>
    function viewDetails() {
    document.getElementById("detailForm").style.display = "block";
    }
    function viewPrivDetails() {
    document.getElementById("detailPrivForm").style.display = "block";
    }

    function closeDetails() {
        document.getElementById("detailForm").style.display = "none";
    }
    function closePrivDetails() {
        document.getElementById("detailPrivForm").style.display = "none";
    }
</script>
</body>
<footer>
        <h3 class = "footer-title"> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>