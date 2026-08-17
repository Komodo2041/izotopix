@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>
<a href="/elements" class="btn btn-info">Pierwiastki Lista</a>



<div class="container">
    <table class="table">
        <tr>
            <th>Z</th>
            <th>Name</th>
            <th>Stable Izo</th>
            <th>Diff</th>
            <th>Count abundance</th>
        </tr>
        @foreach ($res AS $elem)
        <tr>
            <td>{{$elem['z']}}</td>
            <td>{{$elements[$elem['z']]}}</td>
            <td>@if (isset($stable[$elem['z']])) {{$stable[$elem['z']]}} @else 0 @endif</td>
            <td>
                {{$elem['max'] - $elem['min']}}
            </td>
            <td>{{$elem['count']}}</td>
        </tr>
        @endforeach
    </table>

</div>

@endsection('content')