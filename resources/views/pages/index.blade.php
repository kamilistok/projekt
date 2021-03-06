@extends('layout')

@section('content')

    <br>


    <br>
    <br>

    <div class="content">
        <div class="title m-b-md">
            <center>    <font size="26"> RejestrPol </font> </center>
        </div>
    </div>

    <br>
    <br>
    <br>


    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Numer dowodu</th>
            <th>Miasto</th>
            <th>Ulica</th>
            <th>Numer domu</th>
            <th>Numer telefonu</th>
            <th>Edycja</th>
            <th>Usuń</th>
        </tr>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>{{ $page->lastName }}</td>
                <td>{{ $page->ZIPcode }}</td>
                <td>{{ $page->city }}</td>
                <td>{{ $page->street }}</td>
                <td>{{ $page->buildingNumber }}</td>
                <td>{{ $page->phoneNumber }}</td>
                <td><a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edycja</a></td>
                <td>
                    {!! Form::model($page, ['route'=> ['pages.delete', $page], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usuń dane</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach


    </table>

    <center>
    <a class="btn btn-primary" align="right" href="{{route('pages.create')}}">  Dodaj Osobę</a>
    </center>
    <br>
    <center>
        <a class="btn btn-primary" href="{{route('home')}}">  Powrót</a>
    </center>
    {{$pages->links()}}


@endsection