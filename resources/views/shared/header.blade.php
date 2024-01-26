<!-- Header -->
<header>
    <!-- Logo -->
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
    <!-- Fine Logo -->
    <!-- Menu -->
    <ul>
        @foreach ($linkHeader['menu'] as $key => $link)
        <li 
        @if($key === $linkHeader['selected'])
        class="selected"
        @endif
        ><a href="{{ $link['link'] }}">{{ $link['name'] }}</a></li>
        @endforeach
    </ul>
    <!-- Fine Menu -->
</header>
<!-- Fine Header -->
