@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>
<a href="/elements" class="btn btn-info">Pierwiastki Lista</a>



<div class="container">
    <table class="table">
        <tr>
            <th>Z</th>
            <th>Name</th>
            <th>Count Izo</th>
            <th>Diff</th>

        </tr>
        @foreach ($res AS $elem)
        <tr>
            <td>{{$elem['z']}}</td>
            <td>{{$elements[$elem['z']]}}</td>
            <td>{{$elem['count']}}</td>
            <td>
                {{$elem['max'] - $elem['min']}}
            </td>
        </tr>
        @endforeach
    </table>

</div>

@endsection('content')