<div class="col-md-3 col-xs-12 col-sm-3" style="order: 2;">
    @if($categories)
    @foreach($categories as $category)
    @if ($category->type != null)
    <aside class="ulTOUR">
        <h3><a href="#">{{ $category->name }}</a></h3>
        <ul>
            @if ($category->children)
            @foreach($category->children as $subCate)
            <li><a href="{{ route('client.contentList', ['slug' => $subCate->slug]) }}">{{ $subCate->name }}</a></li>
            @endforeach
            @endif
        </ul>
        <div class="clearfix-20"></div>
    </aside>
    @endif
    @endforeach
    @endif
</div>
