<section style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb ">
                    <li><a href="{{ route('client.index') }}">@lang('language.homepage')</a></li>
                    @if ($slug && $title)
                    <li><a href="{{ route('client.postDetail', ['slug' => $slug]) }}"> {{ $title }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
