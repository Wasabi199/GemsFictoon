<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Redirect::route('login');
});

Route::prefix('reader')->middleware(['auth'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome.welcome');

    Route::get('/community', function () {
        return view('community');
    })->name('community.community');;

    Route::get('/account', function () {
        $books = Book::where('user_id', Auth::user()->id)->get();
        return view('account', [
            'books'=>$books
        ]);
    })->name('account.account');

    // Books
    Route::get('book-create', [BookController::class, 'createBook'])->name('book.create');
    Route::post('book-submit', [BookController::class, 'submit'])->name('book.create.submit');
    Route::delete('book-delete',[BookController::class,'deleteBook'])->name('book.delete');


    Route::get('book-profile/{id}', [BookController::class, 'bookProfile'])->name('book.profile');


    Route::get('create-book-chapter/{id}',[BookController::class,'createChapter'])->name('create.book.chapter');
    Route::post('create-book-chapter/submit',[BookController::class,'createChapterSubmit'])->name('create.book.chapter.submit');

    Route::get('chapter-read/{id}',[BookController::class,'chapterProfile'])->name('chapter.read');

    Route::delete('chapter-delete',[BookController::class,'deleteChapter'])->name('chapter.delete');

    Route::get('update-book-chapter/{id}',[BookController::class,'updateChapter'])->name('update.book.chapter');
    Route::post('submit-update-book-chapter/{id}',[BookController::class,'update'])->name('update.book.chapter.submit');


    Route::get('/library', function () {
        $books = Book::inRandomOrder()->limit(5)->get();
        $genre = Genre::with('book')->get();
        return view('library',[
            'books'=>$books,
            'genre'=>$genre
        ]);
    })->name('library.library');;
    

    Route::get('/community',[GroupController::class,'community'])->name('community.community');

    Route::get('/publicgroups',[GroupController::class,'publicGroup'])->name('publicgroups');
    Route::patch('join-group',[GroupController::class,'joinGroup'])->name('join.group');
    Route::get('group-profile/{id}',[GroupController::class,'groupProfile'])->name('group-profile');
    Route::get('create-post/{id}',[GroupController::class,'createPost'])->name('create-post');
    Route::post('create-post-submit',[GroupController::class,'createPostSubmit'])->name('create-post-submit');
    
    Route::get('post-profile/{id}',[GroupController::class,'postProfile'])->name('post-profile');
    Route::patch('like-post',[GroupController::class,'likePost'])->name('like-post');

    Route::post('post-comment',[GroupController::class,'postComment'])->name('post-comment');
    Route::patch('like-comment',[GroupController::class,'likeComment'])->name('like-comment');

    Route::get('/privategroups', [GroupController::class,'privateGroup'])->name('privategroups');
    

});

Route::get('/about', function () {
    return view('about');
})->name('about.about');

Route::get('/notifications', function () {
    return view('notifications');
})->name('notif.notif');






Route::get('/editprofile', function () {
    return view('editprofile');
})->name('editprofile');

Route::get('/createagroup', function () {
    return view('createagroup');
})->name('createagroup');



Route::get('book-title', function () {
    return view('Bookttitle');
})->name('book');
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::prefix('admin/')->group(function () {
    Route::get('dashboard', function () {
        return view('Admin/LandingPage');
    })->name('dashboard');
});

Route::prefix('author/')->group(function () {
    Route::get('dashboard', function () {
        return view('Author/LandingPage');
    })->name('dashboard');

    Route::get('book/index', function () {
        return view('Author/Books/BookIndex');
    })->name('book.index');

    // Route::get('book/create', function () {
    //     return view('Author/Books/BookCreate');
    // })->name('book.create');

    Route::get('book/view', function () {
        return view('Author/Books/BookView');
    })->name('book.view');



    Route::get('book/chapter/create', function () {
        return view('Author/Books/Chapter/ChapterCreate');
    })->name('book..chapter.create');

    Route::get('book/chapter/view', function () {
        return view('Author/Books/Chapter/ChapterView');
    })->name('book..chapter.view');
});

Route::prefix('reader/')->group(function () {
    Route::get('dashboard', function () {
        return view('Reader/LandingPage');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';