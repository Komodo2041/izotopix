@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>



<div class="container">
    <table class="table">
        <tr>
            <th>Z</th>
            <th>Skrót</th>
            <th>Nazwa</th>
            <th></th>
        </tr>
        @foreach ($data AS $elem)
        <tr>
            <td>{{$elem->z}}</td>
            <td>{{$elem->short}}</td>
            <td>{{$elem->name}}</td>
            <td>
                @if ($elem->columns == 18)
                Gaz szlachetny
                @endif
                @if ($elem->rows == 8)
                Lantanowiec
                @endif
                @if ($elem->rows == 9)
                Aktynowiec
                @endif
            </td>
        </tr>
        @endforeach
    </table>

</div>

@endsection('content')