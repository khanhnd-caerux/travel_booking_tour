<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#">
<head id="Head1" prefix="og: http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
    @include('Core::layouts.frontend.meta')
    @yield('css')
</head>
<body>
    @include('Core::layouts.frontend.header')
    @yield('content')
    @include('Core::layouts.frontend.footer')
    @include('Core::layouts.frontend.footer-widgets')
    <input type="hidden" id="Itid" name="Itid" value="1">
    @include('Core::layouts.frontend.pwa-script')
    @yield('js')
</body>
</html>
