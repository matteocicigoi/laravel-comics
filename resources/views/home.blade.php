@extends('layouts.main')

@section('main')
    <!-- Main -->
    <main>
        <!-- Jumbotron -->
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbo">
        <!-- Fine Jumbotron -->
        <!-- Current series -->
        <div class="current-serie">
            <span>Current Series</span>
        </div>
        <!-- Fine Current series -->
        <!-- Series -->
        <div class="series">
            <ul>
                @foreach ($comics as $comic)
                    <li class="info-series">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <h6>{{ $comic['series'] }}</h6>
                    </li>
                @endforeach
            </ul>
            <button class="load-more">
                load more
            </button>
        </div>
        <!-- FIne Series -->
        <!-- Shop -->
        <div class="shop">
            <ul class="list-element">
                @foreach ($shop['0'] as $element)
                <li>
                    <a href="{{ $element['link'] }}">
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/' . $element['img']) }}"
                                alt="digital comics">
                        </div>
                        <span>{{ $element['name'] }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Fine Shop -->
    </main>
    <!-- Fine Main -->
@endsection
