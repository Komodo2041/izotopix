@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>

<a href="/importToTableIzoyopic" class=" btn btn-primary">Importuj podstawowe dane do bazy</button></a>

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
            <th>abundance</th>
            <th>unc_a</th>
            <th>HT</th>
            <th>operator_hl</th>
            <th>unc_hl</th>
            <th>unit_hl</th>
            <th>half_life_sec</th>
        </tr>
        @foreach ($res AS $r)
        <tr>
            <td>{{$r[1]}}</td>
            <td>{{$r[5]}}</td>
            <td>{{$r[6]}}</td>
            <td>{{$r[12]}}</td>
            <td>{{$r[13]}}</td>
            <td>{{$r[14]}}</td>
            <td>{{$r[15]}}</td>
            <td>{{$r[16]}}</td>
        </tr>
        @endforeach
    </table>

    <table class="table">
        <tr>
            <th>N</th>
            <th>decay_1</th>
            <th>decay_1_%</th>
            <th>unc_1</th>
            <th>decay_2</th>
            <th>decay_2_%</th>
            <th>unc_2</th>
            <th>decay_3</th>
            <th>decay_3_%</th>
            <th>unc_3</th>

        </tr>
        @foreach ($res AS $r)
        <tr>
            <td>{{$r[1]}}</td>
            <td>{{$r[18]}}</td>
            <td>{{$r[19]}}</td>
            <td>{{$r[20]}}</td>
            <td>{{$r[21]}}</td>
            <td>{{$r[22]}}</td>
            <td>{{$r[23]}}</td>
            <td>{{$r[24]}}</td>
            <td>{{$r[25]}}</td>
            <td>{{$r[26]}}</td>
        </tr>
        @endforeach
    </table>

    @else
    <h4>Kolumny</h4>
    @foreach ($columns AS $id => $c)
    {{$id}} - {{$c}}<br />
    @endforeach

    @include('describeColumns', [])

    @endif

</div>

@endsection('content')