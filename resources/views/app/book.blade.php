@extends('layaout.stencil')
@section('css')
    <link rel="stylesheet" href="../../resources/css/stencil.css">
    <link rel="stylesheet" href="../../resources/css/stencil.css">
@endsection
@section('main')

    <div class="container">
        <div class="row align-items-center justify-content-center">
            @foreach($book as $books)
            <div class="card col-10 col-md-5">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$books->name}}</h5>
                <p class="card-text">{{$books->description}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div>
        {{$book->links('pagination::bootstrap-5')}}
    </div>
   <div>
    <button class="btn btn-outline-primary">
        <a href="{{route('app.home')}}">Back</a>
    </button>
   </div>

@endsection