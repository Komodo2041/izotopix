@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>

<br /><br />
<h3>Pierwiastek {{$id}} {{$element->name}} ({{$element->short}})</h3>
<br /><br />
<div class="container">

    @if ($izotopics)

    <table class="table">
        <tr>
            <th>Stability</th>
            <th>N</th>
            <th>abundance</th>
            <th>unc_a</th>
            <th>HT</th>
            <th>operator_hl</th>
            <th>unc_hl</th>
            <th>unit_hl</th>
            <th>half_life_sec</th>
        </tr>
        @foreach ($izotopics AS $i)
        <tr>
            <td>@if ($i->is_stable == 1) TAK @endif</td>
            <td>{{$i->n}}</td>
            <td>{{$i->abundance}}</td>
            <td>{{$i->unc_a}}</td>
            <td>{{$i->ht}}</td>
            <td>{{$i->operator_hl}}</td>
            <td>{{$i->unc_hl}}</td>
            <td>{{$i->unit_hl}}</td>
            <td>{{$i->half_life_sec}}</td>
        </tr>
        @endforeach
    </table>

    <table class="table">
        <tr>
            <th>Stability</th>
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
        @foreach ($izotopics AS $i)
        <tr>
            <td>@if ($i->is_stable == 1) TAK @endif</td>
            <td>{{$i->n}}</td>
            <td>{{$i->decay_1}}</td>
            <td>{{$i->decay_1_p}}</td>
            <td>{{$i->unc_1}}</td>
            <td>{{$i->decay_2}}</td>
            <td>{{$i->decay_2_p}}</td>
            <td>{{$i->unc_2}}</td>
            <td>{{$i->decay_3}}</td>
            <td>{{$i->decay_3_p}}</td>
            <td>{{$i->unc_3}}</td>
        </tr>
        @endforeach
    </table>


    @endif

</div>

@endsection('content')