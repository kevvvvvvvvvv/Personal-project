@extends('layaout.stencil')
@section('css')
    <link rel="stylesheet" href="../resources/css/home.css">
@endsection
@section('main')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="title-principal">Prepare you wallet!</h1>
                <p class="text-principal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aenean bibendum consectetur pellentesque. Praesent vulputate 
                    mauris et porta fermentum. Curabitur pretium mi quis tincidunt 
                    ultricies. </p>
                    <a class="btn btn-primary" href="">Learn More</a>
            </div>
            <div class="col-12 col-md-6">
                <img src="../resources/images/principal-image.gif" alt="Nyan cat" id="principal-image">
            </div>
        </div>
    </div>

    <div class="conainer cont align-items-center d-flex justify-content-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-11 col-md-5 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      Books
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{route('app.book')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-5 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      Authors
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-5 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{route('app.result')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection