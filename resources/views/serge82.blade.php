@extends('template2')
@section('content')

<h3>Izotopix</h3>
<div class="mt">
    <a href="/elements" class="btn btn-info">Pierwiastki Lista</a>
    <a href="/serge" class="btn btn-info">Wykres Serga</a>
    <a href="/serge82" class="btn btn-info">Wykres Serga 82</a><br />
</div>


<table id="serge">
    <tr>
        <td>N\Z</td>
        @for ($j = 83; $j <= 160; $j++)
            <td>
            {{$j}}
            </td>
            @endfor
    </tr>
    @for ($i = 127; $i <= 300; $i++)
        <tr>
        <td>{{$i}}</td>
        @for ($j = 83; $j <= 160; $j++)
            @php
            $classes=[];
            if (isset($res[$j][$i]) && $res[$j][$i]==1) {
            $classes[]="black" ;
            } elseif (isset($res2[$j][$i]) && $res2[$j][$i]==1) {
            $classes[]="blue" ;
            } elseif (isset($res3[$j][$i]) && $res3[$j][$i]==1) {
            $classes[]="orange" ;
            } elseif (isset($res4[$j][$i]) && $res4[$j][$i]==1) {
            $classes[]="red" ;
            } elseif (isset($res5[$j][$i]) && $res5[$j][$i]==1) {
            $classes[]="oma" ;
            } elseif (isset($res6[$j][$i]) && $res6[$j][$i]==1) {
            $classes[]="oma2" ;
            }elseif (isset($res7[$j][$i]) && $res7[$j][$i]==1) {
            $classes[]="oma3" ;
            }

            if (in_array($i, [8 + 126,20 + 126,28 + 126,50 + 126,82 + 126, 126 + 126]) || in_array($j, [8 + 82,20 + 82,28 + 82,50 + 82,82 + 82, 126 + 82])) {
            $classes[]="magic" ;
            }

            $classes=implode(" ", $classes);
            @endphp
            <td class=" {{$classes}}"
            </td>
            @endfor
            </tr>
            @endfor

</table>





@endsection('content')