<!-- Footer -->
<footer>
    <div class="menu-footer">
        <ul class="list-footer">
            @foreach ($linkFooter[0] as $link)
                <li>
                    <h2> {{ $link['title'] }}</h2>
                    <ul>
                        @foreach ($link['element'] as $page)
                            <li v-for="page in element.element">
                                <a href=" {{ $page['link'] }}"> {{ $page['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="footer-bottom">
        <div>
            <button>sign-up now!</button>
            <div class="links">
                <h2>{{ $bottomFooter['name'] }}</h2>
                <ul>
                    @foreach ($bottomFooter['link'] as $link)
                        <li><a href="{{ $link['link'] }}"></a><img
                                src="{{ Vite::asset('resources/img/' . $link['img']) }}" alt="Link"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Fine Footer -->
