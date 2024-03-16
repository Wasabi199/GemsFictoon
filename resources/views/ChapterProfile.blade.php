<x-app-layout>
    <div class="w-full flex justify-between p-10 border-b border-gray-500">
        <div class="flex items-center py-2 my-auto text-3xl font-bold text-center text-gray-200">
            <span> {{$chapter->title}}</span>
        </div>
        <div class=" flex items-center bg-red-500 text-white py-2 px-4 rounded-md cursor-pointer">
            <a href="{{route('book.profile',$chapter->book_id)}}">
                Back
            </a>
        </div>
    </div>
    <div class="flex justify-center w-1/2 p-5 m-auto text-white">{!! $chapter->content !!}</div>
    @props([
        'chapter'
    ])
</x-app-layout>