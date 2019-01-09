@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('pages.create')}}">Dodaj stronę</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Numer dowodu</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Miasto</th>
            <th>Ulica</th>
            <th>Numer domu</th>
            <th>Numer dowodu2</th>
            <th>Numer telefonu</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->idnumber }}</td>
            <td>{{ $page->name }}</td>
            <td>{{ $page->lastname }}</td>
            <td>{{ $page->city }}</td>
            <td>{{ $page->street }}</td>
            <td>{{ $page->housenumber }}</td>
            <td>{{ $page->ZIPcode }}</td>
            <td>{{ $page->phonenumber }}</td>
            <td><a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edit</a> </td>
            <td>
                {!! Form::model($page, ['route'=> ['pages.delete', $page], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger" >Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </table>

    {{$pages->links()}}


@endsection