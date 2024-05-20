@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li>{{ $comic['title'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection