@extends('template2')
@section('content')

<h3>Izotopix</h3>
<div class="mt">
    <a href="/elements" class="btn btn-info">Pierwiastki Lista</a>
    <a href="/serge" class="btn btn-info">Wykres Serga</a><br />
</div>


<table id="serge">
    <tr>
        <td>N|Z</td>
        @for ($j = 1; $j <= 120; $j++)
            <td>
            {{$j}}
            </td>
            @endfor
    </tr>
    @for ($i = 0; $i <= 200; $i++)
        <tr>
        <td>{{$i}}</td>
        @for ($j = 1; $j <= 120; $j++)
            <td @if (isset($res[$j][$i]) && $res[$j][$i]==1) class="black" @endif
            @if (isset($res2[$j][$i]) && $res2[$j][$i]==1) class="blue" @endif
            @if (isset($res3[$j][$i]) && $res3[$j][$i]==1) class="orange" @endif
            @if (isset($res4[$j][$i]) && $res4[$j][$i]==1) class="red" @endif
            @if (isset($res5[$j][$i]) && $res5[$j][$i]==1) class="oma" @endif>
            </td>
            @endfor
            </tr>
            @endfor

</table>





@endsection('content')