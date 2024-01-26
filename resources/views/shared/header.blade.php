<!-- Header -->
<header>
    <!-- Logo -->
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
    <!-- Fine Logo -->
    <!-- Menu -->
    <ul>
        @foreach ($linkHeader[0]['menu'] as $key => $link)
        <li 
        @if($key === $linkHeader[0]['selected'])
        class="selected"
        @endif
        ><a href="{{ $link['link'] }}">{{ $link['name'] }}</a></li>
        @endforeach
    </ul>
    <!-- Fine Menu -->
</header>
<!-- Fine Header -->
