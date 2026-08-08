@extends('template')
@section('content')

<a href="/" class=" btn btn-primary"> Strona główna</button></a>
<h3>Dodaj Pierwiastek</h3>


@if (isset($errorforms) && $errorforms != "")
<div class="alert alert-danger" role="alert">
    {{$errorforms}}
</div>
@endif

@if (isset($succesforms) && $succesforms != "")
<div class="alert alert-success" role="info">
    {{$succesforms}}
</div>
@endif

<div class="container">
    <form action="" method="Post">
        @csrf
        <div class="form-group">
            <label>Z</label>
            <input type="text" name="z" class="form-control" placeholder="id" value="{{$data['z']}}">
        </div>
        <div class="form-group">
            <label>Short</label>
            <input type="text" name="short" class="form-control" placeholder="Krótka nazwa" value="{{$data['short']}}">
        </div>
        <div class="form-group">
            <label>Nazwa</label>
            <input type="text" name="name" class="form-control" placeholder="Nazwa" value="{{$data['name']}}">
        </div>

        <div class="form-group">
            <label>Czy jest stabilny?</label>
            <select class="form-control" name="istab">
                <option value="1">Stabilny</option>
                <option value="0">Brak stabilnych izotopów</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kolumna</label>
            <input type="text" name="columns" class="form-control" placeholder="Column" value="{{$data['columns']}}">
        </div>


        <div class="form-group">
            <label>Rows</label>
            <select class="form-control" name="rows">
                @for ($i = 1; $i <= 9; $i++)
                    <option value="{{$i}}" @if ($i==$data['rows']) selected @endif>{{$i}}
                    @if ($i == 8) (Lantanowiec) @endif
                    @if ($i == 9) (Aktynowiec) @endif

                    </option>
                    @endfor
            </select>

        </div>

        <div class="form-group">
            <input type="hidden" value="1" name="save" />
            <input type="submit" class="btn btn-info" value="Dodaj Pierwiastek" />
        </div>
    </form>

</div>

@endsection('content')