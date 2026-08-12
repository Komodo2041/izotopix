@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>

<form action="" method="get">
    <div class="form-group">
        Pokaż Z: <input type="number" max="118" name="z" value="{{$z}}" class="form-control" />
    </div>
    <input type="submit" class="btn btn-info" value="Sprawdź" name="S" />
</form>



<div class="container">

    @if ($res)
    Liczba Z: {{$z}}<br />
    <table class="table">
        <tr>
            <th>N</th>
            <th>HT</th>

            <th>operator_hl</th>
            <th>unc_hl</th>
            <th>unit_hl</th>
            <th>half_life_sec</th>
        </tr>
        @foreach ($res AS $r)
        <tr>
            <td>{{$r[1]}}</td>
            <td>{{$r[12]}}</td>
            <td>{{$r[13]}}</td>
            <td>{{$r[14]}}</td>
            <td>{{$r[15]}}</td>
            <td>{{$r[16]}}</td>
        </tr>
        @endforeach
    </table>
    @else
    <h4>Kolumny</h4>
    @foreach ($columns AS $id => $c)
    {{$id}} - {{$c}}<br />
    @endforeach
    @endif

</div>

@endsection('content')