@extends('layaout.stencil')
@section('css')
    <link rel="stylesheet" href="../../resources/css/stencil.css">
    <link rel="stylesheet" href="../../resources/css/stencil.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
@endsection

@section('main')
    <div>
        <table id="myTable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $books)
                <tr>
                    <td>{{$books->name}}</td>
                    <td>{{$books->description}}</td>
                    <td>{{$books->type}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
    <script src="../../resources/js/table.js"></script>
@endsection