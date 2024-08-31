<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view('app.home');
    }
    
    public function book(){
        $book = Book::paginate();
        return view('app.book',compact('book'));
    }

    public function result(){
        $book= Book::all();
        return view('app.result',compact('book'));
    }
}
