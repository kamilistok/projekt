@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <center>   <font size="20">Witaj co chcesz zrobić?</font></center>
                </div>
            </div>


<br>
            <br>





        </div>
    </div>
</div>


<center>
    <a class="btn btn-primary" align="right" href="{{route('pages.index')}}">  Baza danych</a>
    <a> Przejdź do zbioru pacjentów </a>
</center>
<br>
<center>
    <a class="btn btn-primary" align="right" href="{{route('pages.create')}}">  Dodaj nową osobę</a>
    <a> Dodaj pacjenta do bazy </a>
</center>




<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
        <input type="hidden" name="_token" value="waPyDitC8m0s9cpAManjv8yIQ5S0zymjlSlRpoLB">                                    </form>
</div>



@endsection
