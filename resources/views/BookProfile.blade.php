<x-app-layout>
    <div class="w-full p-10 border-b border-gray-500">
        <div class="flex items-center py-2 my-auto text-3xl font-bold text-center text-gray-200">
            <span>Book</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
            <span> {{ $book->title }}</span>
        </div>
    </div>
    <div class="p-5">
        <div class="w-1/2 p-5 m-auto space-y-5 bg-gray-100 rounded-md shadow-sm h-fit shadow-white">
            <div class="flex justify-between">
                <div class="p-3 text-4xl font-black">Book Cover</div>
                <img class="h-52 w-52" src="{{ URL::to('/') . '/storage/' . $book->image }}" />
            </div>
            <div>
                <div class="text-2xl font-bold">Title</div>
                <div class="text-lg">{{ $book->title }}</div>
            </div>
            <div>
                <div class="text-2xl font-bold">Summary</div>
                <div class="text-lg">{{ $book->summary }}</div>
            </div>
            <div>
                <div class="text-2xl font-bold">Genre</div>
                <div class="text-lg">{{ $book->genre_title }}</div>
            </div>
            <div>
                <div class="text-2xl font-bold">Category</div>
                <div class="text-lg">{{ $book->category_title }}</div>
            </div>
            <table class="w-full">
                <tr>
                    <thead>
                        <th class="text-start 2xl">Table of Contents</th>
                        @if (Auth::user()->id == $book->user_id)
                        <th class="flex justify-end px-5">
                            <a href="{{route('create.book.chapter',$book->id)}}" class="px-4 py-2 text-gray-100 rounded-md bg-slate-900">Create</a></th>
                        @endif
                    </thead>
                </tr>
                @foreach ($book->bookChapters as $chapter)         
                <tr>
                    <tbody>
                        <td class="text-lg font-bold">{{$chapter->title}}</td>
                        <td class="flex justify-end gap-4 p-5">
                            <a class="px-4 py-2 text-white bg-green-400 rounded-md" href="{{route('chapter.read', $chapter->id)}}">Read</a>
                            <a class="px-4 py-2 text-white bg-blue-400 rounded-md" href="{{route('update.book.chapter', $chapter->id)}}">Update</a>
                            <form method="POST" action="{{route('chapter.delete')}}">
                                @csrf
                                @method('DELETE')
                                <input type="number" hidden name="id" value="{{$chapter->id}}">
                                <input class="px-4 py-2 text-white bg-red-400 rounded-md" type="submit" value="Delete">
                            </form>

                        </td>
                    </tbody>
                </tr>
                @endforeach
            </table>

        </div>
    </div>

    @props(['book'])
</x-app-layout>
<script>
    function delete($id){
        
    }
</script>
