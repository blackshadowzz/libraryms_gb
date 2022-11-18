<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home')
        ->middleware('auth');
Route::middleware('auth')->group(function(){
    Route::resource('authors', AuthorController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('racks', RackController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('books', BookController::class);

    //view book home page
    Route::get('home',function(Request $re){
        $book=Book::with('Supplier')->with('Category')->with('Author')->paginate(7);
        if($re->query('search')){
            $book=Book::where('book_title','LIKE','%'.$re->query('search').'%')
            ->orWhere('isbn','LIKE','%'.$re->query('search').'%')
            ->orWhere('language','LIKE','%'.$re->query('search').'%')
            ->with('Supplier')->with('Category')->with('Author')->paginate(7);
        }
        $b_count=Book::all()->count();
        $cate_count=Category::all()->count();
        $auth_count=Author::all()->count();
        return view('home',compact('book','b_count','cate_count','auth_count'));
    });
}); 