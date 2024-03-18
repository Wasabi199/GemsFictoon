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
            width: 90%;
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
            max-width: 100vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-top: 20vh;
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
        <div>
            <div class="desc-box">
            <h1 class = "grp-name">{{$group->name}}</h1>
            <p class = "intro">{{$group->introduction}}</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                  </svg>
                    <p class = "post-text">{{$group->member_count}} Members</p>
            </div>
            <a href="{{route('create-post',$group->id)}}" class="create-btn">Create Post</a> 
        </div>
        <br><br>
        <h1 class = "grp-name">POSTS</h1>
        
        <div>
            @foreach ($group->groupPosts as $post) 
            <a href="{{route('post-profile',$post->id)}}">
                <div class="desc-box2">
                    <div class="font-bold">{{$post->title}}</div>
                    <div>{!!$post->content!!}</div>
                    <br><br>
                    <div class="flex space-x-4">
                        <div class="flex space-x-2">
                            <form method="POST" class="flex justify-end" action="{{route('like-post')}}">
                                @csrf
                                @method('PATCH')
                                <input type="number" hidden name="id" value="{{$post->id}}">
                                <button type="submit" class="like-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                      </svg>
                                    {{$post->vote}} Likes
                                </button>
                            </input>
                            </form>                    
                        </div>
                        <div class="flex space-x-2">
                            <div class = "like-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                              </svg>
                              {{$post->comment_count}} Comments  
                            </div>                 
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    </section>
    
    @props([
        'group'
        ])
        
</x-app-layout>
</body>
</html>