<x-app-layout>

    <div class="w-full flex justify-between p-10 border-b border-gray-500">
        <div class="text-3xl font-bold text-gray-200">
          Book Create
        </div>
        <div class="bg-red-500 text-white py-2 px-4 rounded-md cursor-pointer">
            <a href="{{route('account.account')}}">
                Back
            </a>
        </div>
    </div>
    <div class="p-5">
        <div class="w-1/2 m-auto bg-gray-100 rounded-md shadow-sm h-fit shadow-white">
            <div class="p-3 border-b border-black">
                <span class="text-lg font-bold">Book Details</span>
                <br>
                <span>Relevant Details for the Book</span>
            </div>
            <form method="POST" action="{{route('book.create.submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="p-5 space-y-4">
                    <div class="w-full">
                        <label class="text-md">Book Title</label>
                        <input name="title" placeholder="Book Title" class="w-full h-8 rounded-md text-md" type="text">
                    </div>
          
                    <div class="w-full">
                        <label class="text-md">Summary</label>
                        <textarea name="summary" placeholder="Some Book Summary" class="w-full h-20 rounded-md text-md" type="text"></textarea>
                    </div>

                    <div class="w-full">
                        <label class="text-md">Genre</label>
                        <select name="genre" class="w-full rounded-md text-md">
                            <option  selected disabled>Select Genre</option>
                            @foreach ($genre as $g)
                            <option class="text-md" value="{{ $g->id }}">{{$g->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full">
                        <label class="text-md">Category</label>
                        <select name="category" class="w-full rounded-md text-md">
                            <option selected disabled>Select Category</option>
                            @foreach ($category as $c)
                            <option value="{{ $c->id }}">{{$c->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full">
                        <label class="text-md">Cover</label>
                        <input name="image" type="file" class="w-full h-8 border border-black rounded-md text-md"/>
                    </div>
                    <div class="flex justify-end">
                        <input type="submit" class="px-4 py-2 text-gray-100 rounded-md bg-slate-900"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    @props([
        'genre',
        'category'
    ])
    {{-- <script>
            ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script> --}}
</x-app-layout>

