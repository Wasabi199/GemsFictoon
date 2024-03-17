<x-app-layout>
    <div class="flex justify-between w-full p-10 border-b border-gray-500">
        <div class="flex items-center py-2 my-auto text-3xl font-bold text-center text-gray-200">
          <span>{{$post->title}}</span>
        </div>
        <div class="flex items-center px-4 py-2 text-white bg-red-500 rounded-md cursor-pointer ">
            <a href="{{route('community.community')}}">
                Back
            </a>
        </div>
    </div>
    <div class="w-1/2 p-10 m-auto">
        <div class="p-2 bg-gray-300 border border-black rounded-md">
            <div class="text-2xl font-bold">{{$post->title}}</div>
            <div>
                <p>{!!$post->content!!}</p>
            </div>
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                  </svg>
                    <span>{{$post->vote}} Likes</span>
            </div>
        </div>
    <div class="flex justify-between py-2">
        <div class="text-2xl font-bold text-white">Comments</div>
    </div>
    <div class="space-y-2">
        <div>
            @foreach ($post->postComments as $comment)     
            <div class="p-2 space-y-2 bg-gray-300 rounded-md">
                <div>
                    <div class="font-bold">{{$comment->user->username}}</div>
                    @if ($comment->user->usertype == 1)
                    <div class="text-xs">Admin</div>

                    @elseif ($comment->user->usertype == 2)
                    <div class="text-xs">Author</div>

                    @else
                    <div class="text-xs">Reader</div>
                        
                    @endif
                </div>
                <div>{!!$comment->comment!!}</div>
                <div class="flex space-x-4">
                    <div class="flex space-x-2">
                        <form method="POST" class="flex justify-end" action="{{route('like-comment')}}">
                            @csrf
                            @method('PATCH')
                            <input type="number" hidden name="id" value="{{$comment->id}}">
                            <button type="submit" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                  </svg>
                                {{$comment->like_count}} Likes
                            </button>
                        </input>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="p-2 space-y-2 bg-gray-300 rounded-md">
            <div class="p-3">
                <form method="POST" action="{{route('post-comment')}}" enctype="multipart/form-data">
                    @csrf
                    <input value="{{$post->id}}" name="id" hidden/>
                    <div>
                        <label for="content">Comment</label>
                        <textarea class="w-full h-20 rounded-md" name="content"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <input type="submit" class="px-4 py-2 text-white rounded-md bg-slate-900">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @props([
        'post'
    ])
</x-app-layout>