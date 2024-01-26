@extends('layouts.main')

@section('main')
    <main>
        <ul>
            @foreach ($comics as $comic)
                <li>{{ $comic['title'] }}</li>
            @endforeach
        </ul>
    </main>
@endsection
