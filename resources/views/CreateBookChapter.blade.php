<x-app-layout>
    <div class="w-full flex justify-between p-10 border-b border-gray-500">
        <div class="flex items-center py-2 my-auto text-3xl font-bold text-center text-gray-200">
          <span>{{$book->title}}</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 font-bold">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>
            <span> Create Chapter</span>          
        </div>
        <div class=" flex items-center bg-red-500 text-white py-2 px-4 rounded-md cursor-pointer">
            <a href="{{route('book.profile',$book->id)}}">
                Back
            </a>
        </div>
    </div>
    <div class="p-5">
        <div class="w-1/2 m-auto bg-gray-100 rounded-md shadow-sm h-fit shadow-white">
            <div class="p-3 border-b border-black">
                <span class="text-lg font-bold">Chapter Details</span>
                <br>
                <span>Relevant Details for the Chapter</span>
            </div>
            <form method="POST" action="{{route('create.book.chapter.submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="p-5 space-y-4">
                    <input name="id" value="{{$book->id}}" hidden/> 
                    <div class="w-full">
                        <label class="text-md">Chapter Title</label>
                        <input name="title" placeholder="Chapter Title" class="w-full h-8 rounded-md text-md" type="text">
                    </div>
          
                    <div class="w-full">
                        <label class="text-md">Body</label>
                    <input id="data" name="body" hidden/> 
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
        'book'
    ])
</x-app-layout>