<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Countries</h4>
    <ul class="list cat-list">
        @dd($countries)
        @foreach ($countries as $country)            
        <li>
            <a href="#" class="d-flex">
                <p>{{$country->name}}</p>
                <p>({{}})</p>
            </a>
        </li>
        @endforeach

    </ul>
</aside>