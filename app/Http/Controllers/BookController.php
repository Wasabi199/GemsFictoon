<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\BookCreateRequest;
use App\Http\Requests\Book\ChapterCreateRequest;
use App\Models\Book;
use App\Models\BookChapter;
use App\Models\Category;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class BookController extends Controller
{
    public function createBook()
    {
        $genre = Genre::all();
        $category = Category::all();

        return view('CreateBook', [
            'genre' => $genre,
            'category' => $category
        ]);
    }

    public function submit(BookCreateRequest $request)
    {
        $validated_data = $request->validated();
        DB::transaction(function () use ($request, $validated_data) {
            User::find(Auth::user()->id)->books()->create([
                'title' => $validated_data['title'],
                'summary' => $validated_data['summary'],
                'genre_id' => $validated_data['genre'],
                'category_id' => $validated_data['category'],
                'image' => $request->has('image') ? $request->image->storePublicly('BookImage',  ['disk' => 'public']) : null
            ]);
        });

        return Redirect::route('welcome.welcome')->with('message', 'Book Created Successfully');
    }


    public function bookProfile($id){
        $book = Book::with('bookChapters')->findOrFail($id);

        return view('BookProfile',[
            'book'=>$book
        ]);
    }

    public function createChapter($id) {
        $book = Book::findOrFail($id);

        return view('CreateBookChapter',[
            'book'=>$book
        ]);
    }

    public function createChapterSubmit(ChapterCreateRequest $request){
        $validated_data = $request->validated();
        DB::transaction(function () use($validated_data){
            $book = Book::findOrFail($validated_data['id']);

            $book->bookChapters()->create([
                'title'=>$validated_data['title'],
                'content'=>$validated_data['body']
            ]);
        });

        return Redirect::route('welcome.welcome')->with('message', 'Book Created Successfully');

    }

    public function chapterProfile($id){
        $chapter = BookChapter::findOrFail($id);

        return view('ChapterProfile',[
            'chapter'=>$chapter
        ]);
    }

    public function deleteChapter(Request $request){
        $chapter = BookChapter::findOrFail($request->id);
        $chapter->delete();
        return Redirect::route('welcome.welcome')->with('message', 'Book Deleted Successfully');
    }

    public function updateChapter($id){
        $chapter = BookChapter::findOrFail($id);
        $book = Book::find($chapter->book_id);

        return view('UpdateBookChapter',[
            'book'=>$book,
            'chapter'=>$chapter
        ]);
    }

    public function update(ChapterCreateRequest $request, int $id){
        $validated_data = $request->validated();
        $chapter = BookChapter::findOrFail($id);
        $chapter->update([
            'title'=>$validated_data['title'],
            'content'=>$validated_data['body']
        ]);

        return Redirect::route('welcome.welcome')->with('message', 'Book Updated Successfully');

    }


}
