@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>

<form action="" method="get">
    <div class="form-group">
        Wyszukaj: <input type="number" max="118" name="z" value="{{$z}}" class="form-control" />
    </div>
</form>



<div class="container">

    <h4>Kolumny</h4>
    @foreach ($columns AS $c)
    {{$c}}<br />
    @endforeach


</div>

@endsection('content')