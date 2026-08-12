@extends('template')
@section('content')

<h3>Izotopix</h3>

<a href="/elements" class="btn btn-info">Pierwiastki</a>
<a href="/fill/Elements" class="btn btn-info">Uzupełnij Pierwiastki</a>
<a href="/showTableFile" class="btn btn-info">Pokaż dane CSV</a>
<div class="container">
    <table class="elemTable">
        @for ($i = 1; $i <= 7; $i++)
            <tr>
            @for ($j = 1; $j <= 18; $j++)
                <td @if (!isset($res[$i][$j])) class="noelem" @endif @if (isset($res[$i][$j]) && $res[$i][$j]['isstab']==0) class="orange" @endif>

                @if (isset($res[$i][$j]))
                {{$res[$i][$j]['z']}}<br />
                {{$res[$i][$j]['short']}}<br />
                <span class="small">{{$res[$i][$j]['name']}}</span>
                @endif
                </td>
                @endfor
                </tr>
                @endfor
    </table>
    <br />
    <h4>Lantanowce</h4>
    <table class="elemTable">

        <tr>
            @for ($j = 1; $j <= 14; $j++)
                <td @if (isset($res[8][$j]) && $res[8][$j]['isstab']==0) class="orange" @endif>
                @if (isset($res[$i][$j]))
                {{$res[8][$j]['z']}}<br />
                {{$res[8][$j]['short']}}<br />
                <span class="small">{{$res[8][$j]['name']}}</span>
                @endif
                </td>
                @endfor
        </tr>

    </table>
    <br />
    <h4>Aktynowce</h4>
    <table class="elemTable">

        <tr>
            @for ($j = 1; $j <= 14; $j++)
                <td @if (isset($res[9][$j]) && $res[9][$j]['isstab']==0) class="orange" @endif>
                @if (isset($res[$i][$j]))
                {{$res[9][$j]['z']}}<br />
                {{$res[9][$j]['short']}}<br />
                <span class="small">{{$res[9][$j]['name']}}</span>
                @endif
                </td>
                @endfor
        </tr>

    </table>

</div>



@endsection('content')