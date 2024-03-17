<x-app-layout>
    <div class="flex justify-between w-full p-10 border-b border-gray-500">
        <div class="flex items-center py-2 my-auto text-3xl font-bold text-center text-gray-200">
          <span>{{$group->name}}</span>
        </div>
        <div class="flex items-center px-4 py-2 text-white bg-red-500 rounded-md cursor-pointer ">
            <a href="{{route('community.community')}}">
                Back
            </a>
        </div>
    </div>
    <div class="p-5">
        <div class="w-1/2 m-auto bg-gray-100 rounded-md shadow-sm h-fit shadow-white">
            <div class="p-3 border-b border-black">
                <span class="text-lg font-bold">Post Details</span>
                <br>
                <span>Relevant Details for the Post</span>
            </div>
            <form method="POST" action="{{route('create-post-submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="p-5 space-y-4">
                    <input name="id" value="{{$group->id}}" hidden/> 
                    <div class="w-full">
                        <label class="text-md">Post Title</label>
                        <input name="title" placeholder="Post Title" class="w-full h-8 rounded-md text-md" type="text">
                    </div>
          
                    <div class="w-full">
                        <label class="text-md">Content</label>
                    <input id="data" name="content" hidden/> 
                        <trix-editor input="data"></trix-editor>
                    </div>

                    <div class="flex justify-end mt-4">
                        <input type="submit" class="px-4 py-2 text-gray-100 rounded-md bg-slate-900"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @props([
        'group'
    ])
</x-app-layout>