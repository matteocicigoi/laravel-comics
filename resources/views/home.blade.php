@extends('layouts.main')

@section('main')
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
                <li>
                    <a href="#">
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital comics">
                        </div>
                        <span>digital comics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="dc merchandise">
                        </div>
                        <span>dc merchandise</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription">
                        </div>
                        <span>subscription</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comic shop locator">
                        </div>
                        <span>comic shop locator</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="img">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="dc power visa">
                        </div>
                        <span>dc power visa</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Fine Shop -->
    </main>
@endsection
