<div class="col-md-3 col-xs-12 col-sm-3" style="order: 2;">
    @if($categories)
    @foreach($categories as $category)
    <aside class="ulTOUR">
        <h3><a href="https://hagiangopentour.com/tour-ha-giang.html">{{ $category->name }}</a></h3>
        <ul>
            @if ($category->children)
            @foreach($category->children as $subCate)
            <li><a href="{{ route('client.tourList', ['slug' => $subCate->slug]) }}">{{ $subCate->name }}</a></li>
            @endforeach
            @endif
        </ul>
        <div class="clearfix-20"></div>
    </aside>
    @endforeach
    @endif
</div>
