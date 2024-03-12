<x-app-layout>
    <div class="w-full p-10 border-b border-gray-500">
        <div class="flex items-center py-2 my-auto text-3xl font-bold text-center text-gray-200">
            <span> {{$chapter->title}}</span>
        </div>
    </div>
    <div class="flex justify-center w-1/2 p-5 m-auto text-white">{!! $chapter->content !!}</div>
    @props([
        'chapter'
    ])
</x-app-layout>